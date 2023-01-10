<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Registro;
use App\Models\Sucursal;
use App\Models\Topico;
use App\Models\Trimestre;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class RevisionAdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $sucursal = Sucursal::find($request->suc);
        $trimestre = Trimestre::find($request->trim);
        $topico = Topico::find($request->top);

        $promedio_riesgo = Registro::select(DB::raw('AVG(nivel_riesgo) AS avg'), 'trimestre_id')
            ->where('sucursal_id', $sucursal->id)
            ->where('topico_id', $topico->id)
            ->groupBy('trimestre_id')
            ->pluck('avg', 'trimestre_id');

        $total_cumplimiento = Registro::select(DB::raw('COUNT(*) as count'), 'trimestre_id')
            ->where('sucursal_id', $sucursal->id)
            ->where('topico_id', $topico->id)
            ->where('cumplimiento', 'SI')
            ->groupBy('trimestre_id')
            ->pluck('count', 'trimestre_id');

        $cumplimiento_general = Registro::select(DB::raw('COUNT(*) as count'), 'trimestre_id')
            ->where('sucursal_id', $sucursal->id)
            ->where('topico_id', $topico->id)
            ->where('cumplimiento', 'SI')
            ->groupBy('trimestre_id')
            ->pluck('count', 'trimestre_id');

        $total_por_trim = Registro::select(DB::raw('COUNT(*) as count'), 'trimestre_id')
            ->where('sucursal_id', $sucursal->id)
            ->where('topico_id', $topico->id)
            ->groupBy('trimestre_id')
            ->pluck('count', 'trimestre_id');

        //dd($cumplimiento_general, $total_por_trim);

        return view(
            'dashboardadmin',
            compact(
                'sucursal',
                'trimestre',
                'topico',
                'promedio_riesgo',
                'total_cumplimiento',
                'cumplimiento_general',
                'total_por_trim'
            )
        );
    }

    public function generar_pdf(Request $request)
    {
        $sucursal = Sucursal::find($request->suc);
        $trimestre = Trimestre::find($request->trim);
        $topico = Topico::find($request->top);
        $buscar = $request->buscar;

        $query = Registro::where('sucursal_id', $sucursal->id)
            ->where('trimestre_id', $trimestre->id)
            ->where('topico_id', $topico->id);

        if ($buscar) {
            $query->where(function ($query) use ($buscar) {
                $query->where('nombre_socio', 'ILIKE', '%' . $buscar . '%')
                    ->orwhere('num_socio', 'LIKE', '%' . $buscar . '%')
                    ->orwhere('fecha_colocacion', 'LIKE', '%' . $buscar . '%')
                    ->orwhere('ref_credito', 'LIKE', '%' . $buscar . '%');
            });
        }

        $registros = $query->orderBy('id', 'asc')->get();

        $pdf = Pdf::loadView('pdf.pdf_cuestionario', compact('registros', 'sucursal', 'trimestre', 'topico'))->setPaper('a4', 'landscape');

        return $pdf->stream('registros.pdf');
    }
}

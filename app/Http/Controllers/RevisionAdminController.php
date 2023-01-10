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
use Illuminate\Support\Facades\Session;

class RevisionAdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $sucursal = $request->sucursal;
        $trimestre = $request->trimestre;
        $topico = $request->topico;


        $sucursal_id = Sucursal::where('nombre', $sucursal)->first()->id;
        $topico_id = Topico::where('nombre', $topico)->first()->id;

        $promedio_riesgo = Registro::select(DB::raw('AVG(nivel_riesgo) AS avg'), 'trimestre_id')
            ->where('sucursal_id', $sucursal_id)
            ->where('topico_id', $topico_id)
            ->groupBy('trimestre_id')
            ->pluck('avg', 'trimestre_id');

        $total_cumplimiento = Registro::select(DB::raw('COUNT(*) as count'), 'trimestre_id')
            ->where('sucursal_id', $sucursal_id)
            ->where('topico_id', $topico_id)
            ->where('cumplimiento', 'SI')
            ->groupBy('trimestre_id')
            ->pluck('count', 'trimestre_id');

        $cumplimiento_general = Registro::select(DB::raw('COUNT(*) as count'), 'trimestre_id')
            ->where('cumplimiento', 'SI')
            ->groupBy('trimestre_id')
            ->pluck('count', 'trimestre_id');

        $total_por_trim = Registro::select(DB::raw('COUNT(*) as count'), 'trimestre_id')
            ->groupBy('trimestre_id')
            ->pluck('count', 'trimestre_id');

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
        $registros = json_decode($request->registros);
        $sucursal = $request->sucursal;
        $trimestre = $request->trimestre;
        $topico = $request->topico;

        $pdf = Pdf::loadView('pdf.pdf_cuestionario', compact('registros', 'sucursal', 'trimestre', 'topico'))->setPaper('a4', 'landscape');

        return $pdf->stream('registros.pdf');
    }
}

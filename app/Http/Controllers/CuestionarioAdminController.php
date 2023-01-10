<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Registro;
use App\Models\Sucursal;
use App\Models\Topico;
use App\Models\Trimestre;
use Illuminate\Support\Facades\Session;

class CuestionarioAdminController extends Controller
{

    public function cuestionario()
    {
        return view('cuestionarioadmin');
    }

    public function filtrar_registros(Request $request)
    {
        $sucursal = Sucursal::find($request->select1);
        $trimestre = Trimestre::find($request->select2);
        $topico = Topico::find($request->select3);

        $registros = Registro::where('sucursal_id', $sucursal->id)
            ->where('trimestre_id', $trimestre->id)
            ->where('topico_id', $topico->id)->get();

        $revisar = false;
        foreach ($registros as $registro) {
            if ($registro->factura != null) $revisar = true;
        }

        if ($revisar)
            return redirect('/revisar-registros')->with([
                "registros" => $registros,
                "sucursal" => $sucursal->nombre,
                "trimestre" => $trimestre->fecha_inicial . ' a ' . $trimestre->fecha_final,
                "topico" => $topico->nombre
            ]);

        return view('cuestionarioadmin', [
            "registros" => $registros,
            "sucursal" => $sucursal,
            "trimestre" => $trimestre,
            "topico" => $topico
        ]);
    }

    public function guardar_registros(Request $request)
    {
        $inputs = $request->all();
        $registros = [];

        foreach ($inputs["id"] as $key => $id) {
            $registro = Registro::find($id);

            $registro->finalidad = $inputs["finalidad"][$key];
            $registro->factura = $inputs["factura"][$key];
            $registro->endoso_a_favor_cooperativa = $inputs["endoso_a_favor_cooperativa"][$key];
            $registro->garantia_cubre_credito = $inputs["garantia_cubre_credito"][$key];
            $registro->poliza = $inputs["poliza"][$key];
            $registro->seguro = $inputs["seguro"][$key];
            $registro->observaciones = $inputs["observaciones"][$key];

            $registro->cumplimiento = 'SI';
            $nivel_riesgo = 0;

            if ($registro->factura != 'SI')  $nivel_riesgo += 1;
            if ($registro->endoso_a_favor_cooperativa != 'SI')  $nivel_riesgo += 1;
            if ($registro->garantia_cubre_credito != 'SI')  $nivel_riesgo += 1;
            if ($registro->poliza != 'SI')  $nivel_riesgo += 1;
            if ($registro->seguro != 'SI')  $nivel_riesgo += 1;

            if ($nivel_riesgo > 0) $registro->cumplimiento = 'NO';
            $registro->nivel_riesgo = $nivel_riesgo;

            $registro->save();
            $registros[] = $registro;
        }

        return redirect('/revisar-registros')->with([
            "registros" => $registros,
            "sucursal" => $inputs["sucursal"],
            "trimestre" => $inputs["trimestre"],
            "topico" => $inputs["topico"]
        ]);
    }

    public function revisar_registros()
    {
        $sucursal = Session::get('sucursal');
        $trimestre = Session::get('trimestre');
        $topico = Session::get('topico');
        $registros = Session::get('registros');

        if (!$registros) return redirect('/admin');

        return view('revisionadmin', [
            "registros" => $registros,
            "sucursal" => $sucursal,
            "trimestre" => $trimestre,
            "topico" => $topico
        ]);
    }


    /*  public function registro(Request $request){

        $query=trim($request->get('searchText'));
        $sucursal=DB::table('sucursales')
        ->where('nombre','LIKE','%'.$query.'%')
        ->paginate(1500);

        $trimestres=DB::table('trimestre')
        ->where('nombre','LIKE','%'.$query.'%')
        ->orderBy('id','asc')
        ->paginate(1500);

        $topicos=DB::table('topicos')
        ->where('nombre','LIKE','%'.$query.'%')
        ->orderBy('id','asc')
        ->paginate(1500);
        return view('cuestionarioadmin',["trimestres"=>$trimestres,"searchText"=>$query,"topicos"=>$topicos,"searchText"=>$query, "sucursal"=>$sucursal,"searchText"=>$query]);
}*/
}

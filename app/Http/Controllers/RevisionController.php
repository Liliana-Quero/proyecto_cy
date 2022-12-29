<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registros;

class RevisionController extends Controller
{
    public function revision(Request $request)
    {
            if ($request)
            {

                $query=trim($request->get('searchText'));
                $registros=DB::table('registros')
               ->where('nombre_socio','LIKE','%'.$query.'%')
                ->orwhere('num_socio','LIKE','%'.$query.'%')
                ->orwhere('fecha_colocacion','LIKE','%'.$query.'%')
                ->orwhere('ref_credito','LIKE','%'.$query.'%')
                ->orderBy('id','asc')
                ->paginate(100000);
                return view('revision',["registros"=>$registros,"searchText"=>$query]);
            }
        }
        public function generar_pdf()
        {
            $registros = Registros::all();
            $pdf = PDF::loadView('pdf.pdf_cuestionario', compact('registros'))->setPaper(array(0,0,1683.78,2383.94), 'landscape');

            return $pdf->stream('registros.pdf');
        }
    }

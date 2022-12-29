<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class CuestionarioController extends Controller
{
    public function index(Request $request)
    {
        $registros=DB::table('registros')
        ->orderBy('id','asc')
        ->paginate(15);
        return view('cuestionario',["registros"=>$registros]);
    }

    public function cuestionario()
    {
        return view('cuestionario');
    }

    public function validar() {
        return view('cuestionario');
    }

    public function inicio(){

        $users = user::all();
        return $users;
    }

    public function registro(Request $request){

        $query=trim($request->get('searchText'));
        $sucursal=DB::table('sucursales')
        ->where('nombre','LIKE','%'.$query.'%')
        ->paginate(15);

        $trimestres=DB::table('trimestre')
        ->where('nombre','LIKE','%'.$query.'%')
        ->orderBy('id','asc')
        ->paginate(15);

        $topicos=DB::table('topicos')
        ->where('nombre','LIKE','%'.$query.'%')
        ->orderBy('id','asc')
        ->paginate(15);
        return view('cuestionario',["trimestres"=>$trimestres,"searchText"=>$query,"topicos"=>$topicos,"searchText"=>$query, "sucursal"=>$sucursal,"searchText"=>$query]);
}

}

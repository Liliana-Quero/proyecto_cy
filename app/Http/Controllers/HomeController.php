<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(Request $request)
    {
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
        return view('home.index',["trimestres"=>$trimestres,"searchText"=>$query,"topicos"=>$topicos,"searchText"=>$query, "sucursal"=>$sucursal,"searchText"=>$query]);
    }


}

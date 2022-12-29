<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TRIMESTRE;
use App\Models\SUCURSAL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SucursalController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {

            $query=trim($request->get('searchText'));
            $sucursales=DB::table('sucursales')
            ->where('nombre','LIKE','%'.$query.'%')
            ->paginate(5);
            return view('admin',["sucursales"=>$sucursales,"searchText"=>$query]);
        }

}
    public function obtenerTrimestre()
    {
       return TRIMESTRE::all();
    }



    public function obtenerSucursal()
    {
       return SUCURSAL::all();
    }


}

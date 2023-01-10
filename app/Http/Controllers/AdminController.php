<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SucursalRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Trimestre;
use App\Models\Sucursal;


class AdminController extends Controller
{
    public function index(Request $request)
    {

        $query = trim($request->get('searchText'));
        $sucursal = DB::table('sucursales')
            ->where('nombre', 'LIKE', '%' . $query . '%')
            ->paginate(15);

        $trimestres = DB::table('trimestre')
            ->where('nombre', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'asc')
            ->paginate(15);

        $topicos = DB::table('topicos')
            ->where('nombre', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'asc')
            ->paginate(15);

        return view('admin', ["searchText" => $query, "trimestres" => $trimestres, "searchText" => $query, "topicos" => $topicos, "searchText" => $query, "sucursal" => $sucursal, "searchText" => $query]);
    }


    public function store(Request $request)
    {
        $sucursal = new sucursal();
        $sucursal->asignarsucursal($request->get('sucursal'));
        $sucursal->save();
        return redirect('/cuestionarioadmin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TrimestreController extends Controller
{
    public function trimestre()
    {
        return view('cuestionario');
        return view('admin');

    }

    public function index(Request $request)
    {
        if ($request)
        {

            $query=trim($request->get('searchText'));
            $trimestres=DB::table('trimestre')
            ->where('name','LIKE','%'.$query.'%')
            ->orderBy('id','asc')
            ->paginate(5);
            return view('admin',["trimestres"=>$trimestres,"searchText"=>$query]);
        }

}

}

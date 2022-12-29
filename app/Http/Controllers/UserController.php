<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UsuarioFormRequest;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Models\Usuario as ModelsUsuario;
use App\Models\Trimestre as ModelsTrimestre;
use Illuminate\Support\Facades\DB;
use PDF;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        }

        public function index(Request $request)
        {
            if ($request)
            {

                $query=trim($request->get('searchText'));
                $usuarios=DB::table('users')
                ->where('name','LIKE','%'.$query.'%')
                ->orwhere('role','=', 'admin' or 'usuario')
                ->orwhere('role','LIKE','%'.$query.'%')
                ->orwhere('email','LIKE','%'.$query.'%')
                ->orderBy('id','asc')
                ->paginate(10);
                return view('usuarios',["usuarios"=>$usuarios,"searchText"=>$query]);
            }

    }
    public function store (UsuarioFormRequest $request)
    {
        $usuario=new ModelsUsuario();
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->role=$request->get('role');
        $usuario->username=$request->get('username');
        $usuario->password=$request->get('password');

        $usuario->save();
        return Redirect::to('usuarios');
    }
    public function show($id){
        return view("usuarios",["usuario"=>ModelsUsuario::findOrFail($id)]);
    }

    public function edit($id){
        $usuario=ModelsUsuario::find($id);
        return view('admin.edit', compact('usuario'));

    }

    public function update(UsuarioFormRequest $request,$id){
        $usuario=ModelsUsuario::findOrFail($id);

        $data = $request->only('name','username', 'email');
        if(trim($request->password)=='')
        {
            $data=$request->except('password');
        }
        else{
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }
        $usuario->update($data);

        return redirect()->route('/usuarios', $usuario->id)->with('success', 'Usuario actualizado correctamente');

    }
    public function destroy(ModelsUsuario $usuario)
    {
        $usuario ->delete();
        return back()->with('succes', 'Usuario Eliminado');
        Session::flash('message', 'Usuario eliminado');

    }
    public function generar()
    {
        $usuarios = ModelsUsuario::all();
        $pdf = PDF::loadView('pdf.generar_pdf', compact('usuarios'));
        return $pdf->download('usuarios.pdf');
    }
}

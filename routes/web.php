<?php

namespace App\Http\Controllers;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CuestionarioController;
use App\Http\Controllers\CuestionarioAdminController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RevisionController;
use App\Http\Controllers\RevisionAdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Sucursal;

Route::get('/admin', function(Request $request)
{
    $data = $request->get('sucursal');
    return redirect('/cuestionarioadmin',['data'=> $data]);
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios','UserController');
Route::resource('admin','UserController');

Route::resource('revision','RevisionController');
Route::resource('layouts.partials','RevisionController');


Route::get('/cuestionario', function () {
    return view('cuestionario');
});
Route::get('/cuestionarioadmin', function () {
    return view('cuestionarioadmin');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/revision', function () {
    return view('revision');
});


Route::get('/revisionadmin', function () {
    return view('revisionadmin');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/usuarios', function () {
    return view('usuarios');
});
Route::get('/logout', function () {
    return view('auth.logout');
});

Route::get('pdf/pdf', function () {
    return view('register');
});
Route::get('/perfil', function () {
    return view('auth.perfil');
});

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/admin', [AdminController::class, 'store']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/logout', [LogoutController::class, 'logout']);
Route::get('/cuestionario', [CuestionarioController::class, 'cuestionario']);
Route::get('/cuestionarioadmin', [CuestionarioAdminController::class, 'cuestionarioadmin']);
Route::get('/revisionadmin', [RevisionAdminController::class, 'revisionadmin']);
Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/revision', [RevisionController::class, 'revision']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('download',[UserController::class, 'downloadPDF'])-> name('download');
Route::get('download', '\App\Http\Controllers\UserController@generar')-> name('descargar');
Route::get('download-pdf',[RevisionAdminController::class, 'downloadPDF'])-> name('download-pdf');
Route::get('download-pdf', '\App\Http\Controllers\RevisionAdminController@generar_pdf')-> name('descargar-pdf');

Route::delete('/ModelsUsuario/{usuario}',[UserController::class, 'destroy'])-> name('usuarios.delete');
Route::get('/ModelsUsuario/{usuario}/edit',[UserController::class, 'edit'])-> name('usuarios.edit');
Route::put('/ModelsUsuario/{usuario}', [UserController::class, 'update'])->name('usuarios.update');
Route::get('/admin',[AdminController::class, 'index']);
Route::get('/cuestionarioadmin',[AdminController::class, 'store']);
Route::get('/cuestionarioadmin', [CuestionarioAdminController::class, 'registro']);

Route::get('/admin', [AdminController::class,'index']);


Route::get ('/admin', function() {
  return view ('cuestionarioadmin', ('@value.select1.admin'));});

Route::get('/admin', [AdminController::class,'index'])
->middleware('auth.admin')
->name('admin');

Route::get('/cuestionarioadmin', [CuestionarioAdminController::class,'index'])
->middleware('auth.admin')
->name('admin.index');

Route::get('/cuestionario', [CuestionarioController::class,'index']);


Route::get('/usuarios', [UserController::class,'index'])
->middleware('auth.admin')
->name('admin.index');



@extends('layouts.admin-app')
@section('content')
@auth
<button onclick="location.href='/usuarios';" class="btn btn-success" style="font-size: 21px; margin-top:10px">Regresar</button>


           <br>
           <h2 class="text-center">
        <img  src="{!! asset('images/perfil-del-usuario.png') !!}" alt="usuario" width="50" height="50" style=" opacity:75%">
        &nbsp
        Editar datos del usuario: {{$usuario->username}}</h2>
           <div class="form-floating mb-2 mx-auto"
    style="font-size:16px; margin-left: 17px; width: 700px;  "><br>

           <form action="{{route('usuarios.update', $usuario->id)}}" method="post" class="form-horizontal" >
                      @csrf
					  @method('PUT')
				<div class="card">

<div class="card-header card-header-primary">
 <label for="name" class="col-sm-2  col-form-label"style="margin-left: 5px;">
                    <img  src="{!! asset('images/usuario-nombre.png') !!}" alt="usuario" width="17" height="17" style=" opacity:85%">
                    Nombre :</label></div>
<input type="text" class="form-control" name="name" value="{{ $usuario->name }}" autofocus>

<div class="card-header card-header-primary">
 <label for="email" class="col-sm-4 col-form-label"style="margin-left: 5px;">
          <img  src="{!! asset('images/email.png') !!}" alt="usuario" width="23" height="23" style=" opacity:75%">
Correo electrónico</label></div>
                  <input type="email" class="form-control" name="email" value="{{ old('email', $usuario->email) }}">

                  <div class="card-header card-header-primary">
<label for="username" class="col-sm-4  col-form-label"style="margin-left: 5px; ">
          <img  src="{!! asset('images/usuario-nombre.png') !!}" alt="usuario" width="17" height="17 style=" opacity:85%">
          Nombre de usuario:</label></div>
<input type="text" class="form-control" name="username" value="{{ $usuario->username }}">


<div class="card-header card-header-primary">
<label for="password" class="col-sm-2 col-form-label"style="margin-left: 5px; ">
<img  src="{!! asset('images/contrasena.png') !!}" alt="usuario" width="23" height="23" style=" opacity:75%">Contraseña</label>
</div>
<input type="password" class="form-control" name="password" value="">


 <!--Footer-->
 <div class="card-footer ml-auto mr-auto text-center">
              <button type="submit" class="btn btn-success" style="font-size: 21px; margin-top:10px">Actualizar</button>
            </div></div>          </div>
            <!--End footer-->
          </div>
        </form>


@endauth

@endsection



@extends('layouts.admin-app')
@section('content')
<br>



    <form action="/register" method="POST">
        @csrf
        <a  style="margin-left: 29px; font-size:large" class="btn btn-md btn btn-success" href="/admin" role="button">&laquo; Regresar </a>
<div class="mx-auto" style="width: 600px; font-size:18px" >

        <h1 class="text-center">
        <img  src="{!! asset('images/agregar-usuario.png') !!}" alt="usuario" width="59" height="58" style=" opacity:75%">
        &nbsp
        REGISTRAR USUARIO:</h1>
        @include('layouts.partials.messages')
<br>

        <div class="form-floating mb-3 mx-auto" style="font-size:18px; width: 600px;  ">
        <input type="email" placeholder="nombre@ejemplo.com" style="text-align: center" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">
        <img  src="{!! asset('images/email.png') !!}" alt="usuario" width="27" height="27" style=" opacity:75%">
        Correo electrónico</label>

  </div>
  <div class="form-floating mb-3 mx-auto" style="font-size:18px; width: 600px;  ">

        <input type="text" placeholder="nombre" name="name" style="text-align: center" class="form-control" id="exampleInputPassword1" >
        <label for="exampleInputPassword1" class="form-label"  >
        <img  src="{!! asset('images/usuario-nombre.png') !!}" alt="usuario" width="20" height="20" style=" opacity:85%">
        Nombre</label>

</div>
<div class="form-floating mb-3 mx-auto" style="font-size:18px; width: 600px;  ">

        <input type="text" placeholder="role" name="role" style="text-align: center" class="form-control" id="exampleInputPassword1" >
        <label for="exampleInputPassword1" class="form-label">
        <img  src="{!! asset('images/usuario-nombre.png') !!}" alt="usuario" width="20" height="20" style=" opacity:85%">
        Rol (usuario o admin)</label>
</div>
<!--<div class="form-group">
					{!! Form::label('type','Tipo de usuario') !!}
					{!! Form:: select('type',[''=>'Seleccione tipo de usuario'  ,'member' => 'Miembro','admin'=>'Administrador'], null, ['class'=>'form-control']) !!}
				</div>-->

<div class="form-floating mb-3 mx-auto" style="font-size:18px; width: 600px;  ">
        <input type="text" placeholder="nombre de usuario" name="username" style="text-align: center" class="form-control" id="exampleInputPassword1">
        <label for="exampleInputPassword1" class="form-label">
        <img  src="{!! asset('images/usuario-nombre.png') !!}" alt="usuario" width="20" height="20" style=" opacity:85%">
        Nombre de Usuario</label>
  </div>

  <div class="form-floating mb-3 mx-auto" style="font-size:18px; width: 600px;  ">
    <input type="password" placeholder="contraseña" name="password" style="text-align: center" class="form-control" id="exampleInputPassword1">
    <label for="exampleInputPassword1" class="form-label">
    <img  src="{!! asset('images/contrasena.png') !!}" alt="usuario" width="27" height="27" style=" opacity:75%">
    Contraseña</label>
  </div>
  <div class="form-floating mb-3 mx-auto" style="font-size:18px; width: 600px;  ">
    <input type="password" placeholder="repetir contraseña" name="password_confirmation" style="text-align: center" class="form-control" id="exampleInputPassword1">
    <label for="exampleInputPassword1" class="form-label">
    <img  src="{!! asset('images/contrasena.png') !!}" alt="usuario" width="27" height="27" style=" opacity:75%">
    Confirmar Contraseña</label>
  </div><BR>
  <button type="submit"  class="btn btn-primary d-block mx-auto" style="font-size: 21px;">REGISTRAR</button>

</form>

</div>@include('layouts.partials.footer')




@guest
<h1>PANEL PROYECTO</h1>
<p class="lead">Para ver el contenido, tienes que <a href="/login"> iniciar sesión.</a> </p>
@include('layouts.partials.footer')

@endguest
    @endsection

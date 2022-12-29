@extends('layouts.admin-app')
@section('content')
@auth
<br>
<h1 class="text-center">
        &nbsp
        MI PERFIL </h1>
<br>
<div class="container">
  <div class="row">
    <div class="col">
     <img  src="{!! asset('images/PERFIL.png') !!}" alt="usuario" width="280" height="280" style=" opacity:75%">

    </div>
    <div class="col">
        <br>
        <h4>Detalles del perfil:</h4><br>
    <div class="form-floating mb-3 mx-auto" style="font-size:22px;">
        <img  src="{!! asset('images/usuario-nombre.png') !!}" alt="usuario" width="25px" height="25" style=" opacity:95%">
        Nombre: {{auth()->user()->name}}
    </div>

    <div class="form-floating mb-3 mx-auto" style="font-size:22px;  ">
        <img  src="{!! asset('images/email.png') !!}" alt="usuario" width="32px" height="32px" style=" opacity:85%">
            Correo Electrónico: {{auth()->user()->email}}

  </div>

  <div class="form-floating mb-3 mx-auto" style="font-size:22px; ">
        <img  src="{!! asset('images/usuario-nombre.png') !!}" alt="usuario" width="25" height="25" style=" opacity:95%">
            Rol: {{auth()->user()->role}}

</div>

<div class="form-floating mb-3 mx-auto" style="font-size:22px; ">
        <img  src="{!! asset('images/usuario-nombre.png') !!}" alt="usuario" width="25" height="25" style=" opacity:95%">
    Nombre de Usuario: {{auth()->user()->username}}

  </div>




    </div></div></div>

@include('layouts.partials.footer')

@endauth



@guest
<h1>PANEL PROYECTO</h1>
<p class="lead">Para ver el contenido, tienes que <a href="/login"> iniciar sesión.</a> </p>
@include('layouts.partials.footer')

@endguest
    @endsection



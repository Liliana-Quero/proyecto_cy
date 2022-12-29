
@extends('layouts.auth-master')
@section('content')
<div class="mx-auto" style="width: 400px; font-size:18px" >
            <form action="/login" method="POST" action="">
                <br>
                @csrf

                <img class="mx-auto d-block" src="{!! asset('images/usuario.png') !!}" alt="usuario" width="58" height="58" style=" opacity:65%">
                <br>
                <h1 class="text-center">Iniciar Sesión</h1><br>
                @include('layouts.partials.messages')<br>
        <div class="form-floating mb-3 mx-auto" style="font-size:18px; width: 500px;  ">
                        <input type="text" placeholder="usuario" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="font-size:16px">
                        <label for="exampleInputEmail1" class="form-label"  style="font-size:16px">Usuario / Dirección de Email </label>

        </div>
        <div class="form-floating mb-3 mx-auto" style="font-size:18px; width: 500px;">
            <input type="password" placeholder="contraseña" name="password" class="form-control" id="exampleInputPassword1" style="font-size:16px">
                    <label for="exampleInputPassword1" class="form-label" style="font-size:16px">Contraseña</label>
                </div>
         <button type="submit" class="btn btn-primary d-block mx-auto"  style="font-size: 22px;">
         <img  src="{!! asset('images/ingresar.png') !!}" alt="usuario" width="28" height="28" style=" opacity:95%">
         Entrar</button>

        </form>


</div>
    @endsection



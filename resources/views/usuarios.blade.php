@extends('layouts.admin-app')
@section('content')
@auth
<div class="row">

        <div class="col-md" >
        <br>
                <label>

                </label>

        </div>
        <div class="col-md">
        </div>
                    <div class="col-md">
                   <br> <a href="/register"><button class="btn btn-success" style="font-size: 20px; ">
                   <img  src="{!! asset('images/agregar-usuario.png') !!}" alt="usuario" width="29" height="28" style=" opacity:75%">

                   Añadir Nuevo Usuario</button></a>
                    </div>
        <h2 class="text-center"> USUARIOS:</h2>
<br>

<div class="row" style="padding: left 50px;">
    <div class="col-md-3 col-md-4 col-sm-14 col-xs-4">

      @include('admin.search')

      </div>
</div><br>
</div>
<div class="row">
        <div class="col-md" >
        <br>
                <label>
                </label>

        </div>
        <div class="col-md">
        </div>
                    <div class="col-md" style="padding-left: 600px;">
                   <br> <a href="{{route('descargar') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        Generar listado de usuarios (PDF)
      </a>
                    </div>
<div class="row" style="padding: left 50px;">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive"><BR>
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead class="text-center">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Correo electrónico</th>
                    <th>Nombre de Usuario</th>
                 </thead>
                 @foreach ($usuarios as $usuario)
                 <tr>
                    <td>{{ $usuario->id}}</td>
                    <td>{{ $usuario->name}}</td>
                    <td>{{ $usuario->role}}</td>
                    <td>{{ $usuario->email}}</td>
                    <td>{{ $usuario->username}}</td>

                    <td class="text-center">
                        <a href="{{route('admin.edit', $usuario->id)}}" role="button" class="btn btn-info">
                            <img  src="{!! asset('images/editar-texto.png') !!}" alt="usuario" width="22" height="21" style=" opacity:75%">
                            Editar</button></a>


                                <form action="{{ route('usuarios.delete', $usuario->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Deseas eliminar este usuario?')" >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" rel="tooltip">
                            <img  src="{!! asset('images/boton-salir.png') !!}" alt="usuario" width="29" height="28" >
                            Eliminar
                        </button>

                        </form>

        </td>
				</tr>
				@include('modal')
				@endforeach
			</table>
		</div>
		{{$usuarios->render()}}
    </div>
</div>


    @include('layouts.partials.footer')

        @endauth





    @guest
        <h1>PANEL PROYECTO</h1>
        <p class="lead">Para ver el contenido, tienes que <a href="/login"> iniciar sesión.</a> </p>
        @include('layouts.partials.footer')

        @endguest
    </div>
@endsection



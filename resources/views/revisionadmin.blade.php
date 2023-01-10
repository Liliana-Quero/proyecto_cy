@extends('layouts.admin-app')
@section('content')
@auth

<div class="row">
    <div class="text-right">
        <a style="font-size: 21px; align-items: left;" class="btn btn-md btn btn-success" href="/admin" role="button">
            INICIO </a>
    </div>
    <h2 class="text-center">REVISIÓN: </h2>
    <br>
    <h6>Sucursal: {{$sucursal}}</h6>
    <h6>Trimestre: {{$trimestre}}</h6>
    <h6>Tópico: {{$topico}}</h6>

    <div class="row" style="padding: left 50px;">
        <div class="col-md-3 col-md-4 col-sm-14 col-xs-4">

            @include('layouts.partials.buscar')

        </div>

        <br>
        <div class="col-md" style="padding-left: 600px;">
            <form action="{{route('dashboard')}}" method="post">
                @csrf
                <input type="hidden" name="sucursal" value="{{$sucursal}}">
                <input type="hidden" name="trimestre" value="{{$trimestre}}">
                <input type="hidden" name="topico" value="{{$topico}}">
                <button type="submit" class="my-2 btn btn-primary">Ver comparación entre los trimestres</button>
            </form>
            <form action="{{route('descargar-pdf')}}" method="post">
                @csrf
                <input type="hidden" name="registros" value="{{json_encode($registros)}}">
                <input type="hidden" name="sucursal" value="{{$sucursal}}">
                <input type="hidden" name="trimestre" value="{{$trimestre}}">
                <input type="hidden" name="topico" value="{{$topico}}">
                <button type="submit" style="font-size:17px" class="btn btn-primary">
                    Generar listado (PDF)</button>
            </form>
            <br>
        </div>
        <br>

    </div>
    <div style="font-size: 16px;  overflow-y: hidden  ">
        <table id="usuarios" name="usuarios"
            class=" table table-hovertable table-striped table-bordered table-hover text-center"
            style="font-size: 14px;  text-align: -webkit-center;  overflow-y: hidden;  vertical-align: middle;"><br>
            <thead style="background-color:#7ebf7a; vertical-align: middle; " class="text-align:center">
                <tr style="font-size: 16px;">
                    <th>No.</th>
                    <th>Nombre</th>
                    <th>Número de Socio</th>
                    <th>Referencia de crédito</th>
                    <th>Fecha de colocación</th>
                    <th>Monto</th>
                    <th style="width: 123px">Plazo para evidencias <text style="font-size:13px;"> (30 días
                            naturales)</text></th>
                    <th>Finalidad</th>
                    <th>Factura</th>
                    <th>Endoso a favor de la Cooperativa</th>
                    <th>La garantía cubre el crédito</th>
                    <th>Póliza de seguro vigente</th>
                    <th>Seguro c/ Cobertura amplia</th>
                    <th>Observaciones</th>
                    <th style="color: white; background-color:darkgreen;">Cumplimiento</th>
                    <th style="color: white; background-color:darkgreen; ">Nivel de Riesgo</th>
                </tr>
            </thead>
            <tr style="  text-align: -webkit-center; font-size: 15px;">
                @foreach($registros as $registro)
                <td>{{ $registro->id}}</td>
                <td>{{ $registro->nombre_socio}}</td>
                <td>{{ $registro->num_socio}}</td>
                <td>{{ $registro->ref_credito}}</td>
                <td>{{ $registro->fecha_colocacion}}</td>
                <td>${{$registro->monto}}</td>
                <td>{{ $registro->plazo_evidencia}}</td>

                <td>{{ $registro->finalidad}}</td>
                <td>{{ $registro->factura}}</td>

                <td>{{ $registro->endoso_a_favor_cooperativa}}</td>
                <td>{{ $registro->garantia_cubre_credito}}</td>
                <td>{{ $registro->poliza}}</td>
                <td>{{ $registro->seguro}}</td>
                <td>{{ $registro->observaciones}}</td>
                <td>{{$registro->cumplimiento}}</td>
                <td>{{$registro->nivel_riesgo}}</td>
            </tr> @endforeach
            </tbody>
        </table>

    </div>
    <div class="col-xs-5 col-md-4" style="font-size: 17.5x;">
        <div id="Layer1" style="width:700px; overflow-y: hidden "></div>
    </div>

    @include('layouts.partials.footer')

    @endauth

    @guest
    <h1>PANEL PROYECTO</h1>
    <p class="lead">Para ver el contenido, tienes que <a href="/login"> iniciar sesión.</a> </p>
    @include('layouts.partials.footer')
    @endguest

    @endsection
@extends('layouts.app-master')
@section('content')
@auth

<!DOCTYPE html>
<html lang="ES">
<head>
<script src="{!! url('assets/js/index.js') !!}"></script>

<meta charset="UTF-8">
 <title> Revisión </title>
 </head>
 <body>
    <br><br>
<div class="row">

        <div class="col-xs-5 col-md-9" style="font-size: 20px; ">
      </div>
                    <div class="col-md" style=" padding-left: 90px;" >
                <a style="font-size: 21px; align-items: left;" class="btn btn-md btn btn-success" href="/admin" role="button">
                INICIO </a>
                    </div>
                <h2 class="text-center">REVISIÓN: </h2>
                <br>
                <h6>Sucursal:</h6>
        <h6>Trimestre:</h6>
        <h6>Tópico:</h6><br>
                <div class="row" style="padding: left 50px;">
    <div class="col-md-3 col-md-4 col-sm-14 col-xs-4">

      @include('layouts.partials.buscar')

      </div>

                    <br>
                    <div class="col-md" style="padding-left: 600px;">
                   <br> <a style="font-size:17px" href="{{route('descargar-pdf') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        Generar listado (PDF)</a></div>
        <br>

                    </div>
                    <div style="font-size: 15px;  overflow-y: hidden  " >
                    <table id="usuarios" name="usuarios" class=" table table-hovertable table-striped table-bordered table-hover text-center"  style="font-size: 14px;  text-align: -webkit-center;  overflow-y: hidden;  vertical-align: middle;" ><br>
                                <thead   style="background-color:#7ebf7a; vertical-align: middle; " class="text-align:center">
                                    <tr style="font-size: 16px;">
                                        <th>No.</th>
                                        <th>Nombre</th>
                                        <th>Número de Socio</th>
                                        <th>Referencia de crédito</th>
                                        <th >Sucursal</th>
                                        <th >Fecha de colocación</th>
                                        <th>Monto</th>
                                        <th style="width: 123px">Plazo para evidencias <text style="font-size:13px;"> (30 días naturales)</text></th>
                                        <th>Finalidad</th>
                                        <th>Factura</th>
                                        <th>Endoso a favor de la Cooperativa</th>
                                        <th>La garantía cubre el crédito</th>
                                        <th>Póliza de seguro vigente</th>
                                        <th>Seguro c/ Cobertura amplia</th>
                                        <th>Observaciones</th>
                                        <th style="color: white; background-color:darkgreen;">Cumplimiento</th>
                                        <th style="color: white; background-color:darkgreen; ">Nivel de Riesgo</th>
                                        <th style="color: white; background-color:darkgreen;">Estatus Actual</th>
                                        <th style="color: white; background-color:darkgreen;">Puntaje Nivel de Riesgo</th>


                                </tr>
                            </thead>
                                <tr style="  text-align: -webkit-center; font-size: 15px;">
                                    @foreach($registros as $registro)
                                <td>{{ $registro->id}}</td>
                                    <td>{{ $registro->nombre_socio}}</td>
                                    <td>{{ $registro->num_socio}}</td>
                                    <td>{{ $registro->ref_credito}}</td>
                                    <td></td>
                                    <td>{{$registro->fecha_colocacion}}</td>
                                    <td>${{ $registro->monto}}</td>
                                    <td>{{ $registro->plazo_evidencia}}</td>

                                    <td>{{ $registro->finalidad}}</td>
                                    <td>{{ $registro->factura}}</td>

                                    <td>{{ $registro->endoso_a_favor_cooperativa}}</td>
                                    <td>{{ $registro->garantia_cubre_credito}}</td>
                                    <td>{{ $registro->poliza}}</td>
                                    <td>{{ $registro->seguro}}</td>
                                    <td>{{ $registro->observaciones}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr> @endforeach


                            </tbody>
                        </table>

                    </div>
                    <div class="col-xs-5 col-md-4" style="font-size: 15x;">
                    <div id="Layer1" style="width:700px; overflow-y: hidden ">

                            <tbody>


    </div>

</body>



    @include('layouts.partials.footer')

        @endauth

</html>
</div>





    @guest
        <h1>PANEL PROYECTO</h1>
        <p class="lead">Para ver el contenido, tienes que <a href="/login"> iniciar sesión.</a> </p>
        @include('layouts.partials.footer')

        @endguest
    </div>
@endsection



@extends('layouts.admin-app')
@section('content')
@auth

<html lang="ES">

<head>
    <meta charset="UTF-8">
    <title> Index </title>
    <script src="{!! url('assets/js/index.js') !!}"></script>

<body>
    <title> Información </title>
    </head>

    <body>
        <br><br>
        <div class="row">

            <div class="col-xs-5 col-md-9" style="font-size: 20px; ">
                <a style="margin-left: 29px;" class="btn btn-outline-success" href="/admin" role="button">&laquo;
                    Regresar </a>
            </div>
            <div class="col-md" style=" padding-left: 90px;">
                <button type="submit" class="btn btn-lg btn-success" form="registros-form">
                    <img src="{!! asset('images/salvar.png') !!}" width="25" height="25" style="opacity:95%">
                    Guardar </button>
            </div>

            <h2 class="text-center">EVALUAR: </h2>
            <br>
            <h6>Sucursal: {{$sucursal->nombre}}</h6>
            <h6>Trimestre: {{$trimestre->fecha_inicial}} a {{$trimestre->fecha_final}}</h6>
            <h6>Tópico: {{$topico->nombre}}</h6>

            <div style="font-size: 16px;  overflow-y: hidden  ">
                <table id="usuarios" name="usuarios"
                    class=" table table-hovertable table-striped table-bordered table-hover text-center"
                    style="font-size: 14px;  text-align: -webkit-center;  overflow-y: hidden;  vertical-align: middle;">
                    <br>
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

                        </tr>
                    </thead>
                    <tbody>
                        <form id="registros-form" action="/cuestionarioadmin" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="sucursal" value="{{$sucursal->nombre}}">
                            <input type="hidden" name="trimestre"
                                value="{{$trimestre->fecha_inicial}} a {{$trimestre->fecha_final}}">
                            <input type="hidden" name="topico" value="{{$topico->nombre}}">
                            @foreach ($registros as $registro)
                            <tr style="  text-align: -webkit-center; font-size: 15px;">
                                <td>{{$registro->id}} <input type="hidden" name="id[]" value="{{$registro->id}}"></td>
                                <td>{{$registro->nombre_socio}}</td>
                                <td>{{$registro->num_socio}}</td>
                                <td>{{$registro->ref_credito}}</td>
                                <td>{{$registro->fecha_colocacion}}</td>
                                <td>${{number_format($registro->monto, 2)}}</td>
                                <td>{{$registro->plazo_evidencia}}</td>
                                <td><textarea style="width: 125px;" type="text" name="finalidad[]" class="form-control"
                                        id="finalidad">
                                </textarea></td>
                                <td>
                                    <select class="form-control form-select" style=" width: 80px; height:35px; "
                                        name="factura[]" required>
                                        <option selected> </option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                </td>

                                <td>
                                    <select class="form-select form-select" style=" width: 80px; height:35px; "
                                        name="endoso_a_favor_cooperativa[]" required>
                                        <option selected> </option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-select" style=" width:80px; height:35px;"
                                        name="garantia_cubre_credito[]" required>
                                        <option selected> </option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                </td>
                                <td><select class="form-select form-select" style="width:80px; height:35px;"
                                        name="poliza[]" required>
                                        <option selected> </option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                        <option value="N/A">N/A</option>
                                    </select></td>
                                <td><select class="form-select form-select" style="width:80px; height:35px;"
                                        name="seguro[]" required>
                                        <option selected> </option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                </td>
                                <td>
                                    <textarea class="form-control" name="observaciones[]"></textarea>
                                </td>
                            </tr>
                            @endforeach
                        </form>
                    </tbody>
                </table>

            </div>
            <div class="col-xs-5 col-md-4" style="font-size: 17.5x;">
                <div id="Layer1" style="width:700px; overflow-y: hidden ">


                    <!-- DATOS A EXTRAER DE BD.PROVEEDORES -->
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
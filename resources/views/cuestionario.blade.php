@extends('layouts.app-master')
@section('content')
@auth

<!DOCTYPE html>
<html lang="ES">
<head>
<title> Cooperativa Yolomecatl </title>
<script src="{!! url('assets/js/index.js') !!}"></script>


 <meta charset="UTF-8">
 <title> Información </title>
</head>
<body>
    <br><br>
<div class="row">

        <div class="col-xs-5 col-md-9" style="font-size: 20px; ">
                    <a  style="margin-left: 29px;" class="btn btn-outline-success" href="/home" role="button">&laquo; Regresar </a></div>
                    <div class="col-md" style=" padding-left: 90px;" >
                <a style="font-size: 21px; align-items: left;" href="/revision" class="btn btn-md btn btn-success" role="button">
                <img src="{!! asset('images/salvar.png') !!}" width="25" height="25" style="opacity:95%">
                Guardar </a>
                    </div>

                <h2 class="text-center">EVALUAR:   
</h2>
                <br><br>

                    <br>
                    <div style="font-size: 16px;  overflow-y: hidden  " >
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
                                        <th>Endoso a favor de la Cooperativa</th>
                                        <th>Seguro c/ Cobertura amplia</th>
                                        <th>Observaciones</th>

                                </tr>
                            </thead>
                                <tr style="  text-align: -webkit-center; font-size: 15px;">
                                    @foreach($registros as $registro)
                                <td>{{ $registro->id}}</td>
                                    <td>{{ $registro->nombre_socio}}</td>
                                    <td>{{ $registro->num_socio}}</td>
                                    <td>{{ $registro->ref_credito}}</td>
                                    <td></td>
                                    <td>{{ $registro->fecha_colocacion}}</td>
                                    <td>{{ $registro->monto}}</td>
                                    <td>{{ $registro->plazo_evidencia}}</td>

                                    <td><textarea style="width: 125px; "></textarea></td>
                                    <td><select class="form-select form-select-md mb-1 border border-success" style=" width: 80px; height:35px; "  aria-label=".form-select-lg example">
                    <option selected>   </option>
                    <option value="1">SI</option>
                    <option value="2">NO</option>
                    <option value="3">N/A</option>
                    </select></td>

                    <td><select class="form-select form-select-md mb-1 border border-success" style=" width: 80px; height:35px; "  aria-label=".form-select-lg example">
                    <option selected>   </option>
                    <option value="1">SI</option>
                    <option value="2">NO</option>
                    <option value="3">N/A</option>
                    </select></td>
                    <td><select class="form-select form-select-md mb-1 border border-success" style=" width:80px; height:35px; "  aria-label=".form-select-lg example">
                    <option selected>   </option>
                    <option value="1">SI</option>
                    <option value="2">NO</option>
                    <option value="3">N/A</option>
                    </select></td>
                    <td><select class="form-select form-select-md mb-1 border border-success" style="width:80px; height:35px; "  aria-label=".form-select-lg example">
                    <option selected>   </option>
                    <option value="1">SI</option>
                    <option value="2">NO</option>
                    <option value="3">N/A</option>
                    </select></td>
                    <td><select class="form-select form-select-md mb-1 border border-success" style="width:80px; height:35px; "  aria-label=".form-select-lg example">
                    <option selected>   </option>
                    <option value="1">SI</option>
                    <option value="2">NO</option>
                    <option value="3">N/A</option>
                    </select></td>
                    <td><select class="form-select form-select-md mb-1 border border-success" style="width:80px; height:35px; "  aria-label=".form-select-lg example">
                    <option selected>   </option>
                    <option value="1">SI</option>
                    <option value="2">NO</option>
                    <option value="3">N/A</option>
                    </select></td>

                    <td> <textarea></textarea></td>
                                </tr> @endforeach


                            </tbody>
                        </table>

                    </div>
                    <div class="col-xs-5 col-md-4" style="font-size: 17.5x;">
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



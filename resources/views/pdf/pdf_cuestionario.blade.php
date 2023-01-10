<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        h1 {
            text-align: center;
            font: 2rem;
            color: blue;
            font-family: sans-serif;

        }

        table {
            align-items: center;
            font: 2rem;
            border-spacing: 4px;
            border-color: black;
            font-family: sans-serif;
            border-top: black;
            width: 900px;
            height: 100px;
            text-align: center;
            border-spacing: 0;

        }

        tr {
            border: 0.01em solid #000;

        }

        th {
            border: 0.01em solid #000;

        }

        td {
            border: 0.01em solid #000;

        }

        nav {

            text-align: center;
            color: gray;
        }
    </style>


</head>

<body>
    <nav>
        Cooperativa Yolomecatl, S.C. de A.P. de R.L. de C.V.
        <br>

    </nav>
    <div>
        <br><br>
        <h1>Listado:</h1>
        <h6>Sucursal: {{$sucursal}}</h6>
        <h6>Trimestre: {{$trimestre}}</h6>
        <h6>Tópico: {{$topico}}</h6>
    </div>
    <div style="font-size: 10px;  overflow-y: hidden  ">


        <table id="usuarios" name="usuarios"
            class=" table table-hovertable table-striped table-bordered table-hover text-center"
            style="font-size: 11px;  text-align: -webkit-center;  overflow-y: hidden;  vertical-align: middle;">
            <thead style="background-color:#7ebf7a; vertical-align: middle; " class="text-align:center">
                <tr style="font-size: 11px;">
                    <th>No.</th>
                    <th>&nbsp;Nombre&nbsp;</th>
                    <th>&nbsp;Número de Socio&nbsp;</th>
                    <th>Referencia de crédito</th>
                    <th>&nbsp;Fecha de colocación&nbsp;</th>
                    <th>Monto</th>
                    <th>&nbsp;Plazo para &nbsp;evidencias <text style="font-size:11px;"> (30 días naturales)</text></th>
                    <th>&nbsp;Finalidad&nbsp;</th>
                    <th>&nbsp;Factura&nbsp;</th>
                    <th>&nbsp;Endoso a favor de la &nbsp;Cooperativa&nbsp;</th>
                    <th>&nbsp;La &nbsp;garantía&nbsp; cubre el crédito&nbsp;</th>
                    <th>&nbsp;Póliza de seguro vigente&nbsp;</th>
                    <th>&nbsp;Seguro c/ &nbsp;Cobertura&nbsp; amplia&nbsp;</th>
                    <th>Observaciones&nbsp;</th>
                    <th style="color: white; background-color:darkgreen;">Cumplimiento</th>
                    <th style="color: white; background-color:darkgreen; ">Nivel de Riesgo</th>
                    <th style="color: white; background-color:darkgreen;">Estatus Actual</th>
                    <th style="color: white; background-color:darkgreen;">Puntaje Nivel de Riesgo</th>

                </tr>
            </thead>
            <tr>
                @foreach($registros as $registro)
                <td>{{ $registro->id}}</td>
                <td>{{ $registro->nombre_socio}}</td>
                <td>{{ $registro->num_socio}}</td>
                <td>{{ $registro->ref_credito}}</td>
                <td>{{ $registro->fecha_colocacion}}</td>
                <td>&nbsp;${{$registro->monto}}&nbsp;</td>
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
                <td>{{$registro->estatus}}</td>
                <td>{{$registro->puntaje_nivel_riesgo}}</td>

            </tr>
            <tr></tr> @endforeach
        </table>
    </div>

</body>

</html>
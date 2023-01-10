@extends('layouts.admin-app')
@section('content')
@auth

<html lang="ES">

<head>
    <meta charset="UTF-8">
    <title> Cooperativa Yolomecatl </title>
    <script src="{!! url('assets/js/index.js') !!}"></script>
</head>

<body>
    <div class=" p-3 rounded">

        @auth

        <h2 style="text-align: center;">INICIO
            <p class="lead" style="font-size:17px">Usuario {{auth()->user()->name ?? auth()->user()->username}},
                para seleccionar el Tópico, tienes que escoger la Sucursal y el Trimestre.</p>
        </h2>




        <form id="form-filtros" action="/cuestionarioadmin" method="GET">
            <div class="row ">
                <div class="col-xs-5 col-md-6" style="font-size: 14px; ">

                    <br>
                    <p>
                    <h3>
                        <img src="{!! asset('images/sucursal.png') !!}" width="26" height="26" style="opacity:65%">

                        Escoge la sucursal:
                    </H3>

                    <select name="suc" onchange="validar(this.form) " id="select1"
                        class="form-select form-select-lg mb-3" style="width:90%" aria-label=".form-select-lg example"
                        required>
                        <option selected disabled="disabled">Seleccionar Sucursal</option>
                        @foreach($sucursal as $suc)
                        <option value="{{ $suc->id }}">{{ $suc->nombre}}</option>
                        @endforeach
                    </select></p>

                    <br>
                    <p>
                    <H3>
                        <img src="{!! asset('images/trimestre.png') !!}" width="30" height="30" style="opacity:65%">

                        Escoge el trimestre:
                    </H3>
                    <select name="trim" onchange="habilitar(this.form)" id="select2"
                        class="form-select form-select-lg mb-3" style="width:90%" aria-label=".form-select-lg example"
                        required>
                        <option selected disabled="disabled">Seleccionar Trimestre</option>
                        @foreach ($trimestres as $tri)
                        <option value="{{ $tri->id }}">Trimestre {{ $tri->fecha_inicial}} a {{$tri->fecha_final}}
                        </option>
                        @endforeach

                    </select></p>
                </div>
                <div class="col-xs-5 col-md-4" style="font-size: 16px;">
                    <br>
                    <p>
                    <H3>
                        <img src="{!! asset('images/topicos.png') !!}" width="30" height="30" style="opacity:65%">
                        Escoge el tópico:
                    </H3>
                    <select name="top" disabled="disabled" onchange="habilitar2(this.form)" id="select3"
                        class="form-select form-select-lg mb-3" style="width:140%" aria-label=".form-select-lg example">
                        <option selected disabled="disabled">Seleccionar Tópico</option>
                        @foreach ($topicos as $topico)
                        <option value="{{ $topico->id }}"> {{ $topico->nombre}}</option>
                        @endforeach
                    </select></p>

                    <br>
                    <button type="reset" class="btn-lg btn-block btn btn-success"
                        style="width:60%; font-size: 16px; align-items: center ; justify-content: rigth;">
                        <img src="{!! asset('images/limpiar.png') !!}" width="30" height="30" style="opacity:65%">
                        LIMPIAR DATOS</button>

                </div>

            </div>
        </form>

        <script>
            function habilitar2() {
            select2 = document.getElementById ("select3").value;
            select3 = document.getElementById ("select3").value;

            val=0;

            if(select3 == ""){
                val++;
            }
            if(select3 == ""){
                val++;
            }

            if(val == 0){
                document.getElementById("boton").disabled = false;
            } else {
                document.getElementById("boton").disabled = true;
            }
        }
        document.getElementById("select3").addEventListener("change", habilitar2);
        document.getElementById("select3").addEventListener("change", habilitar2);
        document.getElementById("boton").addEventListener("click", () =>{

        });
        </script>
        <div class="text-center">
            <br><br>
            <button id="boton" type="submit" form="form-filtros" class="btn-lg btn-block btn btn-success"
                style="width:60%; font-size: 21px; align-items: center; justify-content: center;" disabled>BUSCAR
                &raquo;</button>
        </div>
    </div>
</body>

</html>@include('layouts.partials.footer')

@endauth

@guest
<h1>PANEL PROYECTO</h1>
<p class="lead">Para ver el contenido, tienes que <a href="/login"> iniciar sesión.</a> </p>
@include('layouts.partials.footer')

@endguest
</div>
@endsection




@endauth

</html>

</div>
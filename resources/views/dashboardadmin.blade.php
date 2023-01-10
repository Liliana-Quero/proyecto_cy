@extends('layouts.admin-app')
@section('content')
@auth

<div class="row">
    <div class="text-right">
        <a style="font-size: 21px; align-items: left;" class="btn btn-md btn btn-success" href="/admin" role="button">
            INICIO </a>
    </div>
    <div class="my-5 container">
        <h1 class="text-center">Dashboard</h1>
        <div class="row">
            <h3 class="mt-4 text-center">Comparación entre los trimestres</h3>
            <h6>Sucursal: {{$sucursal->nombre}}</h6>
            <h6>Tópico: {{$topico->nombre}}</h6>

            <div class="col col-lg-6">
                <div class="my-2">
                    <canvas id="chart1"></canvas>
                </div>
            </div>
            <div class="col col-lg-6">
                <div class="my-2">
                    <canvas id="chart2"></canvas>
                </div>
            </div>
        </div>

        <div class="mt-5 row">
            <h3 class="my-4 text-center">Resultado general por trimestre</h3>
            <div class="col col-md-6 col-lg-3">
                <h5>Trimestre 1</h5>
                <canvas id="chart3"></canvas>
            </div>
            <div class="col col-md-6 col-lg-3">
                <h5>Trimestre 2</h5>
                <canvas id="chart4"></canvas>
            </div>
            <div class="col col-md-6 col-lg-3">
                <h5>Trimestre 3</h5>
                <canvas id="chart5"></canvas>
            </div>
            <div class="col col-md-6 col-lg-3">
                <h5>Trimestre 4</h5>
                <canvas id="chart6"></canvas>
            </div>
        </div>

    </div>

    @include('layouts.partials.footer')

    @endauth

    @guest
    <h1>PANEL PROYECTO</h1>
    <p class="lead">Para ver el contenido, tienes que <a href="/login"> iniciar sesión.</a> </p>
    @include('layouts.partials.footer')
    @endguest

    @endsection

    @push('scripts')
    <script src="{!! url('assets/js/index.js') !!}"></script>
    <script src="{!! url('assets/js/chart.min.js') !!}"></script>


    <script>
        const total_cumplimiento = {{ Js::from($total_cumplimiento) }};
        const promedio_riesgo = {{ Js::from($promedio_riesgo) }};
        const cumplimiento_general = {{ Js::from($cumplimiento_general) }};
        const total_por_trim = {{ Js::from($total_por_trim) }};

        const labels = {
            chart1: ['Trimestre 1', 'Trimestre 2', 'Trimestre 3', 'Trimestre 4'],
            chart2: ['Trimestre 1', 'Trimestre 2', 'Trimestre 3', 'Trimestre 4'],
            chart3: ['Registros en Cumplimiento', 'Registros sin Cumplimineto'],
            chart4: ['Registros en Cumplimiento', 'Registros sin Cumplimineto'],
            chart5: ['Registros en Cumplimiento', 'Registros sin Cumplimineto'],
            chart6: ['Registros en Cumplimiento', 'Registros sin Cumplimineto'],
        }
        const values = {
            chart1: [total_cumplimiento[1] ?? 0, total_cumplimiento[2] ?? 0, total_cumplimiento[3] ?? 0, total_cumplimiento[4] ?? 0],
            chart2: [promedio_riesgo[1] ?? 0, promedio_riesgo[2] ?? 0, promedio_riesgo[3] ?? 0, promedio_riesgo[4] ?? 0],
            chart3: [cumplimiento_general[1] ?? 0, (total_por_trim[1] ?? 0) - (cumplimiento_general[1] ?? 0)],
            chart4: [cumplimiento_general[2] ?? 0, (total_por_trim[2] ?? 0) - (cumplimiento_general[2] ?? 0)],
            chart5: [cumplimiento_general[3] ?? 0, (total_por_trim[3] ?? 0) - (cumplimiento_general[3] ?? 0)],
            chart6: [cumplimiento_general[4] ?? 0, (total_por_trim[4] ?? 0) - (cumplimiento_general[4] ?? 0)],
        }

        const data = {
            chart1: {
                labels: labels.chart1,
                datasets: [{
                label: 'Registros en cumplimiento',
                backgroundColor: 'rgb(126 191 122)',
                borderColor: 'rgb(126 191 122)',
                data: values.chart1,
                }]
            },
            chart2: {
                labels: labels.chart2,
                datasets: [{
                label: 'Promedio de riesgo',
                backgroundColor: 'rgb(54, 162, 235)',
                borderColor: 'rgb(54, 162, 235)',
                data: values.chart2,
                }]
            },
            chart3: {
                labels: labels.chart3,
                datasets: [{
                label: 'Trimestre 1',
                data: values.chart3,
                backgroundColor: [
                    'rgb(126 191 122)',
                    'rgb(255, 99, 132)'
                ]
                }]
            },
            chart4: {
                labels: labels.chart4,
                datasets: [{
                label: 'Trimestre 2',
                data: values.chart4,
                backgroundColor: [
                    'rgb(126 191 122)',
                    'rgb(255, 99, 132)'
                ]
                }]
            },
            chart5: {
                labels: labels.chart5,
                datasets: [{
                label: 'Trimestre 3',
                data: values.chart5,
                backgroundColor: [
                    'rgb(126 191 122)',
                    'rgb(255, 99, 132)'
                ]
                }]
            },
            chart6: {
                labels: labels.chart6,
                datasets: [{
                label: 'Trimestre 4',
                data: values.chart6,
                backgroundColor: [
                    'rgb(126 191 122)',
                    'rgb(255, 99, 132)'
                ]
                }]
            }
        };
  
      const config = {
        chart1: {
            type: 'line',
            data: data.chart1,
            options: {}
        },
        chart2: {
            type: 'line',
            data: data.chart2,
            options: {}
        },
        chart3: {
            type: 'doughnut',
            data: data.chart3,
        },
        chart4: {
            type: 'doughnut',
            data: data.chart4,
        },
        chart5: {
            type: 'doughnut',
            data: data.chart5,
        },
        chart6: {
            type: 'doughnut',
            data: data.chart6,
        }

    };
  
      const chart1 = new Chart(
        document.getElementById('chart1'),
        config.chart1
      );

      const chart2 = new Chart(
        document.getElementById('chart2'),
        config.chart2
      );

      const chart3 = new Chart(
        document.getElementById('chart3'),
        config.chart3
      );

      const chart4 = new Chart(
        document.getElementById('chart4'),
        config.chart4
      );

      const chart5 = new Chart(
        document.getElementById('chart5'),
        config.chart5
      );

      const chart6 = new Chart(
        document.getElementById('chart6'),
        config.chart6
      );

    </script>
    @endpush
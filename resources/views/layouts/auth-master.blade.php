<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Cooperativa Yolomecatl</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}" >
    @include('layouts.partials.navbar')

    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    <style>
        body{
            font-size: 18px;
            width: 350%;

            display:block;
            align-items: center;
            justify-content: center;
        }
        .form-container{
            width: 1350px;
        }
        </style>

</head>
<body>
    <main class="form-container">
        @yield('content')
    </main>

    <script src="{!! url('assets/js/bootstrap.bundle.min.js') !!}"></script>
@include('layouts.partials.footer')

  </body>
</html>

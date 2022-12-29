<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Cooperativa Yolomecatl </title>

    <link href="{!! url('assets/css/bootstrap.min.css') !!}" rel="stylesheet">



    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
</head>
<body>

    @include('layouts.partials.navbar')
    <main class="container" style="max-width: 1240px; margin: auto;">
        @yield('content')
    </main>

    <script src="{!! url('assets/js/bootstrap.bundle.min.js') !!}"></script>

  </body>
</html>

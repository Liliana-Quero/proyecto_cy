<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        h1{
            text-align: center;
            font: 2rem;
            color: blue;
            font-family: sans-serif;

        }
        table{
            align-items: center;
            font: 2rem;
            border-spacing: 6px;
            font-family: sans-serif;

        }
        nav{
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
        <h1>Listado de Usuarios</h1>
    </div>
    <div class="table-responsive"><BR>
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Correo electrónico</th>
                    <th>Nombre de Usuario</th>
                 </thead>
                 @foreach ($usuarios as $user)
                 <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->role}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->username}}</td>
                    @endforeach
                 </tr>
            </table>
    </div>

</body>

</html>

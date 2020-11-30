<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

$users = DB::table('usuarios')->where('nombreusuario', '=', $_POST['usuario'])->first();

//var_dump($users);

if ($_POST['password'] == $users->password){
    $mensaje='<center>
    <h1 class="has-text-danger title is-1">BIENVENIDO AL SISTEMA ESCOLAR</h1>
    <br>
    <h1 class="title is-2">Haga click en el boton para ingresar a un alumno nuevo</h1>
    <br>
<a class="button is-primary is-rounded title is-3" href="alumno.php">Ingresar alumno</a>
<br>
<br>
<h1 class="title is-2">Haga click en el boton para consultar su calificacion</h1>
<br>
<a class="button is-primary is-rounded title is-3" href="consultar.php">Consultar Calificacion</a>
</center>';
}
else{
    $mensaje='El usuario o contraseña es incorrecto';
}
echo <<<_HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema escolar</title>
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
</head>
<body>
    {$mensaje}
</body>
</html>
_HTML;
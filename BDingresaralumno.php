<?php

use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

DB::table("alumnos")->insert([
	"nombre" => $_POST["nombre"],
    "primer_apellido" => $_POST["primer_apellido"],
    "segundo_apellido" => $_POST["segundo_apellido"],
]);

echo <<<_HTML


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno Nuevo</title>
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<center><p class="estilo-titulo has-text-danger"> Insertar Calificacion</p></center>
<br>
<br>
<center><input class="input estilo-tex is-rounded "  type="text" id="cal_1" name="cal_1" placeholder="Calificacion 1">
<br>
<br>
<input class="input estilo-tex is-rounded"  type="text" id="cal_2" name="cal_2" placeholder="Calificacion 2">
<br>
<br>
<input class="input estilo-tex is-rounded"  type="text" id="cal_3" name="cal_3" placeholder="Calificacion 3">
<br>
<br>
</center>
<center><a href="borrar.php" class="button is-primary is-rounded" type="submit" value="Enviar">Enviar</a>  
<br>
<br>
<center><a href="iniciosesion.php" class=" button is-primary is-rounded" type="submit" >Regresar al inicio</a></center>



</body>
</html>

_HTML;



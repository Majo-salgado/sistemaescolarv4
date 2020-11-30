<?php

use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

$cal1=$_POST['cal_1'];
$cal2=$_POST['cal_2'];
$cal3=$_POST['cal_3'];
$operador='+';+

DB::table("calificaciones")->insert([
	"cal_1" => $_POST["cal_1"],
    "cal_2" => $_POST["cal_2"],
    "cal_3" => $_POST["cal_3"],
]);
if($operador=="+"){
    $div= $cal1 + $cal2 + $cal3;
    $promedio=$div/3;
}

echo <<<_HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio</title>
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
</head>
<body>
    <h1>Promedio Final</h1>
    <br>
	<h1> El resultado es: "$promedio"</h1>
	<br>
    <a href="iniciosesion.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Salir</a>
</body>
</html>
_HTML;
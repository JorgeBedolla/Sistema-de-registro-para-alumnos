<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "examen";

$conexion = mysqli_connect($server, $user, $pass, $db);
mysqli_set_charset($conexion, "utf8");

if($conexion->connect_errno){
    die("la conexion ha fallado". $conexion->connect_error);
}

?>
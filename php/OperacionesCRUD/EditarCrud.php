<?php 

include("../conectar.php");

$id = intval($_GET["id"]);
$campo = $_GET["campo"];
$contenido = $_GET["contenido"];


$textConsulta = "UPDATE alumno SET ".$campo."=".$contenido." WHERE  id_alumno=".$id.";";
echo $textConsulta;
$consulta = mysqli_query($conexion, $textConsulta);

if (!$consulta){
    echo '<script language="javascript">alert("ERROR");</script>';
    header("Location: ERRORCrud.php");
}

header("Location: ../crudMenu.php");
mysqli_close($conexion);

?>
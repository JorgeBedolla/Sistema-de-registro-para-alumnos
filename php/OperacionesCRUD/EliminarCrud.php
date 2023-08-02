<?php 

include("../conectar.php");
$id = intval($_GET["id"]);

$textConsulta = "DELETE FROM `alumno` WHERE id_alumno=".$id.";";
$consulta = mysqli_query($conexion, $textConsulta);

if (!$consulta){
    echo '<script language="javascript">alert("ERROR");</script>';
    header("Location: ERRORCrud.php");
}

header("Location: ../crudMenu.php");
mysqli_close($conexion);

?>
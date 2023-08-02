<?php 

include("../conectar.php");

$boleta = $_GET["boleta"];
$nombre = $_GET["nom"];
$apellidoP = $_GET["apeP"];
$apellidoM = $_GET["apeM"];
$Fnacimiento = $_GET["fecha"];
$genero = $_GET["genero"];
$curp = $_GET["curp"];
$calleN = $_GET["calleN"];
$colonia = $_GET["col"];
$alcaldia = $_GET["alcaldia"];
$CP = $_GET["cp"];
$telefono = $_GET["tel"];
$correo = $_GET["correo"];
$escuela = $_GET["esc"];
$entidadFederativa = $_GET["entidad"];

$promedio = $_GET["prom"];
$Opcion = $_GET["opcion"];

$id_examen;


$textConsulta = "SELECT correo FROM alumno;";
$consulta = mysqli_query($conexion, $textConsulta);
$contenido = mysqli_fetch_array($consulta);

if(in_array($correo, $contenido) == true){
    header("Location: ../index.php");
}



while(1){
    $ExamenRandom = mt_rand(1,36);
    $textConsulta =  "SELECT * FROM laboratorios WHERE id = ".$ExamenRandom.";";
    $consulta = mysqli_query($conexion, $textConsulta);
    $contenido = mysqli_fetch_array($consulta);

    $cupo = $contenido['Capacidad'];

    if($cupo != 0){
        $cupo--;
        $id_examen = $contenido['id'];
        $textConsulta = "UPDATE laboratorios SET Capacidad='$cupo' WHERE  id=".$contenido['id'].";";
        $consulta = mysqli_query($conexion, $textConsulta);

        $textConsulta = "INSERT INTO `alumno`(`boleta`, `nombre`, `apellidoP`, `apellidoM`, `Fnacimiento`, `genero`, `curp`, `calleN`, `colonia`, `alcaldia`, `CP`, `telefono`, `correo`, `escuela`, `entidadFederativa`, `promedio`, `opcion`, `id_examen`) VALUES ('$boleta','$nombre','$apellidoP','$apellidoM','$Fnacimiento','$genero','$curp','$calleN','$colonia','$alcaldia','$CP','$telefono','$correo','$escuela','$entidadFederativa','$promedio','$Opcion','$id_examen')";
        mysqli_query($conexion, $textConsulta);
        break;
    }

}

header("Location: ../crudMenu.php");

mysqli_close($conexion);

?>
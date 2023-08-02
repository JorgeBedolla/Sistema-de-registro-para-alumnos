<?php 

include("conectar.php");

$boleta = $_GET["boleta"];

$textoConsulta =  "SELECT * FROM alumno WHERE boleta =".$boleta.";";
$consulta = mysqli_query($conexion, $textoConsulta);

if (!$consulta){
    echo '<script language="javascript">alert("ERROR");</script>';
    header("Location: mensajeERROR.php");
  }

$contenidoAlumno = mysqli_fetch_array($consulta);



$textConsulta = "SELECT * FROM laboratorios WHERE  id =".$contenidoAlumno['id_examen'].";";
$consulta = mysqli_query($conexion, $textConsulta);



if (!$consulta){
  echo '<script language="javascript">alert("ERROR");</script>';
  header("Location: mensajeERROR.php");
}

$contenidoLab = mysqli_fetch_array($consulta);

session_start();

$_SESSION['datosLaboratorio'] = $contenidoLab;
$_SESSION['datosUsuario'] = $contenidoAlumno;

header("Location: gmail.php");
?>

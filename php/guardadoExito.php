<?php 
include("conectar.php");

$idAlumno = intval($_GET["id"]);

$textConsulta = "SELECT * FROM alumno WHERE id_alumno =".$idAlumno.";";
$consulta = mysqli_query($conexion, $textConsulta);
$contenidoAlumno = mysqli_fetch_array($consulta);

$textConsulta = "SELECT * FROM laboratorios WHERE  id =".$contenidoAlumno['id_examen'].";";
$consulta = mysqli_query($conexion, $textConsulta);
$contenidoLab = mysqli_fetch_array($consulta);

session_start();

$_SESSION['datosLaboratorio'] = $contenidoLab;
$_SESSION['datosUsuario'] = $contenidoAlumno;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardado exitoso</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="cabezeraMenu">
    <img src="../data/LogoIPN.png" alt="IPNlogo" id="logoIpn">
    <img id="logo" src="../data/logoESCOM.png" alt="EscomLogo">
    </div>

    <div class="formulario">

        <h3>Se ha registrado con exito:</h3>
        <p>
            Ha sido asignado al grupo: <?php echo $contenidoAlumno['id_examen']?>
            en el horario:<?php echo $contenidoLab['Horario']?>
        </p>
        
        <button onclick="verPDF()" class="btn btn-primary">Ver pdf</button>
        <button onclick="enviarCorreo()" class="btn btn-primary">Enviar pdf correo</button>
    </div>

    <script>

        function verPDF(){
            window.location.href = "pdf.php";
        }

        function enviarCorreo(){
            window.location.href = "gmail.php";
        }

    </script>
</body>
</html>


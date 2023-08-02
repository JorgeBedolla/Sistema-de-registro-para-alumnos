<?php
include("./phpMailer/class.phpmailer.php");
include("./phpMailer/class.smtp.php");

include("../fpdf/fpdf.php");
session_start();
$datosUsuario = $_SESSION['datosUsuario'];
$datosLaboratiorio = $_SESSION['datosLaboratorio'];
$correoDestino = $datosUsuario['correo'];

$email_user = "equipo5.escom@gmail.com"; //OJO. Debes actualizar esta línea con tu información
$email_password = "macos2021"; //OJO. Debes actualizar esta línea con tu información
$the_subject = "ESCOM: Nuevo ingreso";
$address_to = $correoDestino; //OJO. Debes actualizar esta línea con tu información
$from_name = "Evaluación diagnóstica";
$phpmailer = new PHPMailer();

//------------------------------Creacion del pdf------------------------


class PDF extends FPDF
    {
        // Cabecera de página
        function Header()
        {
            // Logo
            $this->Image('../data/IPN.png',10,8,35,35);
            $this->Image('../data/escudoESCOM.png',160,10,40,25);
            $this->Ln(20);
        }

        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10, utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
        }
    }

    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Helvetica','B',20);
    $pdf->Cell(0,10, utf8_decode("Instituto Politécnico Nacional"),0,1,"C");
    $pdf->Cell(0,10, utf8_decode("Escuela Superior de Cómputo"),0,1,"C");
    $pdf->SetFont('Helvetica','B',18);
    $pdf->Cell(0,10, utf8_decode("Datos:"),0,1);
    $pdf->SetFont('Helvetica','',15);
    $pdf->Line(10,60,200,60);
    $pdf->Cell(0,10, utf8_decode("Identidad"),0,1);
    $pdf->Line(10,70,200,70);
    $pdf->Cell(0,10, utf8_decode("Boleta: ".$datosUsuario['boleta']),0,1);
    $pdf->Cell(0,10, utf8_decode("Nombre: ".$datosUsuario['nombre']),0,1);
    $pdf->Cell(0,10, utf8_decode("Apellido paterno: ".$datosUsuario['apellidoP']),0,1);
    $pdf->Cell(0,10, utf8_decode("Apellido materno: ".$datosUsuario['apellidoM']),0,1);
    $pdf->Cell(0,10, utf8_decode("Fecha de nacimiento: ".$datosUsuario['Fnacimiento']),0,1);
    $pdf->Cell(0,10, utf8_decode("Genero: ".$datosUsuario['genero']),0,1);
    $pdf->Cell(0,10, utf8_decode("CURP: ".$datosUsuario['curp']),0,1);
    $pdf->Line(10,140,200,140);
    $pdf->Cell(0,10, utf8_decode("Contacto"),0,1);
    $pdf->Line(10,150,200,150);
    $pdf->Cell(0,10, utf8_decode("Calle y número: ".$datosUsuario['calleN']),0,1);
    $pdf->Cell(0,10, utf8_decode("Colonia: ".$datosUsuario['colonia']),0,1);
    $pdf->Cell(0,10, utf8_decode("Alcaldía: ".$datosUsuario['alcaldia']),0,1);
    $pdf->Cell(0,10, utf8_decode("Código postal: ".$datosUsuario['CP']),0,1);
    $pdf->Cell(0,10, utf8_decode("Teléfono o celular: ".$datosUsuario['telefono']),0,1);
    $pdf->Cell(0,10, utf8_decode("Correo electrónico: ".$datosUsuario['correo']),0,1);
    $pdf->Line(10,210,200,210);
    $pdf->Cell(0,10, utf8_decode("Procedencia"),0,1);
    $pdf->Line(10,220,200,220);
    $pdf->Cell(0,10, utf8_decode("Escuela de procedencia: ".$datosUsuario['escuela']),0,1);
    $pdf->Cell(0,10, utf8_decode("Entidad Feredativa de Procedencia: ".$datosUsuario['entidadFederativa']),0,1);
    $pdf->Cell(0,10, utf8_decode("Promedio: ".$datosUsuario['promedio']),0,1);
    $pdf->Cell(0,10, utf8_decode("Escom fue tu: ".$datosUsuario['opcion']),0,1);
    $pdf->SetFont('Helvetica','B',20);
    $pdf->Ln(10);
    $pdf->Cell(0,10, utf8_decode("Instituto Politécnico Nacional"),0,1,"C");
    $pdf->Cell(0,10, utf8_decode("Escuela Superior de Cómputo"),0,1,"C");
    $pdf->Line(10,260,200,260);
    $pdf->SetFont('Helvetica','',15);
    $pdf->Line(10,50,200,50);
    $pdf->Cell(0,10, utf8_decode("Asignación de examen"),0,1);
    $pdf->Line(10,60,200,60);
    $pdf->Cell(0,10, utf8_decode("Grupo: ".$datosLaboratiorio['id']),0,1);
    $pdf->Cell(0,10, utf8_decode("Horario: ".$datosLaboratiorio['Horario']),0,1);
    $pdf->Cell(0,10, utf8_decode("Laboratorio: ".$datosLaboratiorio['Laboratorio']),0,1);
    
    $archivoPDF = $pdf->Output('','S');

// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password; 
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "smtp.gmail.com"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;
$phpmailer->CharSet = 'UTF-8';
$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to); // recipients email

$phpmailer->Subject = $the_subject;	
$phpmailer->Body .="<h1 style='color:#3498db;'>Bienvenido estudiante</h1>";
$phpmailer->Body .= "<p>Hola alumno de nuevo ingreso, bienvenido a la escuela superior de cómputo, para completar su inscripción será necesario que usted realice su examen diagnóstico en las instalaciones, a continuación se le adjunta un PDF con sus datos personales además de la hora y grupo que le corresponde para realizar el examen:</p>";
$phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
$phpmailer-> AddStringAttachment($archivoPDF,'FichaDeExamen.pdf','base64');
$phpmailer->IsHTML(true);

$phpmailer->Send();

header("Location: mensajeEnvioConExito.php");

?>
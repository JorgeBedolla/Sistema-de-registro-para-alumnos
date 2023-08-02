<?php 

include("../fpdf/fpdf.php");
session_start();
$datosUsuario = $_SESSION['datosUsuario'];
$datosLaboratiorio = $_SESSION['datosLaboratorio'];

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
    
    $pdf->Output();

?>
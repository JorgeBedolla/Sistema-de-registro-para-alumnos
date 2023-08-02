<?php
include("conectar.php");
$textConsulta = "SELECT * FROM alumno;";
$consulta = mysqli_query($conexion, $textConsulta);
$contenidoAlumno = mysqli_fetch_array($consulta);
$column = 19;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD MODE</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    

    <div class="formularioM">
        <button onclick="javascript:window.location.reload();" class="btn btn-primary">Recargar tabla</button><br><br>
        <a  href="crudCrear.php">Crear alumno</a><br>
        <a  href="crudEditar.php">Editar dato de alumno</a><br>
        <a  href="crudEliminar.php">Eliminar Alumno</a><br>
        <a  href="../index.php" style="color:red;">Salir</a>
        <br><br>



        <table  class="table table-bordered">
            <thead>
                <th  scope="col">id_alumno</th>
                <th  scope="col">boleta</th>
                <th  scope="col">nombre</th>
                <th  scope="col">apellidosP</th>
                <th  scope="col">apellidosM</th>
                <th  scope="col">Fnacimiento</th>
                <th  scope="col">genero</th>
                <th  scope="col">curp</th>
                <th  scope="col">calleN</th>
                <th  scope="col">colonia</th>
                <th  scope="col">alcaldia</th>
                <th  scope="col">CP</th>
                <th  scope="col">telefono</th>
                <th  scope="col">correo</th>
                <th  scope="col">escuela</th>
                <th  scope="col">entidadFederativa</th>
                <th  scope="col">promedio</th>
                <th  scope="col">opcion</th>
                <th  scope="col">id_examen</th>



            </thead>
            <tbody>
                
               <?php 
                    while ($row = mysqli_fetch_array($consulta)) {
                        echo "<tr>"; // Por cada fila
                        echo "<th scope='row'>".$row[0]."</th>";
                        for ($i=1; $i < $column; $i++) {
                            ?>
                            <td><?php echo $row[$i]; ?></td>
                            <?php
                        }
                        echo "</tr>";
                    }
                ?>
                
            </tbody>
        </table>


        

        
    </div>


</body>
</html>
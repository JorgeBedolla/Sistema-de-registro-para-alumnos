<?php
    include("conectar.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="formulario">
        <h3>Modificar información</h3>
        <p><strong>ADVERTENCIA:</strong> este modo no cuenta con validaciones, los datos se ingresarán directamente a la base de datos, ademas el contenido del campo a editar debe ir entre comillas</p><br>
        <form>
        <label for="id">ID del alumno</label><br>
        <input id="id" type="text" class="form-control"><br>
        <label for="campo">Campo a modificar:</label><br>
        <input id="campo" type="text" class="form-control"><br>
        <label for="contenido">Contenido:</label><br>
        <input id="contenido" type="text" class="form-control"><br>
        </form>
        
        <button onclick="guardar()" class="btn btn-danger">Guardar</button>
        <a href="crudMenu.php">Regresar</a>
    </div>

    <script type="text/javascript">
        function guardar(){
            
            var id  = document.getElementById("id").value;
            var campo = document.getElementById("campo").value;
            var contenido = document.getElementById("contenido").value;
        

         window.location.href = "OperacionesCRUD/EditarCrud.php?id="+id+"&campo="+campo+"&contenido="+contenido;
         return false;
            
        }
    </script>
</body>
</html>
    
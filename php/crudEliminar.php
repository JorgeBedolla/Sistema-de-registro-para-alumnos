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
        <h3>ELIMINAR USUARIO</h3>
        <label for="id">ID del alumno a eliminar</label><br>
        <input id="id" type="text" class="form-control"><br>
        <button onclick="guardar()" class="btn btn-danger">ELIMINAR</button>
        <a href="crudMenu.php">Regresar</a>
    </div>

    <script>
        function guardar(){
            var id  = document.getElementById("id").value;
            var regExp = /^[0-9]*$/;

            if(regExp.test(id)){
                window.location.href = "OperacionesCRUD/EliminarCrud.php?id="+id;
                return false;
            }
            else{
                alert("ERROR: id incorrecto");
            }
        }
    </script>
</body>
</html>
    
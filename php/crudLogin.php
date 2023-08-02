<?php

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
    <div class="cabezeraMenu">
    <img src="../data/LogoIPN.png" alt="IPNlogo" id="logoIpn">
    <img id="logo" src="../data/logoESCOM.png" alt="EscomLogo">
    </div >

    <div class="formulario">
        <label for="contra">Por favor introduzca su contraseña:</label><br><br>
        <input id="contra" type="password" class="form-control"><br>
        <button onclick="iniciarSesion()" class="btn btn-primary">Iniciar como administrador</button>
    </div>

    <script>

        function iniciarSesion(){
            
            var contraIngresada = document.getElementById("contra").value;
            var contrasena = "1234";//contraseña
            if(contraIngresada === contrasena){
                window.location.href ="crudMenu.php";
            }else{
                alert("Error: contraseña incorrecta");
            }
    
        }
    </script>
</body>
</html>
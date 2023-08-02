<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD ERROR</title>

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
        <h2>Ocurrió un error, no se ejecutó la operación</h2>
        <button onclick="regresar()" class="btn btn-primary">Aceptar</button>
    </div>

    <script>
        function regresar(){
            window.location.href = "../crudMenu.php";
        }
    </script>
</body>
</html>
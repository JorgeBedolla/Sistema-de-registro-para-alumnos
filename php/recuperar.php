<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar</title>

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
            <label for="boleta">Boleta:</label><br>
            <input type="text"  class="form-control" id="boleta"><br>
            <button onclick="enviarBol()" class="btn btn-primary">Recuperar</button>
            <button onclick="regresar()" class="btn btn-primary">Regresar</button>
    </div>
    


    
<script>
        var boleta;
        var errores;
        function enviarBol(){
            errores = 0;
            validarBoleta();
            enviar(); 
        }

function validarBoleta(){
        boleta = document.getElementById("boleta").value;
        var caracteresRestringidos = /^[0-9]+$/

        if(boleta === null || boleta === "" ){
            alert("Por favor ingrese su boleta");
            errores++;
            return false;
            
        }

        if(boleta.length > 10 || boleta.length < 10){
            alert("Error: la longitud de la boleta es de 10 digitos y no se admiten espacios");
            errores++;
            return false;
        }

        if(caracteresRestringidos.test(boleta)){
            return true;
        }else{

            if(boleta[0] === "P" || boleta[0] === "p"){
                if(boleta[1] === "P" || boleta[1] === "p" || boleta[1] === "e" || boleta[1] === "E"){
                    return true;

                }
            }
            alert("Formato invalido de boleta, solo se admiten números o las iniciales PE o PP");
            errores++;
            return false;
        }
        }


        function enviar(){
            if(errores == 0){

                window.location.href = "recuperarPDF.php?boleta="+boleta;
                
                }else{

                return false;

                }
        }

        function regresar(){
            window.location.href = "../index.php";
        }
    </script>
</body>
</html>
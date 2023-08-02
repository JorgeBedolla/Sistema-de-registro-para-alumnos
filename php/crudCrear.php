<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="formulario">
    <h3>Crear alumno</h3>
    
        <form method="post">
            <fieldset>
                <legend>Identidad</legend>
                <label for="boleta">No. boleta:</label><br>
                <input id="boleta" type="text" class="form-control" placeholder="Boleta"><br>
                <label for="name">Nombre:</label><br>
                <input type="text" id="name" class="form-control" placeholder="Nombre"><br>
                <label for="apellidoP">Apellido paterno:</label><br>
                <input type="text" id="apellidoP" class="form-control" placeholder="Apellido paterno"><br>
                <label for="apellidoM">Apellido materno:</label><br>
                <input type="text" id="apellidoM" class="form-control" placeholder="Apellido materno"><br>
                <label for="fnacimiento">Fecha de nacimiento:</label><br>
                <input type="date" id="fnacimiento" class="form-control" placeholder="Fecha de nacimiento"><br>
                <label>Genero:</label><br>
                <input type="radio" name="genero" id="H" class="form-check-input">
                <label for="H">Hombre</label><br>
                <input type="radio" name="genero" id="M" class="form-check-input">
                <label for="M">Mujer</label><br><br>

                <label for="curp">Curp:</label><br>
                <input type="text" id="curp" class="form-control">
                <br><br>
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <label for="calleN">Calle y numero:</label><br>
                <input type="text" id="calleN" class="form-control"><br>
                <label for="col">Colonia:</label><br>
                <input type="text" id="col" class="form-control"><br>
                <label for="alcaldia">Alcaldía:</label><br>
                <select name="dele"  id="alcaldia" class="form-control">
                    <option selected value="N">--Seleccione una alcaldía--</option>
                    <option value="Azcapotzalco">Azcapotzalco</option>
                    <option value="Álvaro Obregón">Álvaro Obregón</option>
                    <option value="Benito Juárez">Benito Juárez</option>
                    <option value="Coyoacán">Coyoacán</option>
                    <option value="Cuajimalpa de Morelos">Cuajimalpa de Morelos</option>
                    <option value="Cuauhtémoc">Cuauhtémoc</option>
                    <option value="Gustavo A. Madero">Gustavo A. Madero</option>
                    <option value="Iztacalco">Iztacalco</option>
                    <option value="Iztapalapa">Iztapalapa</option>
                    <option value="Magdalena Contreras">La Magdalena Contreras</option>
                    <option value="Miguel Hidalgo">Miguel Hidalgo</option>
                    <option value="Milpa Alta">Milpa Alta</option>
                    <option value="Tlalpan">Tlalpan</option>
                    <option value="Tláhuac">Tláhuac</option>
                    <option value="Venustiano Carranza">Venustiano Carranza</option>
                    <option value="Xochimilco">Xochimilco</option>
                </select><br>
                <label for="cp">Código postal:</label><br>
                <input type="text" id="cp" class="form-control"><br>
                <label for="tel">Teléfono o celular:</label><br>
                <input type="text" id="tel" class="form-control"><br>
                <label for="email">Correo electrónico:</label><br>
                <input type="text" id="email" class="form-control"><br><br>
            </fieldset>

            <fieldset>
                <legend>Procedencia</legend>
                <label for="Vocacional">Escuela de procedencia:</label><br>
                <select name="cecyt" id="Vocacional" class="form-control" onchange="activarOtro()">
                    <option selected value="N">--Selecciona una escuela--</option>
                    <option value="CECyT 1">CECyT#1: "Gonzalo Vázquez Vela"</option>
                    <option value="CECyT 2">CECyT#2: "Miguel Bernard"</option>
                    <option value="CECyT 3">CECyT#3: "Estanislao Ramírez Ruiz”</option>
                    <option value="CECyT 4">CECyT#4: "Lázaro Cárdenas"</option>
                    <option value="CECyT 5">CECyT#5: "Benito Juárez"</option>
                    <option value="CECyT 6">CECyT#6: "Miguel Othón de Mendizábal"</option>
                    <option value="CECyT 7">CECyT#7: "Cuauhtémoc"</option>
                    <option value="CECyT 8">CECyT#8: "Narciso Bassols"</option>
                    <option value="CECyT 9">CECyT#9: "Juan de Dios Bátiz"</option>
                    <option value="CECyT 10">CECyT#10: "Carlos Vallejo Márquez"</option>
                    <option value="CECyT 11">CECyT#11: "Wilfrido Massieu"</option>
                    <option value="CECyT 12">CECyT#12: "José María Morelos"</option>
                    <option value="CECyT 13">CECyT#13: "Ricardo Flores Magón"</option>
                    <option value="CECyT 14">CECyT#14: "Luis Enrique Erro Soler" </option>
                    <option value="CECyT 15">CECyT#15: "Diodoro Antúnez Echegaray" </option>
                    <option value="CECyT 16">CECyT#16: "Hidalgo" </option>
                    <option value="CECyT 17">CECyT#17: "León Guanajuato" </option>
                    <option value="CECyT 18">CECyT#18: "Zacatecas" </option>
                    <option value="CECyT 19">CECyT#19: "Leona Vicario" </option>
                    <option value="CET">CET: "Walter Cross Buchanan" </option>
                    <option value="ot">---Otro---</option>
                </select>
                <br>

                <div class="OtraEsc off">
                    <label for="Oescuela">Ingrese el nombre de la escuela:</label>
                    <input id="Oescuela" type="text" class="form-control">
                </div>

                <label for = "Feredativa"> Entidad Feredativa de Procedencia: </label><br>
                <select id="Federativa" name="Entidad Feredativa de Procedencia" class="form-control">
                        <option selected value="N">--Selecciona una entidad federativa--</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Coahuila">Coahuila de Zaragoza</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="CDMX" >Ciudad de México</option>
                        <option value="Durango">Durango</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="EDOMEX">Estado de México</option>
                        <option value="Michoacan de Ocampo">Michoacan de Ocampo</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nuevo Leon">Nuevo Le&oacute;n</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro" >Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí" >San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option> <br>
                        <option value="Veracruz">Veracruz de Ignacio de la Llave</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                </select>   
                <br>
                <label for="promedio">Promedio:</label><br>
                <input type='number' step='0.01' id="promedio" class="form-control" min="0" max="10"><br>
                <label>Escom fue tu:</label><br>
                <input type="radio" name="opcion" value="1" id="opcion1" class="form-check-input">
                <label for="opcion1">Primera opción</label><br>
                <input type="radio" name="opcion" value="2" id="opcion2" class="form-check-input">
                <label for="opcion2">Segunda opción</label><br>
                <input type="radio" name="opcion" value="3" id="opcion3" class="form-check-input">
                <label for="opcion3">Tercera opción</label><br>
                <input type="radio" name="opcion" value="4" id="opcion4" class="form-check-input">
                <label for="opcion4">Cuarta opción</label><br>

            </fieldset>
            <br>
        </form>
        <button onclick="enviarCRUD()"  class="btn btn-primary">Enviar</button>
        <button onclick="location.reload()" class="btn btn-danger">Limpiar</button>        
        <a href="crudMenu.php">Regresar</a>
        <br><br>   
    </div>


    
    <script src="../javascript/validaciones.js"></script>
</body>
</html>
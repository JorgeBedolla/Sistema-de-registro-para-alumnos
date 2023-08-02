var boleta;
var nombre;
var apellidoP;
var apellidoM;
var Fnacimiento;
var genero;
var curp;
var calleN;
var colonia;
var alcaldia;
var CP;
var telefono;
var correo;
var escuela;
var entidadFederativa;
var nombreEscuela;
var promedio;
var Opcion;
var flag = true;//flag que nos indicara si el form es vallido
var errores;

var anterior;

function validar(){
    errores = 0;
    validarBoleta();
    validarNombre();
    validarApellidoP();
    validarApellidoM();
    validarFnacimiento();
    validargenero();
    validarCurp();
    validarCalleN();
    validarColonia();
    validarAlcaldia();
    validarCP();
    validarTelefono();
    validarCorreo();
    validarEscuela();
    validarEntidadFederativa();
    validarPromedio();
    validarOpcion();

    if(errores == 0){
        //formulario valido
        desplegarInfo();
    }
    
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


function validarNombre(){
    //tamaño BD 30 caracteres
    nombre = document.getElementById("name").value;
    var regexLetras = /^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/g

    if(nombre === null || nombre === "" ){
        alert("Por favor ingrese su nombre");
        errores++;
        return false;
    }

    if(nombre.length > 30){
        alert("Error: la longitud máxima del nombre es de 30 caracteres y no se admiten espacios");
        errores++;
        return false;
    }

    if(regexLetras.test(nombre)){
        return true;
    }else{
        alert("No se admiten números ni caracteres especiales en el nombre");
        errores++;
        return false;
    }
 
}

function validarApellidoP(){
    //tamaño BD 20 caracteres
    apellidoP = document.getElementById("apellidoP").value;
    var regexLetras = /^[A-Za-zÁÉÍÓÚáéíóúñÑ]+$/g

    if(apellidoP === null || apellidoP === "" ){
        alert("Por favor ingrese su apellido paterno");
        errores++;
        return false;
    }

    if(apellidoP.length > 20){
        alert("Error: la longitud máxima del apellido paterno es de 20 caracteres y no se admiten espacios");
        errores++;
        return false;
    }

    if(regexLetras.test(apellidoP)){
        return true;
    }else{
        alert("No se admiten números ni caracteres especiales en el apellido paterno");
        errores++;
        return false;
    }
 
}

function validarApellidoM(){
    //tamaño BD 20 caracteres
    apellidoM = document.getElementById("apellidoM").value;
    var regexLetras = /^[A-Za-zÁÉÍÓÚáéíóúñÑ]+$/g

    if(apellidoM === null || apellidoM === "" ){
        alert("Por favor ingrese su apellido materno");
        errores++;
        return false;
    }

    if(apellidoM.length > 20){
        alert("Error: la longitud máxima del apellido materno es de 20 caracteres y no se admiten espacios");
        errores++;
        return false;
    }

    if(regexLetras.test(apellidoM)){
        return true;
    }else{
        alert("No se admiten números ni caracteres especiales en el apellido materno");
        errores++;
        return false;
    }
 
}

function validarFnacimiento(){

    Fnacimiento = document.getElementById("fnacimiento").value;
    var ToDate = new Date();
    if(Fnacimiento === null || Fnacimiento === ""){
        alert("Por favor ingrese su fecha de nacimiento");
        errores++;
        return false;
    }

    if (new Date(Fnacimiento).getTime() < ToDate.getTime()) {
        //Su fecha es valida
        return true;
    }
    //Su fecha es invalida
    alert("Error: La fecha ingresada es invalida");
    errores++;
    return false;
}

function validargenero(){
    var hombre = document.getElementById("H");
    var mujer = document.getElementById("M");

    if(hombre.checked == false && mujer.checked == false){
        alert("Por favor seleccione su genero");
        errores++;
        return false;
    }

    if(hombre.checked){
        //selecciono hombre
        genero = "Hombre";
        return true;
    }

    if(mujer.checked){
        genero = "Mujer";
        return true;
    }

}

function validarCurp(){
    //BD 18 caracteres 
    curp = document.getElementById("curp").value;
    if(curp === null || curp === "" ){
        alert("Por favor ingrese su CURP");
        errores++;
        return false;
    }

    if(curp.length != 18){
        alert("Error: la longitud del CURP es de 18 caracteres");
        errores++;
        return false;
    }


    var primerosCuatro = curp[0] + curp[1] + curp[2] + curp[3];
    var primerosSeis = curp[4] + curp[5] + curp[6] + curp[7] + curp[8] + curp[9];
    var siguentesSeis = curp[10] + curp[11] + curp[12] + curp[13] + curp[14] + curp[15];
    var ultimosDos = curp[16] + curp[17];

    var regexNumeros = /^[0-9]*$/;
    var regexLetras = /^[A-Za-z]+$/;
    var regexLetrasyNumeros = /^[A-Za-z0-9]+$/;

    if(regexLetras.test(primerosCuatro) && regexNumeros.test(primerosSeis) 
    && regexLetras.test(siguentesSeis) && regexLetrasyNumeros.test(ultimosDos)){
        return true;
    }else{
        errores++;
        alert("Formato de CURP invalido");
        return false;
    }
}

function validarCalleN(){
    //BD varchar 20
    calleN = document.getElementById("calleN").value;

    if(calleN === null || calleN === "" ){
        alert("Por favor ingrese su calle y numero");
        errores++;
        return false;
    }

    if(calleN.length > 20){
        alert("Error: la longitud maxima de la calle y numero es de 20 caracteres");
        errores++;
        return false;
    }

    return true;
}

function validarColonia(){
    //BD varchar 30
    colonia = document.getElementById("col").value;

    if(colonia === null || colonia === "" ){
        alert("Por favor ingrese su colonia");
        errores++;
        return false;
    }

    if(colonia.length > 30){
        alert("Error: la longitud maxima de la colonia es de 30 caracteres");
        errores++;
        return false;
    }

    var regexFormato = /^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/g;
    if(regexFormato.test(colonia)){
        return true;
    }else{
        errores++;
        alert("Error: no se admiten numeros ni caracteres especiales en la colonia");
        return false;
    }
}

function validarAlcaldia(){
    alcaldia = document.getElementById("alcaldia").value;
    if(alcaldia === "N"){
        alert("Seleccione una alcaldia");
        errores++;
        return false;
    }
    return true;
}

function validarCP(){

    //BD 5 caracteres
    CP = document.getElementById("cp").value;

    if(CP === null || CP === "" ){
        alert("Por favor ingrese su codigo postal");
        errores++;
        return false;
    }

    if(CP.length == 5){
        var regEx = /^[0-9]*$/;
        if(regEx.test(CP)){
            return true;
        }else{
            alert("Error: el codigo postal solo debe estar conformado por numeros");
            errores++;
            return false;
        }

    }else{
        alert("Error: la longitud maxima del codigo postal es de 5 caracteres");
        errores++;
        return false;
    }

}

function validarTelefono(){
    //BD varchar 10
    telefono = document.getElementById("tel").value;

    if(telefono === null || telefono === "" ){
        alert("Por favor ingrese su teléfono");
        errores++;
        return false;
    }

    if(telefono.length > 10 || telefono.length < 10){
        alert("La longitud del número telefonico es de 10 digitos");
        errores++;
        return false;
    }

    var regExp = /^[0-9]*$/;

    if(regExp.test(telefono)){
        return true;
    }else{
        alert("El número telefonico solo admite digitos");
        errores++;
        return false;
    }
}

function validarCorreo(){
    //BD varchar 40
    correo = document.getElementById("email").value;

    if(correo === null || correo === "" ){
        alert("Por favor ingrese su correo");
        errores++;
        return false;
    }

    if(correo.length > 40){
        alert("La longitud maxima del correo electrónico es de 40 caracteres");
        errores++;
        return false;
    }

    var correoExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
    if(correoExp.test(correo)){
        return true;
    }else{
        alert("El formato de correo es incorrecto.");
        errores++;
        return false;
    }
}

function validarEscuela(){
    //BD varchar 20
    escuela = document.getElementById("Vocacional").value;
    if(escuela === "N"){
        alert("Seleccione una escuela de procedencia");
        errores++;
        return false;
    }

    if(escuela === "ot"){
        escuela = document.getElementById("Oescuela").value;

        if(escuela === null || escuela === "" || escuela === " "){
            alert("Por favor ingrese la otra escuela");
            errores++;
            return false;
        }

        if(escuela.length > 30){
            alert("La longitud maxima del nombre de la escuela es de 30 caracteres");
            errores++;
            return false;
        }

        return true;

    }else{
        return true;
    }
}

function validarEntidadFederativa(){
    entidadFederativa = document.getElementById("Federativa").value;
    if(entidadFederativa === "N"){
        alert("Seleccione una entidad federativa");
        errores++;
        return false;
    }

    return true;
}
//No la use
function validarNombreEscuela(){
    //BD varchar 35
    nombreEscuela = document.getElementById("nameEsc").value;
    if(nombreEscuela === null || nombreEscuela === "" || nombreEscuela === " "){
        alert("Ingrese el nombre de la escuela");
        errores++;
        return false;
    }

    if(nombreEscuela.length > 35){
        alert("La longitud maxima para el nombre de la escuela es de 35 caracteres");
        errores++;
        return false;
    }

    return true;
}

function validarPromedio(){
    promedio = document.getElementById("promedio").value;
    var promedioA = parseFloat(promedio);

    if(isNaN(promedioA)){
        alert("Solo se admiten números en el promedio");
        errores++;
        return false;
    }

    if(promedio === null || promedio === "" || promedio === " "){
        alert("Ingrese el su promedio");
        errores++;
        return false;
    }

    if(promedioA > 10 || promedioA < 0){
        alert("El rango de promedio permitido es de 0 a 10");
        errores++;
        return false;
    }

    if(promedioA == 10){
        return true
    }

    var regexp = /^\d+\.\d{0,2}$/;
    if(regexp.test(promedio)){
        return true;
    }else{
        alert("Solo se permiten 2 decimales en el promedio");
        errores++;
        return false;
    }

    
}

function validarOpcion(){
    var primera = document.getElementById("opcion1");
    var segunda = document.getElementById("opcion2");
    var tercera = document.getElementById("opcion3");
    var cuarta = document.getElementById("opcion4");

    if(primera.checked == false && segunda.checked == false
        && tercera.checked == false && cuarta.checked == false){
        alert("Por favor seleccione que opción fue ESCOM");
        errores++;
        return false;
    }

    if(primera.checked){
        Opcion = "Primera opción";
        return true;
    }
    
    if(segunda.checked){
        Opcion = "Segunda opción";
        return true;
    }
    
    if(tercera.checked){
        Opcion = "Tercera opción";
        return true;
    }
    
    if(cuarta.checked){
        Opcion = "Cuarta opción";
        return true;
    }
}


function activarOtro(){
    var otro = document.getElementById("Vocacional").value;

    if(otro === "ot"){
        var entradaOtro = document.querySelector(".OtraEsc.off");
        entradaOtro.classList.remove("off");
        anterior = otro;
    }

    if(otro != "ot" && anterior === "ot"){
        var Desentrada = document.querySelector(".OtraEsc");
        Desentrada.classList.add("off");
    }
    
}

function desplegarInfo(){

    var ventanaFormulario = document.querySelector(".formulario");
    var ventanaDatos = document.querySelector(".verInfo.off");
    ventanaDatos.classList.remove("off");
    ventanaFormulario.classList.add("off");
    
    var contenido = document.querySelector(".des");
    var texto = " Hola "+nombre+ " "+apellidoP+" "+apellidoM+",verifica que los datos que ingresaste sean correctos:<br><br><strong>Boleta: </strong>"+boleta+"<br><strong>Fecha de nacimiento: </strong>"+Fnacimiento+"<br><strong>Genero: </strong>"+genero+"<br><strong>CURP: </strong>"+curp+"<br><strong>Calle y número: </strong>"+calleN+"<br><strong>Colonia: </strong>"+colonia+"<br><strong>Alcaldia: </strong>"+alcaldia+"<br><strong>Codigo postal: </strong>"+CP+"<br><strong>Teléfono o celular: </strong>"+telefono+"<br><strong>Correo electrónico: </strong>"+correo+"<br><strong>Escuela de procedencia: </strong>"+escuela+"<br><strong>Entidad Feredativa de Procedencia: </strong>"+entidadFederativa+"<br><strong>Nombre de la escuela: </strong>"+nombreEscuela+"<br><strong>Promedio: </strong>"+promedio+"<br><strong>Escom fue tu: </strong>"+Opcion+"<br>";

    contenido.innerHTML = texto;
}

function editarContenido(){
    var ventanaFormulario = document.querySelector(".formulario.off");
    var ventanaDatos = document.querySelector(".verInfo");

    ventanaFormulario.classList.remove("off");
    ventanaDatos.classList.add("off");
}

function aceptarCambios(){

    window.location.href = "php/guardarDatos.php?boleta="+boleta+"&nom="+nombre+"&apeP="+apellidoP+"&apeM="+apellidoM+"&fecha="+Fnacimiento+"&genero="+genero+"&curp="+curp+"&calleN="+calleN+"&col="+colonia+"&alcaldia="+alcaldia+"&cp="+CP+"&tel="+telefono+"&correo="+correo+"&esc="+escuela+"&entidad="+entidadFederativa+"&prom="+promedio+"&opcion="+Opcion; 
    return false; 

}


function enviarCRUD(){
    errores = 0;
    validarBoleta();
    validarNombre();
    validarApellidoP();
    validarApellidoM();
    validarFnacimiento();
    validargenero();
    validarCurp();
    validarCalleN();
    validarColonia();
    validarAlcaldia();
    validarCP();
    validarTelefono();
    validarCorreo();
    validarEscuela();
    validarEntidadFederativa();
    validarPromedio();
    validarOpcion();

    if(errores == 0){
        window.location.href = "OperacionesCRUD/CrearCrud.php?boleta="+boleta+"&nom="+nombre+"&apeP="+apellidoP+"&apeM="+apellidoM+"&fecha="+Fnacimiento+"&genero="+genero+"&curp="+curp+"&calleN="+calleN+"&col="+colonia+"&alcaldia="+alcaldia+"&cp="+CP+"&tel="+telefono+"&correo="+correo+"&esc="+escuela+"&entidad="+entidadFederativa+"&prom="+promedio+"&opcion="+Opcion; 
    }
}


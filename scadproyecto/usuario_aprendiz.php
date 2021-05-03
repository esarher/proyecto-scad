<?php   
include('conexion_bd.php'); 
include('funciones.php');  
   
        session_start();
    
      # code...
 
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Proyecto SCAD</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--      <title>CSS Grid: Makeup Palettes</title> -->
        <link rel="stylesheet" media="all" href="style.css" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
       <!--  <script src="js/mensaje.js"></script> -->
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.24414" rel="stylesheet" type="text/css" />
        <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.24414" />
        <link rel="stylesheet" media="all" href="example.css" />
        <!--  -->
        <link href="css/styles.css" rel="stylesheet" />	
        <link rel="stylesheet" media="all" href="css/botones.css" />
        <link rel="stylesheet" media="all" href="css/estilos.css" />
        <link rel="stylesheet" media="all" href="css/crear.css" />
        <link rel="stylesheet" media="all" href="css/usuarios.css" />
        <!--  -->
        <script src="https://cdn.jotfor.ms/js/vendor/autoFill.min.js?v=3.3.24414" type="text/javascript"></script>
        <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
        <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.24414" type="text/javascript"></script>

<script type="text/javascript">
JotForm.init(function(){
if (window.JotForm && JotForm.accessible) $('input_5').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_5').hint('V-0.000.000');
       }, 20);
      setTimeout(function() {
          $('input_97').hint('ex: 23');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_20').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_21').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_39').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_57').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_181').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_182').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_55').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_183').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_99').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_187').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_188').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_189').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_190').setAttribute('tabindex',0);

 JotForm.calendarMonths = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
 JotForm.calendarDays = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
 JotForm.calendarOther = {"today":"Hoy"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("199", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("199", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
      JotForm.displayLocalTime("input_194_hourSelect", "input_194_minuteSelect","input_194_ampm", null, true);
      JotForm.displayLocalTime("input_195_hourSelect", "input_195_minuteSelect","input_195_ampm", null, true);
	JotForm.newDefaultTheme = false;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
      JotForm.alterTexts({"ageVerificationError":"Debe ser mayor de {minAge} años para enviar este formulario.","alphabetic":"Este campo solo puede contener letras.","alphanumeric":"Este campo solo puede contener letras y números.","ccInvalidCVC":"El número CVC no es válido.","ccInvalidExpireDate":"La fecha de expiración no es válida","ccInvalidNumber":"El número de su tarjeta de crédito no es válido.","ccMissingDetails":"Por favor rellene los datos de su Tarjeta de Crédito","ccMissingDonation":"Ingresa por favor una cantidad a donar","ccMissingProduct":"Por favor seleccione al menos un producto.","characterLimitError":"Demasiados caracteres. El límite es","characterMinLimitError":"Muy pocas palabras. El mínimo es","confirmClearForm":"Are you sure you want to clear the form","confirmEmail":"El correo electrónico no coincide","currency":"Este campo sólo puede contener valores de moneda.","cyrillic":"Este campo solo puede contener caracteres cirílicos.","dateInvalid":"Esta fecha no es valida. El formato de fecha es {format}","dateInvalidSeparate":"Esta fecha no es valida. El formato de fecha es {element}.","dateLimited":"Esta fecha no está disponible.","disallowDecimals":"Por favor, introduzca un número entero.","email":"Introduzca una dirección e-mail válida","fillMask":"El valor de este campo debe llenar la mascara","freeEmailError":"No se permiten cuentas de correo gratuitas ","generalError":"Existen errores en el formulario, por favor corríjalos antes de continuar.","generalPageError":"Hay errores en esta página. Por favor, corríjalos antes de continuar.","gradingScoreError":"El puntaje total debería ser sólo \"menos que\" o \"igual que\"","incompleteFields":"Existen campos requeridos incompletos. Por favor complételos.","inputCarretErrorA":"El valor introducido no puede ser menor que el mínimo especificado:","inputCarretErrorB":"La entrada no debe ser mas grande que el valor máximo:","lessThan":"Your score should be less than","maxDigitsError":"El máximo de dígitos permitido es","maxSelectionsError":"El máximo requerido es una opción ","minSelectionsError":"El mínimo requerido es una opción ","multipleFileUploads_emptyError":"El fichero {file} está vacío; por favor, selecciona de nuevo los ficheros sin él.","multipleFileUploads_fileLimitError":"Solo {fileLimit} carga de archivos permitida.","multipleFileUploads_minSizeError":"{file} is demasiado pequeño, el tamaño mínimo de fichero es: {minSizeLimit}.","multipleFileUploads_onLeave":"Se están cargando los ficheros, si cierras ahora, se cancelará dicha carga.","multipleFileUploads_sizeError":"{file} es demasiado grande; el tamaño del archivo no debe superar los {sizeLimit}.","multipleFileUploads_typeError":"El fichero {file} posee una extensión no permitida. Sólo están permitidas las extensiones {extensions}.","nextButtonText":"Siguiente","numeric":"Este campo sólo admite valores numéricos.","pastDatesDisallowed":"La fecha debe ser futura","pleaseWait":"Por favor, espere ...","prevButtonText":"Anterior","progressMiddleText":"/","required":"Campo requerido.","requireEveryCell":"Se requieren todas las celdas.","requireEveryRow":"Todas las filas son obligatorias.","requireOne":"Al menos un campo requerido.","reviewBackText":"Volver a FCEM INSCRIPCIÓN ADULTO","reviewSubmitText":"REVISAR Y ENVIAR ","seeAllText":"Mostrar Todos","submissionLimit":"¡Lo siento! Sólo se permite una entrada. Múltiples envíos están desactivados para este formulario.","submitButtonText":"Enviar","uploadExtensions":"Solo puede subir los siguientes archivos:","uploadFilesize":"Tamaño del archivo no puede ser mayor que:","uploadFilesizemin":"Tamañao de archivo no puede ser menos de:","url":"Este campo solo contiene una URL válida.","wordLimitError":"Demasiadas palabras. El límite es","wordMinLimitError":"Muy pocas palabras. El mínimo es"});
      FormTranslation.init({"detectUserLanguage":"1","firstPageOnly":"0","options":"Español","originalLanguage":"es","primaryLanguage":"es","saveUserLanguage":"1","showStatus":"flag-with-nation","theme":"light-theme","version":"2"});
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
          JotForm.isNewSaveAndContinueLaterActive = true;
    /*INIT-END*/
});

setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"planillaDe1","qid":"1","text":"PLANILLA DE INSCRIPCION CLUB FCEM","type":"control_head"},null,{"name":"nombreY3","qid":"3","text":"Nombre y Apellido:","type":"control_fullname"},null,{"name":"cedulaDe","qid":"5","text":"Cedula de Identidad:","type":"control_textbox"},null,null,null,{"name":"direccionHabitacion","qid":"9","text":"Direccion Habitacion:","type":"control_address"},{"name":"lugarDe","qid":"10","text":"Lugar de Nacimiento:","type":"control_address"},{"name":"direccionTrabajo","qid":"11","text":"Direccion Trabajo:","type":"control_address"},null,null,null,{"name":"telefonoHabitacion","qid":"15","text":"Telefono Habitacion:","type":"control_phone"},{"name":"telefonoMovil","qid":"16","text":"Telefono Movil:","type":"control_phone"},{"name":"telefonoTrabajo","qid":"17","text":"Telefono Trabajo:","type":"control_phone"},null,null,{"name":"twitter","qid":"20","subLabel":"@usuario","text":"Twitter:","type":"control_textbox"},{"name":"instagram","qid":"21","subLabel":"@usuario","text":"Instagram:","type":"control_textbox"},null,null,null,null,null,null,null,null,{"name":"typeA30","qid":"30","text":"Sexo:","type":"control_radio"},{"name":"correoElectronico31","qid":"31","subLabel":"example@example.com","text":"Correo Electronico","type":"control_email"},{"name":"datosPersonales32","qid":"32","type":"control_text"},null,{"name":"ocupacion","qid":"34","subLabel":"Profesion\u002FOcupacion","text":"Ocupacion:","type":"control_dropdown"},{"name":"correoElectronico","qid":"35","subLabel":"example@example.com","text":"Correo Electronico","type":"control_email"},null,null,{"name":"horarioDe","qid":"38","text":"Horario de Entrenamiento:","type":"control_matrix"},{"name":"solicitudAdicional","qid":"39","text":"Solicitud Adicional \u002F Comentarios: ","type":"control_textarea"},{"name":"divider","qid":"40","type":"control_divider"},{"name":"divider41","qid":"41","type":"control_divider"},{"name":"divider42","qid":"42","type":"control_divider"},{"name":"divider43","qid":"43","type":"control_divider"},{"name":"divider44","qid":"44","type":"control_divider"},{"name":"grupoSanguineo45","qid":"45","text":"Grupo Sanguineo:","type":"control_dropdown"},{"name":"sufreAlgun46","qid":"46","text":"¿Sufre algun padecimiento fisico?:","type":"control_dropdown"},{"name":"estaBajo47","qid":"47","text":"¿Esta bajo algun tratamiento medico?:","type":"control_dropdown"},{"name":"tomaAlgun48","qid":"48","text":"¿Toma algun medicamento?:","type":"control_dropdown"},null,{"name":"esAlergico","qid":"50","text":"Es alergico a:","type":"control_dropdown"},{"name":"poseeSeguro","qid":"51","text":"¿Posee seguro de HCM y\u002Fo Otro?:","type":"control_dropdown"},null,null,null,{"name":"indiqueLa55","qid":"55","text":"Indique la forma de suministro:","type":"control_textbox"},null,{"name":"especifique57","qid":"57","text":"Especifique:","type":"control_textbox"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"disciplina75","qid":"75","text":"Disciplina: ","type":"control_widget"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"liberacionDe91","qid":"91","template":"Yo, {Responsable:30} portador de la cedula de identidad numero {Cedula de Identidad:15} declaro que conozco todos los riesgos que involucran las actividades deportivas y que hare uso de dichas instalaciones bajo mi unica responsabilidad. Asi mismo declaro que exonero de toda responsabilidad Penal, Civil o Administrativa a la Fundacion Centro Eugenio Mendoza y la Alcaldia de Chacao por hechos o accidentes ocurridos antes, durante y despues de la practica deportiva o recreativa que realice. \n\nPor ultimo, doy autorizacion para mi traslado a la clinica u hospital mas cercano, en caso de presentarse algun accidente y autorizo a los medicos a atenderme debidamente.","text":"Liberacion de Responsabilidad Social:","type":"control_widget"},null,null,null,{"name":"divider95","qid":"95","type":"control_divider"},{"name":"divider96","qid":"96","type":"control_divider"},{"name":"edad97","qid":"97","text":"Edad:","type":"control_number"},{"name":"nombreY","qid":"98","text":"Nombre y Apellido:","type":"control_fullname"},{"name":"parentesco","qid":"99","subLabel":"Familiar Responsable","text":"Parentesco:","type":"control_textbox"},{"name":"direccionHabitacion100","qid":"100","text":"Direccion Habitacion:","type":"control_address"},{"name":"telefonoHabitacion101","qid":"101","text":"Telefono Habitacion:","type":"control_phone"},{"name":"telefonoMovil102","qid":"102","text":"Telefono Movil:","type":"control_phone"},null,{"name":"ocupacion104","qid":"104","subLabel":"Profesion\u002FOcupacion","text":"Ocupacion:","type":"control_dropdown"},{"name":"direccionTrabajo105","qid":"105","text":"Direccion Trabajo:","type":"control_address"},{"name":"telefonoTrabajo106","qid":"106","text":"Telefono Trabajo:","type":"control_phone"},{"name":"telefonoMovil107","qid":"107","text":"Telefono Movil:","type":"control_phone"},{"name":"divider108","qid":"108","type":"control_divider"},{"name":"divider109","qid":"109","type":"control_divider"},null,{"name":"divider111","qid":"111","type":"control_divider"},null,null,null,{"name":"input115","qid":"115","subLabel":"Tipos de Archivos: pdf, jpg, jpeg, png ","text":"Adjuntar Documentos:","type":"control_fileupload"},null,{"name":"soportesDe","qid":"117","text":"\nConstancia de Residencia emitida por el CNE.\nInforme Medico avalado por Salud Chacao.\nCedula de Identidad.\n","type":"control_text"},{"name":"aceptacionTratamiento","qid":"118","template":"Yo, {Responsable:30} portador de la cedula de identidad numero {Cedula de Identidad:15} autorizo a la Fundacion Centro Eugenio Mendoza, a que conserven en ficheros informaticos y\u002Fo en cualquier otro soporte fisico los datos personales que le han sido proporcionados de forma voluntaria y a tratar esa informacion con el objeto que le han sido facilitados, es decir, para la administracion y gestion. Asimismo, el firmante declara conocer y aceptar las normas generales de funcionamiento del Centro Deportivo Eugenio Mendoza, de las actividades y aquellas genericas de funcionamiento. Por su parte la Fundacion Centro Eugenio Mendoza informa al firmante que su informacion personal figura en sus oficinas, en las que podra solicitar el contenido exacto de ella y en donde podra ejercer los derechos de rectificacion, anulacion o modificacion que pudiera corresponderle, asi como a modificar esta autorizacion en cualquier sentido.","text":"Aceptacion Tratamiento de Datos:","type":"control_widget"},{"name":"permisoDe119","qid":"119","template":"Yo, {Responsable:30} portador de la cedula de identidad numero {Cedula de Identidad:15} declaro que autorizo a que la Fundacion Centro Eugenio Mendoza, pueda realizar fotografias, durante las actividades, para su posible utilizacion en medios de comunicacion, redes sociales, soportes informaticos o exhibicion en otros medios del centro.","text":"Permiso de Fotografias:","type":"control_widget"},null,{"name":"firmaDe","qid":"121","text":"Firma de Conformidad del Proceso de Inscripcion:","type":"control_signature"},{"name":"enviar","qid":"122","text":"Enviar","type":"control_button"},{"name":"typeA","qid":"123","type":"control_widget"},{"name":"input124","qid":"124","type":"control_widget"},{"name":"input125","qid":"125","type":"control_widget"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"fechaDe153","qid":"153","text":"Fecha de nacimiento","type":"control_birthdate"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"typeA168","qid":"168","type":"control_widget"},{"name":"divider169","qid":"169","type":"control_divider"},{"name":"solicitud","qid":"170","text":"Solicitud:","type":"control_autoincrement"},{"name":"tramite","qid":"171","subLabel":"Seleccione su solicitud","text":"Tramite:","type":"control_dropdown"},{"name":"ubicacion","qid":"172","subLabel":"Indique si usted habita en el Municipio o fuera de el. ","text":"Ubicacion:","type":"control_dropdown"},{"name":"keren","qid":"173","text":"keren","type":"control_collapse"},{"name":"datosContacto174","qid":"174","text":"DATOS CONTACTO","type":"control_collapse"},{"name":"datosProfesionales","qid":"175","text":"DATOS PROFESIONALES \u002F LABORALES","type":"control_collapse"},{"name":"informacionDeportiva176","qid":"176","text":"INFORMACION  DEPORTIVA","type":"control_collapse"},{"name":"registroDe177","qid":"177","text":"REGISTRO DE SALUD","type":"control_collapse"},{"name":"informacionPara178","qid":"178","text":"INFORMACION PARA CASOS DE EMERGENCIA","type":"control_collapse"},{"name":"accesoA","qid":"179","text":"ACCESO A LA INSTALACION","type":"control_collapse"},{"name":"aspectoLegal","qid":"180","text":"ASPECTO LEGAL","type":"control_collapse"},{"name":"especifique","qid":"181","text":"Especifique:","type":"control_textbox"},{"name":"especifique182","qid":"182","text":"Especifique:","type":"control_textbox"},{"name":"especifique183","qid":"183","text":"Especifique:","type":"control_textbox"},{"name":"soportesDe184","qid":"184","text":"SOPORTES DE EXPEDIENTE","type":"control_collapse"},{"name":"divider185","qid":"185","type":"control_divider"},{"name":"queMedio","qid":"186","text":"¿Que medio de transporte utilizara para llegar al Centro D. Eugenio Mendoza?:","type":"control_checkbox"},{"name":"vehiculoModelo","qid":"187","text":"Vehiculo Modelo:","type":"control_textbox"},{"name":"vehiculoPlaca","qid":"188","text":"Vehiculo Placa:","type":"control_textbox"},{"name":"motoModelo","qid":"189","text":"Moto Modelo:","type":"control_textbox"},{"name":"motoPlaca","qid":"190","text":"Moto Placa:","type":"control_textbox"},{"name":"nombreSegunda","qid":"191","text":"Nombre Segunda Alternativa Persona de Contacto:","type":"control_fullname"},{"name":"adjuntarFoto","qid":"192","subLabel":"Tipos de Archivos: pdf, jpg, jpeg, png ","text":"Adjuntar Foto de Identificacion:","type":"control_fileupload"},{"name":"escribaUna","qid":"193","type":"control_widget"},{"description":"","name":"hora","qid":"194","text":"Hora","type":"control_time"},{"description":"","name":"hora195","qid":"195","text":"Hora","type":"control_time"},{"description":"","name":"calculo","qid":"196","subLabel":"","text":"Calculo","type":"control_calculation"},{"name":"keren194","qid":"197","text":"keren","type":"control_collapse"},{"description":"","name":"email","qid":"198","subLabel":"ejemplo@ejemplo.com","text":"Email","type":"control_email"},{"description":"","name":"fecha","qid":"199","text":"Fecha","type":"control_datetime"}]);}, 20); 
</script>
</head>  
<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container" >       

                <a class="navbar-brand js-scroll-trigger" href="index.php">Sistema de Control de Asistencia Digital</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <div>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cerrarsesion.php">cerrar sesion</a></li>
                      </ul>
                      <img class="iconosena" src="img/Logo.png" />      

                </div>
              </div>              
            </div>
        </nav>
<center><header class="masthead bg-primary2 text-white text-center">

<img class="fond" src="img/usuario2.png" alt="" />
        

<?php
 if(isset ($_SESSION['nusuario'])==false){
    $_SESSION['nusuario']=$_POST['correo']; 
    $_SESSION['nclave']=$_POST['clave'];   
}

$miconexion=conectar_bd('', 'bd_proyecto');
$verificacion=consulta($miconexion,"SELECT  EXISTS(select * from correo_usuario where trim(nombre_correo) like '%{$_SESSION['nusuario']}%' and  trim(contraseña) like '%{$_SESSION['nclave']}%') ");
$row=mysqli_fetch_row($verificacion);


          if ($row[0]>"0"  )  
          {
           
            
  
  $miconexion=conectar_bd("",  $base_datos); 
      
  $resultad=consulta($miconexion,"select * from correo_usuario where nombre_correo='{$_SESSION['nusuario']}' and contraseña='{$_SESSION['nclave']}'");
  $fil = $resultad->fetch_object(); 
  
  $id=$fil->id_correo;
 
  $resultad1=consulta($miconexion,"select * from datos_basicos where mail_db='{$id}'");
  $fil1 = $resultad1->fetch_object(); 
  $idusuario=$fil1->id_tipousuario;


  

if ($idusuario==2 or $v_ingreso==3) {
  
   
if($resultad->num_rows>0){  
?>
 <?php
 $miconexion=conectar_bd("",  $base_datos); 

 $resultad=consulta($miconexion,"select * from correo_usuario where nombre_correo='{$_SESSION['nusuario']}' and contraseña='{$_SESSION['nclave']}'");
 $fil = $resultad->fetch_object(); 
 $id=$fil->id_correo;


 $resultado1=consulta($miconexion,"SELECT * FROM datos_basicos WHERE mail_db LIKE '%$id%'");
 $fila1 = $resultado1->fetch_object(); 
 $nombre=$fila1->nomb_db;
 $apellido=$fila1->ape_db;
 $id_dat=$fila1->$id_datos;
 
  echo "<div class='lgristi '><h1 style='text-transform: uppercase'>".$nombre." ".$apellido."<h1></div>"?> 
 
 
<fieldset class="cont">
    <center>
        
                <div class="datosbasic">
               
  <script type="text/javascript" src="https://cdn.jotfor.ms/js/formTranslation.v2.js?3.3.24414"></script>

   
              <ul class="form-section-closed" style="height: 60px;clear:both;" id="section_174">
                  <li id="cid_174" class="form-input-wide" data-type="control_collapse">
                  <div class="form-collapse-table" id="collapse_174" data-component="collapse">
                      <span class="form-collapse-mid" id="collapse-text_174">
                      DATOS PERSONALES
                      </span>
                      <span class="form-collapse-right form-collapse-right-hide">
                      
                      </span>
                  </div>
                  </li>
                  <li class="form-line" data-type="control_text" id="id_32">
                  <div id="cid_32" class="form-input-wide">
                      <div id="text_32" class="form-html" data-component="text">
                      </div>
                  </div>
                  </li>
               
                      <center><div class="doc">
                          <center><div class="tip1">
                                     <?php
                                        $resultado1=consulta($miconexion,"SELECT * FROM datos_basicos WHERE mail_db LIKE '%$id%'");
                                        $resultado2=consulta($miconexion,"SELECT * FROM correo_usuario WHERE id_correo LIKE '%$id%'");
                                  
                                        $fila1 = $resultado1->fetch_object(); 
                                        $fila2 = $resultado2->fetch_object(); 
                                        $doc=$fila1->numdoc_db;
                                        $tipodoc=$fila1->tipoid_db;
                                        $nomb=$fila1->nomb_db;
                                        $apellido=$fila1->ape_db;
                                        $correo=$fila2->nombre_correo;
                                        $celular=$fila1->cel_db;
                                        $sex=$fila1->genero_db;
                                        
                                        echo "<input id='m1' class='form-control input-lg' type='number' name='num_id' min='9999' max='9999999999999' disabled value='".$doc."' >" ;
                                        echo"<input id='m3'class='form-control input-lg' name='tipoid'  value='".$tipodoc."  ' disabled>";
                                      
                                      
                                    
                                   
                                        
                                        echo"<input id='m5' class='form-control' style='text-transform: uppercase' type='text' name='nombres' value='".$nomb."' placeholder='Nombres' required/> ";   
                                        
                                        echo"<input id='m5' class='form-control' style='text-transform: uppercase;'' type='text' name='apellidos' value='".$apellido."' placeholder='Apellidos' required/> ";                                          
                                        echo"<input id='m3' class='form-control' style='text-transform: uppercase;' type='text' name='correo' value='".$correo."' placeholder=' e-mail: example@example.com' disabled/>";
                                        echo"<input id='m5' class='form-control' type='number' name='telefono' min='9999' max='9999999999999' value='".$celular."' placeholder='CELULAR' required/>";  
                                        
                                        echo"<input id='m3' class='form-control' style='text-transform: uppercase' type='text' name='genero' value='".$sex."' placeholder='Nombres' required disabled/> ";   

                                       
                                        ?>
                           
                          
                                                  
                                             
                    
                     
                          </div>
                      </div></center>
                      </div></center>
                
             
              </ul>
   
            </div>

             <br>
      
            <div class="datosbasic2">
                <ul class="form-section-closed" style="height: 60px;clear:both;" id="section_175">
                    <li id="cid_175" class="form-input-wide" data-type="control_collapse">
                    <div class="form-collapse-table" id="collapse_175" data-component="collapse">
                        <span class="form-collapse-mid" id="collapse-text_175">
                        DATOS DEL PROGRAMA
                        </span>
                        <span class="form-collapse-right form-collapse-right-hide">
                        
                        </span>
                    </div>
                    </li>
                    <li class="form-line" data-type="control_text" id="id_32">
                  <div id="cid_32" class="form-input-wide">
                      <div id="text_32" class="form-html" data-component="text">
                      </div>
                  </div>
                  </li>
                    <center><div class="doc3">                             
                        <label class="lgris"><h1</h1></label>                        
                           <!--  <select id="m6"class="form-control" name="centro_f" require/>                        
                                <option class="form-control" value="0"><h1>Centro de formación</h1></option>
                                        <?php
                                        /*  $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_proyecto');
                                        $query = $mysqli -> query ("SELECT * FROM centro_formacion");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$valores[id_centro].'">'.$valores[nombre_centro].'</option>';
                                        }  */
                                        ?>         
                            </select> -->
                            <?php
                            $resultado1=consulta($miconexion,"SELECT * FROM datos_basicos WHERE mail_db LIKE '%$id%'");
                            $fila1 = $resultado1->fetch_object();
                            $v_id_centro=$fila1->centro_deformacion;
                            $resultado2=consulta($miconexion,"SELECT * FROM centro_formacion WHERE id_centro LIKE '%$v_id_centro%'");
                            $fila2 = $resultado2->fetch_object();
                            $vnombre_centro=$fila2->nombre_centro;
                            


                            echo"<input id='m6' class='form-control' type='text' value='". $vnombre_centro."' disabled required/>";  
                                        

                                        ?>  
                     <!--    <label class="lgris"><h1></h1></label>                        
                            <select id="m6"class="form-control" name="progra_f" require/>                        
                                <option class="form-control" value="0"><h1>Programa de formación</h1></option>
                                        <?php
                                    
                                       /* $mysqli = new mysqli('127.0.0.1', 'root', '', $base_datos);
                                        $query = $mysqli -> query ("SELECT * FROM $tabla");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$valores[$id].'">'.$valores[$nombre_pro1].'</option>';
                                        }   */
                                        ?>         
                            </select> -->
                            <?php
                            $resultado1=consulta($miconexion,"SELECT * FROM datos_basicos WHERE mail_db LIKE '%$id%'");
                            $fila1 = $resultado1->fetch_object();
                            $v_id_datosbas=$fila1->id_db;
                            $resultado2=consulta($miconexion,"SELECT * FROM datos_programa WHERE id_datosbas LIKE '%$v_id_datosbas%'");
                            $fila2 = $resultado2->fetch_object();
                            $variable=$fila2->nombre_progra;
                            $variable5=$fila2->num_ficha;
                            $resultado3=consulta($miconexion,"SELECT * FROM programas WHERE id_programas LIKE '%$variable%'");
                            $fila3 = $resultado3->fetch_object();
                            $variable1=$fila3->nombre_pro;
                          

                            

                            echo"<input id='m6' class='form-control' type='text' value='". $variable1."' disabled required/>"; 
                            echo"<input id='m6' class='form-control' type='text' value='". $variable5."' disabled required/>"; 


                            ?> 


                        <!-- <label class="lgris"></label>                        
                            <select id="m6"class="form-control" name="tipo_p" require/>                        
                                <option class="form-control" value="0"><h1>Tipo de programa</h1></option>
                                        <?php
                                        /*  $mysqli = new mysqli('127.0.0.1', 'root', '', $base_datos);
                                        $query = $mysqli -> query ("SELECT * FROM $tabla1");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$valores[$id1].'">'.$valores[$tipo_pro1].'</option>';
                                        }   */
                                        ?>         
                            </select>   -->
                        <!-- label class="lgris"></label>                        
                            <select id="m6"class="form-control" name="num_f" require/>                        
                                <option class="form-control" value="0"><h1>Número de ficha</h1></option>
                                        <?php
                                       /*  $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_proyecto');
                                        $query = $mysqli -> query ("SELECT * FROM  fichas");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$valores[num_fichas].'">'.$valores[num_fichas].'</option>';
                                        }   */
                                        ?> 
                                            
                            </select>  -->
                            <label class="lgris"></label>  <br> 
<!--                         <input id="m6" class="form-control" type="text" name="contra"  value="" placeholder="Escriba una contraseña" required/>              
 -->     
                    </div></center>
                </ul>
   
  
            </div>        
            <div class="datosbasic2">
                <ul class="form-section-closed" style="height: 60px;clear:both;" id="section_175">
                   
                   

                    <center><div class="doc3">                             
                    <form class="jotform-form" method="post"  name="form_210896882135666" id="210896882135666" accept-charset="utf-8" autocomplete="on">
                              
                                        
                                 
                                </form>  
                                
         
                    </div></center>
                </ul>
   
  
            </div>     
  
            </center> <br>
</fieldset>	



<!--    <button id="btnatras9" class="btn btn-primary" onclick="location.href='cerrarsesion.php'">INICIO</button>   
 -->                <br><br> 
               
              
 <?php
               
            
               if ($_SERVER['REQUEST_METHOD']==='POST') { 
                $v_ingreso=$_POST['usuario'];
            
                if ($v_ingreso==3){
                    $inst_autoriza=$_POST['autoriza'];
                    $nota=$_POST['nota'];
                    $permi_tipo=$_POST['tipo_p'];
                    /*----------------------------------------------hora-----------------------------------------*/ 

                    date_default_timezone_set('America/Mexico_City');
                    $fecha_actual=date("Y-m-d H:i:s");
                                          
                    /*------------------------------------------hora---------------------------------------------*/
                    
                    $miconexion=conectar_bd('', 'bd_proyecto');
                
                    
                    $resultado=consulta($miconexion,"insert into  $tabla5($autor_per,$motivo_perm,$id_da_ba,id_tipoper,fecha)
                     values('$inst_autoriza','$nota','$id_dat','$permi_tipo','$fecha_actual')");

                     
                         
                         
                     if($resultado)
                    {                     
                            echo '<script> alert("Guardado exitoso") </script>';   
                    }
                    else {
                        echo '<script> alert("Error") </script>';
                 
                    }
                }

                if ($v_ingreso==2){

                    /*VARIABLES*/
                    $vnumero_f=$_POST['num_f'];
                    $vfecha=$_POST['fecha'];
                
                    /*VARIABLES*/
                    
                    $miconexion=conectar_bd('', 'bd_proyecto');
                
                    $resultad=consulta($miconexion,"select * from datos_programa where num_ficha='{$vnumero_f}'");
                    $fil = $resultad->fetch_object(); 
                     $id=$fil->id_datosbas;

                     
                     $resultad=consulta($miconexion,"select * from datos_basicos where id_db='{$id}'");
                    $fil = $resultad->fetch_object(); 
                  /*    $nomb=$fil->nomb_db;
                     $apelli=$fil->ape_db;
                     $tipodo=$fil->tipoid_db;
                     $numdoc=$fil->numdoc_db; */
                     echo "--------------".$nomb.$apelli.$tipodo.$numdoc;
                     echo "<table>";
                     echo"<tr><td>tipo</td><td>numero</td><td>nombre</td><td>apellido</td></tr>";
                     while ($fil = $resultad->fetch_object()){
                        echo"<tr><td>".$fil->tipoid_db."</td><td>".$fil->numdoc_db."</td><td>".$fil->nomb_db."</td><td>".$fil->ape_db."</td></tr>";
                     }
                     echo "</table>";

                     
                         
                         
                     if($resultad)
                    {                     
                            echo '<script> alert("Guardado exitoso") </script>';   
                    }
                    else {
                        echo '<script> alert("Error") </script>';
                 
                    }
                }

                 
        }
            }
            }
           

            else {
                echo '<script language="javascript">alert("Error de autentificación, presione aceptar para ir a usuario Instructor");window.location.href="usua_inst.php"</script>';

                

            }
        } 
            else {
                echo '<script language="javascript">alert("Error de autentificación, de usuario y contraseña");window.location.href="cerrarsesion.php"</script>';

               

            }
                   
                ?> 

        </header></center>  
 
</body> 
</html> 
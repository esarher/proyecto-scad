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
        <link href="css/styles.css" rel="stylesheet" />	
		<link rel="stylesheet" media="all" href="css/botones.css" />
		<link rel="stylesheet" media="all" href="css/estilos.css" />
        <link rel="stylesheet" media="all" href="css/crear.css" />


 
    </head>    
<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">SCAD - Control de Asistencia Digital</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">cerrar sesion</a></li>
            </ul>
        </div>
      </div>
    </div>
</nav>
<center><header class="masthead bg-primary2 text-white text-center">

            
               
    



<h1 style="text-align: center">Sí Usted aún no tiene un usuario, por favor ingrese sus datos aquí</h1><br>
  <form  action="mailto:micorreo@servidor.com" method="post" enctype="text/plain">
        <h2>Registro Instructor</h2>
<fieldset>
    <legend><p>Datos personales</p></legend>



    <center><form id="formulario" role="form" method="post" >     
        <div class="datosbasic">
            <label class="lgris1"><h1>Identificacion:</h1></label> 
     
    
    <div class="conjunto">                        
          
            <input id="m2" class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="Nº" required/>      
                        <select id="m"class="form-control" name="tipoid">                        
                            <option id="opti"value="CC" selected>CC - Cédula de Ciudadanía </option>                          
                            <option id="opti"value="TI">TI - Tarjeta de Identidad</option>                       
                            <option id="opti"value="RC">CE - Cédula de Extranjería</option>                         
                            <option id="opti" value="PA">PA - Pasaporte</option>                       
                        </select>                  
                   
                       
                        <label class="lgris"><h1>Nombres:</h1></label>                      
                        <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required/>                                      
                        <label class="lgris"><h1>Apellidos:</h1></label>                         
                            <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required/>                                           
                            <label class="lgris"><h1>Correo Electrónico:</h1></label>                       
                            <input class="form-control" style="text-transform: uppercase;" type="text" name="direccion" value="" placeholder="DIRECCIÓN" require/>                                        
                            <label class="lgris"><h1>Teléfono:</h1></label>  <br> 
                            <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="Nº" required/>              
                            <label class="lgris"><h1>Tipo de usuario:</h1></label>                        

                            <select id="m1"class="form-control" name="tipousu" require/>                        
                        
                        <option class="form-control" value="0"><h1>Tipo de usuario</h1></option>
                            <?php
                            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_proyecto');
                            $query = $mysqli -> query ("SELECT * FROM tipo_usuario");
                            while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="'.$valores[tp_usuario].'">'.$valores[tp_usuario].'</option>';
                            } 
                            ?>         
                    </select>
                    <label class="lgris"><h1>Género:</h1></label> <br>
                    <input type="radio" name="sexo" value="H" /> Masculino 
	                <input type="radio" name="sexo" value="M"/> Femenino
                   
        </div>
    </div> 
        </form> </center> 
</fieldset>	

    <form  action="mailto:micorreo@servidor.com" method="post" enctype="text/plain">
     
<fieldset>
    <legend><p>Datos del programa</p></legend>

            <center><form id="formulario" role="form" method="post" >     
                <div class="datosbasic">
                
                    <div class="conjunto">                        
                
                        
                        <label class="lgris"><h1>Centro de formación:</h1></label>                        
                                <select id="m1"class="form-control" name="ficha" require/>                        
                                <option class="form-control" value="0"><h1>Instructor</h1></option>
                                            <?php
                                            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_proyecto');
                                            $query = $mysqli -> query ("SELECT * FROM ficha");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="'.$valores[ficha_numero].'">'.$valores[ficha_numero].'</option>';
                                            } 
                                            ?>         
                                </select>
                                <label class="lgris"><h1>Programa de formación:</h1></label>                        
                                <select id="m1"class="form-control" name="ficha" require/>                        
                                <option class="form-control" value="0"><h1>Instructor</h1></option>
                                            <?php
                                            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_proyecto');
                                            $query = $mysqli -> query ("SELECT * FROM ficha");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="'.$valores[ficha_numero].'">'.$valores[ficha_numero].'</option>';
                                            } 
                                            ?>         
                                </select>
                                <label class="lgris"><h1>Tipo de programa:</h1></label>                        
                                <select id="m1"class="form-control" name="ficha" require/>                        
                                <option class="form-control" value="0"><h1>Instructor</h1></option>
                                            <?php
                                            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_proyecto');
                                            $query = $mysqli -> query ("SELECT * FROM ficha");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="'.$valores[ficha_numero].'">'.$valores[ficha_numero].'</option>';
                                            } 
                                            ?>         
                                </select> 
                                <label class="lgris"><h1>Número de ficha:</h1></label>                        
                                <select id="m1"class="form-control" name="ficha" require/>                        
                                <option class="form-control" value="0"><h1>Instructor</h1></option>
                                            <?php
                                            $mysqli = new mysqli('127.0.0.1', 'root', '', 'bd_proyecto');
                                            $query = $mysqli -> query ("SELECT * FROM ficha");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="'.$valores[ficha_numero].'">'.$valores[ficha_numero].'</option>';
                                            } 
                                            ?>         
                                </select>  <br>
                    </div>
                </div> 
                </form> </center> 
</fieldset>	


               <button id="btnatras9" class="btn btn-primary" onclick="location.href='index.php'">Atrás</button>   

 
                 <!--   <?php /* session_start(); if(! empty($_SESSION['tipo_usuario']))  {   
                 } */?>   -->   
          
          <?php               
               /*  if($_SESSION['tipo_usuario']=='1')           */       {                   
                ?>                  
                 <center><form id="formulario" role="form" method="post" >                   
                         
                

               <button id="guardar"class="btn btn-primary" type="submit" value="" ><h1>Guardar</h1> </button>  <br><br>
              

               

                       
          
               <?php               
                if($_SESSION['Tipo_usuario']=='1')                 {                   
                ?>                
                <DIV id="formulario1" >                  
                <?php
                 if ($_SERVER['REQUEST_METHOD']==='POST') { 
                    include('funciones.php');
                    $vtipoid=$_POST['tipoid'];
                    $vnumid=$_POST['numid'];
                    $vnombres=$_POST['nombres'];
                    $vapellidos=$_POST['apellidos'];
                    $vdireccion=$_POST['direccion'];
                    $vtelefono=$_POST['telefono'];
                    $vficha=$_POST['ficha'];
                    
                    $miconexion=conectar_bd('', 'crud');
                    $resultado=consulta($miconexion,"insert into 
                    aprendices(apren_tipoid,apren_numid,apren_nombre,apren_apellidos,apren_direccion,apren_telefono,apren_ficha)
                     values('$vtipoid','$vnumid','$vnombres','$vapellidos','$vdireccion','$vtelefono','$vficha')");
                                        if($resultado)
                    {echo "<b>";
                        echo"Guardado Exitoso";
                        echo "</b>";
                    }

                }  }
?>





                 <?php                }                
                   /* else                {               
                        echo "No tiene permisos para realizar esta acción";                } */
                    ?>              
                     <br>             
            

        </div>      

        </header></center>  


<!-- 



<fieldset>
<legend>Nivel de estudios e intereses</legend> 
<p>Nivel de estudios<br/>
   <input type="radio" name="estudios" value="1" checked="checked"/>Certificado escolar<br/>
	 <input type="radio" name="estudios" value="2"/> Graduado en E.S.O.<br/>
	 <input type="radio" name="estudios" value="3"/> Bachiller - Formaci&oacute;n Profesional <br/>
	 <input type="radio" name="estudios" value="4"/> Diplomado<br/>
	 <input type="radio" name="estudios" value="5"/> Licenciado o Doctorado</p>
<p>Recibir art&iacute;culos sobre los siguientes temas: <br/>
  <input type="checkbox" name="musica"/> M&uacute;sica<br/>
	<input type="checkbox" name="deportes"/> Deportes<br/>
	<input type="checkbox" name="cine"/> Cine<br/>
	<input type="checkbox" name="libros"/> Libros<br/>
	<input type="checkbox" name="ciencia"/> Ciencia</p>
</fieldset>
<fieldset>
<legend>Datos sobre la revista</legend>
<p>Frecuencia con  la que se recibir&aacute; la revista:</p>
<p><select name="frecuencia">
	 <option>semanal</option>
	 <option>quincenal</option>
	 <option>mensual</option>
	 <option>bimensual</option>
   </select></p>

<p>mandar art&iacute;culo: <input type="file" name="art&iacute;culo"/> </p>		
		
<p>Si deseas mandar simplemente una opinion o comentario escribelo aqu&iacute;.<br/>
<textarea name="comentario: " rows="5" cols="50">Escribe tu comentario: </textarea></p>
</fieldset>
<fieldset>
<legend>Comenzar de nuevo</legend>
<p>Borrar todos los datos del formulario y volver a empezar:
   <input type="reset" value="borrar todo"/>
</p>
</fieldset>
<fieldset>
<legend>enviar</legend>
<p>Enviar formulario por correo electronico: Al pulsar en el bot&oacute;n se abrir&aacute; la pagina
   de env&iacute;o de correo: en esa p&aacute;gina pulsa en enviar:</p>
<p><input type="submit" value="enviar por correo"/></p>
</fieldset>
</form>
 -->




</body> 
</html> 


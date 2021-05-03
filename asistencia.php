<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>usuario Aprendiz</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" media="all" href="style.css" />

        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <link href="css/styles.css" rel="stylesheet" />	
		<link rel="stylesheet" media="all" href="css/botones.css" />
		<link rel="stylesheet" media="all" href="css/estilos.css" />
    	<link rel="stylesheet" media="all" href="css/usuarios.css" />
  
   
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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="usuario.php">Usuario</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cerrarsesion.php">INICIO</a></li>

                </ul>
                      <img class="iconosena" src="img/Logo.png" />      

                </div>
              </div>              
            </div>
        </nav>

<center><header class="masthead bg-primary2 text-white text-center">
   
<center>  <div class="centro">
            
              <div class="usuarios">
              <form id="usuinst" method="post" ><br> 
                    <center>               
                        <label class="tamañoti1">ingrese el numero de documento</label> <br>                  
                        <input class="form-control" style="text-transform: uppercase;" type="number" name="numeroid" value="" required/>  <br> 
                        <label class="tamañoti1">ingrese su numero de ficha</label><br>
                        <input class="form-control"  type="number" name="ficha" value="" required/> <br><br> 
                        <button id="guardar"class="btn btn-primary" type="submit" name="usuario" value="3" >GUARDAR ASISTENCIA</button> 
                        <div type="input" name="imagen1" value="1"></div>
                        <br><br> 
                    </center>               
                    </form> 
                     <?php
                        include('conexion_bd.php'); 
                        include('funciones.php');  
                        
                                session_start();
                                
                if ($_SERVER['REQUEST_METHOD']==='POST') { 
                    $miconexion=conectar_bd('', 'bd_proyecto');

                    $v_ingreso=$_POST['usuario'];

                  
                    if ($v_ingreso==3){
                        $numero1_id=$_POST['numeroid'];
                        $ficha_1=$_POST['ficha'];
                       
                        $verificacion=consulta($miconexion,"SELECT  EXISTS(select * from datos_basicos where trim(numdoc_db) like '%{$numero1_id}%')");
                        $row=mysqli_fetch_row($verificacion);
                        $verificacion2=consulta($miconexion,"SELECT  EXISTS(select * from datos_programa where trim(num_ficha) like '%{$ficha_1}%')");
                        $row2=mysqli_fetch_row($verificacion2);
    
                        
                         
                        if ($row[0]>"0" and $row2[0]>"0"  )  
                        {
                                
                       
                        /*----------------------------------------------hora-----------------------------------------*/ 
    
                        date_default_timezone_set('America/Bogota');
                        $fecha_actual=date("Y-m-d H:i:s A");
                        $hora=date("Y-m-d H:i:s A");
                                              
                        /*------------------------------------------hora---------------------------------------------*/
                        /* realizar busqueda del usuario */
                        $resultado1=consulta($miconexion,"SELECT * FROM datos_basicos WHERE numdoc_db LIKE '%$numero1_id%'");
                        $resultado2=consulta($miconexion,"SELECT * FROM datos_programa WHERE num_ficha LIKE '%$ficha_1%'");
                  
                        $fila1 = $resultado1->fetch_object(); 

                        $id_datos=$fila1->id_db;
    
                        $fila2 = $resultado2->fetch_object(); 
                        $id_datospro=$fila2->id_progra;
                        /* realizar busqueda del usuario */
                        $miconexion=conectar_bd('', 'bd_proyecto');
                        
                        $resultado=consulta($miconexion,"insert into  asistencia(datosbasico,datosprograma,fecha_asistencia,hora_asistencia)
                         values('$id_datos','$id_datospro','$fecha_actual','$hora')");
         
                         if($resultado)
                        {                     
                                echo '<script> alert("Su asistencia ha sido guardada exitosamente") </script>';   
                        }
                        else {
                            echo '<script> alert("Error, ingrese los datos correctamente") </script>';
                     
                        }
                    }
                    else {
                        echo '<script> alert("Error") </script>';
                 
                    }
                }
               
                 
        }



                     ?>


              </div>
<!--               <button id="btnatras9" class="btn btn-primary" onclick="location.href='cerrarsesion.php'">INICIO</button>   
 -->  
            </div></center>
     <!-- Copyright Section-->
     <div class="copyright py-4 text-center text-white">
      </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
      
</header></center>
</body> 
</html>  

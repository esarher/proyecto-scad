
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>usuario Instructor</title>
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cerrarsesion.php">INICIO</a></li>

                    </ul>
                      <img class="iconosena" src="img/Logo.png" />      

                </div>
              </div>              
            </div>
        </nav>

<center><header class="masthead bg-primary2 text-white text-center">
<img class="fond" src="img/sesion.png" alt="" />

                <div class="container2">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Usuario Instructor</h2>
               
                </div>
   
<center>  <div class="centro">
            
              <div class="usuarios">
              <form id="usuinst" method="post" action="usuario_instructor.php"><br> 
                    <center>               
                        <label class="tamañoti1">Nombre de usuario:</label> <br>                  
                        <input class="form-control" style="text-transform: uppercase;" type="text" name="correo" value="" required/>  <br> 
                        <label class="tamañoti1">Contraseña:</label><br>
                        <input class="form-control"  type="password" name="clave" value="" required/> <br><br> 
                        <button id="guardar"class="btn btn-primary" type="submit" name="usuario" value="" ><h1>INICIAR SESIÓN</h1> </button> 
                        <div type="input" name="imagen1" value="0"></div>
                        <br><br> 
                    </center>               
                    </form>     
              </div>
               
            </div></center>

   
        
<!--      <button id="btnatras9" class="btn btn-primary" onclick="location.href='cerrarsesion.php'">INICIO</button>   
 -->





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

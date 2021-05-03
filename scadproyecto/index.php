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
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />	
		<link rel="stylesheet" media="all" href="css/botones.css" />
		<link rel="stylesheet" media="all" href="css/estilos.css" />
    <link rel="stylesheet" media="all" href="css/hover.css" />
    <link rel="stylesheet" media="all" href="css/crear.css" />
  <!--   <link rel="stylesheet" media="all" href="css/alerta.css" /> -->
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="asistencia.php">Asistencia</a></li>
                      </ul>
                      <img class="iconosena" src="img/Logo.png" />      

                </div>
              </div>              
            </div>
        </nav>
          
 
        <!-- Contenido del centro -->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="img/huella-dactilar.png" alt="" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">SCAD</h1>
              
                
                <!-- Contenido de botones -->
 <!--  <script>
    alert("Esto es un ejemplo de alerta")
    
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })
  </script> -->
      

            <div class="main-content">
              <div class="palette__wrapper">
              <!-- <h4>INICIAR SESIÓN</h4> -->
                <div class="palette palette--one">
                  <div class="palette__cover">
                    <div class="palette__cover__border1"></div>
                  </div>
                  <div class="palette__cover__top"></div>
                  <div class="palette__base">
              <button class="usu" type="button" onclick="location.href ='usua_inst.php'"> <h1>Instructor</h1></button>
              <button class="usu2" type="button" onclick="location.href ='usua_apren.php'"> <h1>Aprendiz</h1></button>
                  </div>
                </div>
                


          </div>
          <div class="palette__wrapper">
          <!-- <h4>REGISTRARSE</h4> -->
            <div class="palette palette--one">
              <div class="palette__cover">
                <div class="palette__cover__border2"></div>
              </div>
              <div class="palette__cover__top"></div>
              <div class="palette__base">
              <form id="formulario" method="post" action="crear_instructor.php"><br> 
					<button class="usu" type="submit" name="usuario" value="1"> <h1>Instructor</h1></button>
          </form>
          <form id="formulario" method="post" action="crear_aprendiz.php"><br> 
          <button class="usua2" type="submit" name="usuario" value="2" > <h1>Aprendiz</h1></button>
              </form>
              </div>
            </div>
         
          </div>
          <div class="palette__wrapper">
            <div class="palette palette--three">
              <div class="palette__cover"> 
                <div class="palette__cover__border3"></div>
              </div>
              <div class="palette__cover__top"></div>
              <div class="palette__base">
        
              </div>
              <form id="formulario" method="post" action="asistencia.php"><br> 
          <button class="asis" type="submit" name="usuario" value="2" > <h1>Asistencia</h1></button>
              </form>
          		 
          </div>
        </div>
			
            <h4>  </h4>
    	</div>
	</header>
  <!-- contactos sena -->
        <!-- Footer-->
        <footer class="footer text-center">
          <div class="container">
              <div class="row">
                  <!-- Footer Location-->
                  <div class="col-lg-4 mb-5 mb-lg-0">
                      <h4 class="text-uppercase mb-4">UBICACIÓN</h4>
                      <p class="lead mb-0">
                      Centro Biotecnológico del Caribe - CBC
                          <br />
                          Kilómetro 7 Vía a La Paz
                      </p>
                  </div>
                  <!-- Footer Social Icons-->
                  <div class="col-lg-4 mb-5 mb-lg-0">
                      <h4 class="text-uppercase mb-4">ALREDEDOR DE LA WEB</h4>
                      <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/SENA/about"><i class="fab fa-fw fa-facebook-f"></i></a>
                      <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/SENAComunica"><i class="fab fa-fw fa-twitter"></i></a>
                      <a class="btn btn-outline-light btn-social mx-1" href="https://co.linkedin.com/school/servicio-nacional-de-aprendizaje-sena-/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                      <a class="btn btn-outline-light btn-social mx-1" href="http://www.sena.edu.co/"><i class="fab fa-fw fa-dribbble"></i></a>
                  </div>
                  <!-- Footer About Text-->
                  <div class="col-lg-4">
                      <h4 class="text-uppercase mb-4">CONTÁCTECNOS</h4>
                      <p class="lead mb-0">
                       centrodecontacto@sena.edu.co
                      servicioalciudadano@sena.edu.co
                      </p>
                  </div>
              </div>
          </div>
      </footer>
    

    </body>
</html>

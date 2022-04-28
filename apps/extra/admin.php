<?php

session_start();

ob_start();




include("conexion.php");
if (isset($_POST['iniciar-session'])) 
{
    



$usuario=$_POST['usuario'];

$pass=$_POST['clave'];



$proceso=$cnx->query("SELECT * FROM admin WHERE usuario='$usuario' AND clave='$pass'");

if ($realizar=mysqli_fetch_array($proceso)){

    $_SESSION['usuario']=$usuario;

    header("location:vista_admin.php");

    

}

else

{

    

}

ob_end_flush();
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <!-- MDB 4.19.0 -->
<link rel="icon" href="images/icono.jpg">
  <!-- CSS -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">


    

</head>

<body id="contact" class="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="" alt="" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="modal.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Iniciar sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="vista_usuario.php" tabindex="-1" aria-disabled="true"
            ></a
          >
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- Navbar -->
    <!-- end Banner -->
    </header><br><br>
    <!-- End header -->
<center>
     <div class="container">
    <div class="row">
      <div class="col-3">
        <!-- Columna sin mostrar informacion -->
      </div>
</div></div><br><br><br>
      <div class="col-6">
       <div class="card">

        <h5 class="card-header white black-text text-center py-4">
          <strong>Bienvenido admin</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5">


        <!-- Form -->
 <form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
         

          

            <div class="row">
              <div class="input-group">
                <input type="text" id="usuario" class="form-control input-lg" placeholder="Introduce el usuario" name="usuario" value="<?php if (isset($_POST['buscar'])) echo $campo['usuario']?>">  
              </div></div><br>
              
                
                  
                      
                      
                      <div class="row">
                        <div class="input-group">
                          <input type="password" id="clave" class="form-control input-lg"  placeholder="Contraseña" name="clave" value="<?php if (isset($_POST['buscar'])) echo $campo['clave']?>"> 
                        </div></div><br>



                        
                           <button  name="iniciar-session" id="btn-login" type="submit" class="btn btn-black"  >Listo</button><br>
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
                    
      <!-- Form -->
    </div></div><br><br><br>

    

    

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
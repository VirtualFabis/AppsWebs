<?php
ob_start() ;
?>
<?php  
session_start();
if (!isset($_SESSION['email'])) {
  header('Location: sesion.php');
}elseif(isset($_SESSION['email'] )){
  include 'cnn.php';

  $sentencia = $cnnPDO->query("SELECT * FROM user;");
  $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);


}else{
  echo "Error en el sistema";
}



?>
<?php 

require_once 'cdn.html';

?>

<style>
  @media screen (max-width:1024px) and (min-width: 600px){

} 

  html ,
  body,
  header,
  .view {
    height: 100%;
  }

  @media (max-width: 740px) {
    html,
    body,
    header,
    .view {
      height: 1100px;
    }
  }
  @media (min-width: 800px) and (max-width: 850px) {
    html,
    body,
    header,
    .view {
      height: 700px;
    }
  }

  .top-nav-collapse {
    background-color: transparent !important;
  }

  .navbar:not(.top-nav-collapse) {
    background: transparent !important;
  }

  @media (max-width: 991px) {
   .navbar:not(.top-nav-collapse) {
    background: #39448c !important;
  }
}

h6 {
  line-height: 1.7;
}

</style>
<link rel="icon" href="images/logo.png" />
<title>Iniciar Sesión</title>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 


<!-- Main navigation -->
<header>

  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
  
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <strong>Bienvenido Administrador</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
      aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
      <ul class="navbar-nav mr-auto">
       
       
      </ul>
      <form class="form-inline" method="POST" action="cerrar.php">
        <div class="md-form my-0">


      <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Cerrar sesion</button>
</div>
      </form>
    </div>
  </div>
</nav>
<!-- Navbar -->
<!-- Full Page Intro -->
<div class="view" style="background-image: url('images/4.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <!-- Mask & flexbox options-->
  <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
    <!-- Content -->

  <div class="container">
    <div class="row">
      <div class="col-md">
        <!-- Card -->
        <div class="card">

          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="images/progra.jpg"
            alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">
            <center>
              <!-- Title -->
              <h4 class="card-title">Eliminar usuarios</h4>
              <!-- Text -->
              <p class="card-text"><h6>Eliminar usuarios que ya no utilicen la aplicación.</h6></p>
              <!-- Button -->
              <a href="usuarios.php" class="btn btn-primary">Ir</a>

            </center>
          </div>

        </div>
        <!-- Card -->
      </div>
      <div class="col-md">
        <!-- Card -->
        <div class="card">

          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="images/progra.jpg"
            alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">
            <center>
              <h4 class="card-title">Registrar usuarios</h4>
              <!-- Text -->
              <p class="card-text"><h6>Registra a los usuario que usen  esta aplicación</h6></p>
              <!-- Button -->
              <a class="btn btn-primary"  data-toggle="modal" data-target="#select" >Ir</a>
              <div class="modal fade" id="select" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog"  >
                  <div class="modal-content" >
                    <div class="modal-header" >
                      <h5 class="modal-title" id="exampleModalLabel">Registra los usuarios nuevos</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" >

                        <span>Registrar</span>
                        <!--Panel 8-->

                        <!--Body-->
                        <form id="formajax" name="formajax" class="md-form" method="POST" style="color: #757575;">
                          <!-- nombre -->
                          <div class="md-form input-with-post-icon">
                            <i class="fas fa-user input-prefix"></i>
                            <input type="text" id="nombre" class="form-control" name="nombre" autofocus >
                            <label for="nombre">Nombre</label>
                          </div>

                          <!-- Email -->
                          <div class="md-form input-with-post-icon">
                            <i class="fas fa-at input-prefix"></i>
                            <input type="email" id="email" class="form-control" name="email" >
                            <label for="email">Email</label>
                          </div>


                          <!-- Celular -->
                          <div class="md-form input-with-post-icon">
                            <i class="fas fa-mobile-alt input-prefix"></i>
                            <input type="number" id="celular" class="form-control" name="celular" >
                            <label for="celul">Celular</label>
                          </div>

                          <!-- Password -->
                          <div class="md-form input-with-post-icon">
                            <i class="fas fa-unlock input-prefix"></i>
                            <input type="password" id="password" class="form-control" name="password" >
                            <label for="password">Contraseña</label>
                          </div>

                    
                  <div class="modal-footer" >
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button  name="enviar" id="enviar" type="button" class="btn btn-primary " >Enviar</button>
                  </form>
                </div>
              </div>


            </center>
          </div>

        </div>
        <!-- Card -->
      </div>

   <div class="col-md">
        <!-- Card -->
        <div class="card">

          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="images/progra.jpg"
            alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">
            <center>
              <!-- Title -->
              <h4 class="card-title">Eliminar usuarios</h4>
              <!-- Text -->
              <p class="card-text"><h6>Eliminar usuarios que ya no utilicen la aplicación.</h6></p>
              <!-- Button -->
              <a href="usuarios.php" class="btn btn-primary">Ir</a>

            </center>
          </div>

        </div>
        <!-- Card -->
      </div>

        </div>
                </div>
        </div>
        </div>

        <!-- Card -->
 

          </div>


  


<!-- Full Page Intro -->
</header>
<!-- Main navigation -->

<script type="text/javascript">
  $(document).ready(function(){
    $('#enviar').click(function(){
      var datos = $('#formajax').serialize();

      if ($('#nombre').val() == '') {
        swal ("¡Debe de Ingrese un Nombre! " , "" , "warning");
        return;
      }
      if ($('#email').val() == '') {
        swal ("¡Debe de Ingrese un email! " , "" , "warning");
        return;
      }
      if ($('#celular').val() == '') {
        swal ("¡Debe de Ingrese un celular! " , "" , "warning");
        return;
      }
      if ($('#password').val() == '') {
        swal ("¡Debe de Ingrese una Contraseña! " , "" , "warning");
        return;
      }

      $.ajax({
        type:"POST",
        url:"registro.php",
        data:datos,
        success:function(r){
          if (r==1)
          {
            swal ("¡Registro enviado! " , "¡Los datos fueron registrados!" , "success");
            $('#nombre').val('');
            $('#email').val('');
            $('#celular').val('');
            $('#password').val('');
          }
          else 
          {
            alert("Error");
          }

        }

      });
      return false;

    });
  });
</script>
<?php
ob_end_flush();
?>

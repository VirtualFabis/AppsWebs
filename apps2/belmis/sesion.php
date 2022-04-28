<?php
ob_start() ;
?>
<?php 

require_once 'cdn.html';

?>

<style>

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
    background-color: #39448c !important;
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
    <link rel="icon" href="images/vendo.png" />
      <title>Iniciar Sesión</title>

      <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 


<!-- Main navigation -->
<header>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <strong>Venado Records</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
         
         
        </ul>
        <form class="form-inline">
          <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          </div>
        </form>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/gradient2.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft"
            data-wow-delay="0.3s">
            <h1 class="display-4 font-weight-bold">Venado Records</h1>
            <hr class="hr-light">
            <h6 class="mb-3">
            El mejor servicio de Streaming para peliculas.</h6>
            <a class="btn btn-outline-white btn-rounded">Leer mas</a>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
              <div class="card-body z-depth-2">
                <!--Header-->
                <div class="text-center">
                  <h3 class="dark-grey-text">
                    <strong>Inicio de Sesión</strong>
                  </h3>
                  <hr>
                </div>
             <!-- Nav tabs -->
        <br>
        <ul class="nav nav-tabs md-tabs tabs-2 btn-link darken-2 aling-center" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
            Inicia sesion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab" ><i class="fas fa-user-plus mr-1" ></i>
            Registrate</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <form method="POST" action="loginProceso2.php">

            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-user prefix"></i>
                <input type="email" id="modalLRInput10"  name ="email"  class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11"   name ="password" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Contraseña </label>
              </div>
              <div class="text-center mt-2">
                <button type="submit"  name="iniciar" class="btn btn-info" > Inicia Sesion <i class="fas fa-sign-in ml-1"></i></button>



              </div>
            </div>
          </div>
</form>


   
          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

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

           

            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" name="enviar" id="enviar" type="button">Registrate</button>

              </form>
              </div>
                </div>
              </div>
            </div>
            <!--/.Form-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
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

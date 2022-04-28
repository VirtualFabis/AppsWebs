<?php
ob_start() ;
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
        <strong>Bienvenido</strong>
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
<div class="view" style="background-image: url('images/2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <!-- Mask & flexbox options-->
  <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
    <!-- Content -->
    <div class="container">
      <!--Grid row-->
      <div class="row pt-lg-5 mt-lg-5">
        <!--Grid column-->
        <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft"
        data-wow-delay="0.3s">
        <h1 class="display-4 font-weight-bold">Titanium Distributions</h1>
        <hr class="hr-light">
        <h6 class="mb-3">
        "Un proyecto para la administración y control de una almacen"
<br>
Recuerda que para tener una cuenta el administrador en turno tendra que darte acceso.
      </h6>
        <a class="btn btn-outlinewhite btn-rounded" href="index.php">Leer mas</a>
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
                Inicia sesión</a>
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
                      <button type="submit"  name="iniciar" class="btn btn-info" > Inicia Sesión <i class="fas fa-sign-in ml-1"></i></button>



                    </div>
                  </div>
                </div>
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

<?php
ob_end_flush();
?>

<?php
ob_start() ;
?>
<?php 

require_once 'cdn.html';

?>
<?php  
session_start();
if (!isset($_SESSION['email'])) {
  header('Location: index.php');
}elseif(isset($_SESSION['email'] )){
  include 'cnn.php';

  $sentencia = $cnnPDO->query("SELECT * FROM usuarios;");
  $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);


}else{
  echo "Error en el sistema";
}

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
  @media (min-width: 700px) and (max-width: 850px) {
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
  select {
     background: transparent;
     font-size: 16px;
     height: 40px;
     padding: 5px;
     width: 350px;
     position: relative;
			top: 30%;
			left: 52%;
			transform: translate(-50%, 10%);
  }

</style>
  <link rel="icon" href="images/logo.png" />
      <title>Materias</title>

      <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 


<!-- Main navigation -->
<header>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
    	      	      <a class="navbar-brand" href="#"><img src="images/avatar.png"width= "60" height="60"></a>

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
      

          	<a href="escolar.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Regrasar</button> </a>

      
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('https://image.freepik.com/vector-gratis/papel-tapiz-azul-clasico-estilo-abstracto_23-2148437427.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft"
            data-wow-delay="0.3s">
            <h1 class="display-4 font-weight-bold"> Sistema Web de Control Escolar</h1>
            <hr class="hr-light">
          <h6 class="mb-3">
           Aqui puedes agrgar a las materias</h6>
            <a class="btn btn-outline-white btn-rounded" href="index.php">Leer mas</a>
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
                    <strong>Registro de los Materias</strong>
                  </h3>
                  <hr>
                </div>
             <!-- Nav tabs -->
        <br>
        <ul class="nav nav-tabs md-tabs tabs-2 btn-link darken-2 aling-center" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
            Registro</a>
          </li>
        
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
       <form method="POST" action="materias-re.php">

            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
              <i class="fas fa-fingerprint prefix"></i>
						<input type="number" id="inputValidationEx" class="form-control validate" name = "id_materia" >
						<label for="inputValidationEx" data-error="wrong" data-success="right">ID Materia</label>
              </div>

              <div class="md-form form-sm mb-4">
           <i class="fas fa-journal-whills prefix"></i>
						<input type="text" id="inputValidationEx" class="form-control validate" name = "nombre_materia" >
						<label for="inputValidationEx" data-error="wrong" data-success="right">Nombre  de la materia</label>
              </div>
  



              <div class="text-center mt-2">
                <button type="submit" class="btn btn-info" >Registro <i class="fas fa-sign-in ml-1"></i></button>



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

<?php
ob_end_flush();
?>

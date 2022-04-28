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
 .select-css {
  display: block;
  font-size: 16px;
  font-family: sans-serif;
  font-weight: 700;
  color: #444;
  line-height: 1.3;
  padding: .6em 1.4em .5em .8em;
  width: 100%;
  max-width: 100%; /* useful when width is set to anything other than 100% */
  box-sizing: border-box;
  margin: 0;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  border-radius: .5em;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  background-color: #fff;
  /* note: bg image below uses 2 urls. The first is an svg data uri for the arrow icon, and the second is the gradient. 
    for the icon, if you want to change the color, be sure to use `%23` instead of `#`, since it's a url. You can also swap in a different svg icon or an external image reference
    
  */
  background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
    linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
  background-repeat: no-repeat, repeat;
  /* arrow icon position (1em from the right, 50% vertical) , then gradient position*/
  background-position: right .7em top 50%, 0 0;
  /* icon size, then gradient */
  background-size: .65em auto, 100%;
}
/* Hide arrow icon in IE browsers */
.select-css::-ms-expand {
  display: none;
}
/* Hover style */
.select-css:hover {
  border-color: #888;
}
/* Focus style */
.select-css:focus {
  border-color: #aaa;
  /* It'd be nice to use -webkit-focus-ring-color here but it doesn't work on box-shadow */
  box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
  box-shadow: 0 0 0 3px -moz-mac-focusring;
  color: #222; 
  outline: none;
}

/* Set options to normal weight */
.select-css option {
  font-weight:normal;
}

/* Support for rtl text, explicit support for Arabic and Hebrew */
*[dir="rtl"] .select-css, :root:lang(ar) .select-css, :root:lang(iw) .select-css {
  background-position: left .7em top 50%, 0 0;
  padding: .6em .8em .5em 1.4em;
}



</style>
  <link rel="icon" href="images/logo.png" />
      <title>Alunmos</title>

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
  <div class="view" style="background-image: url('https://image.freepik.com/vector-gratis/acuarela-azul-fondo-hojas_125540-628.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
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
           Aqui puedes agrgar a tus alumnos</h6>
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
                    <strong>Registro de los alumnos</strong>
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
       <form method="POST" action="registrar.php">

            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
              <i class="fas fa-fingerprint prefix"></i>
						<input type="number" id="inputValidationEx" class="form-control validate" name = "matricula" >
						<label for="inputValidationEx" data-error="wrong" data-success="right">Matricula</label>
              </div>

              <div class="md-form form-sm mb-4">
               <i class="fas fa-user prefix"></i>
						<input type="text" id="inputValidationEx" class="form-control validate" name = "nombre" >
						<label for="inputValidationEx" data-error="wrong" data-success="right">Nombre</label>
              </div>

  	<select name="carrera" class="select-css" >
							<option value="Tecnologías de la Información"><i class="fas fa-desktop"></i>Tecnologías de la Información</option>
							<option value="Procesos de Producción" ><i class="fas fa-tasks"></i>Procesos de Producción</option>
							<option value="Desarrollo de Negocios"><i class="fas fa-hand-holding-usd"></i>Desarrollo de Negocios</option>
							<option value="Manufactura"><i class="far fa-object-ungroup"></i>Manufactura</option>
							<option value="Desarrollo de Negocios"><i class="fas fa-chart-line"></i>Desarrollo de Negocios</option>
							<option value="Mantenimiento"><i class="fas fa-calendar-check"></i>Mantenimiento</option>

						</select>
  



              <div class="text-center mt-2">
                <button type="submit"  name="iniciar" class="btn btn-info" >Registro <i class="fas fa-sign-in ml-1"></i></button>



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

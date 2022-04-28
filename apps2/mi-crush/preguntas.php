<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>
<!DOCTYPE html>
<html>
<head>

	<title>Planet Fitnnes</title>
	<link rel="icon" href="images/xd.png" />

	<style type="text/css">
		.xd{
			position: relative;
			top: 60%;
			left: 50%;
			transform: translate(-50%, 10%);

		}
		.contenedor{
			position: relative;
			display: inline-block;
			text-align: center;
		}

		
		.centrado{
			position: absolute;
			top: 30%;
			left: 18%;
			transform: translate(-50%, -50%);
		}
				nav.navbar {
    background-color: #3C3C3C;
    height: 100px;

}

 h1 { 
 	display:inline; 
 	font-size: 40px;

 }



	</style>
</head>
<body>

	<navbar class="navbar navbar-dark yellow lighten-0">
		    <div class="mx-auto order-0">

  <span class="navbar-brand" ><a href="#"> <h3 style="color: #6700D7"><strong><u>COVID-19 Preguntas Frecuentes</strong> </u></h3></a></span>
</div>
</navbar>
	<section>	

		<!--Navbar -->
		<nav class="mb-1 navbar navbar-expand-lg navbar-fixed-top navbar-dark ">

				<a class="navbar-brand" href="#"><img  class="xd" src="images/xd.png"width= "130" height="130"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
			aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
						
			<ul class="navbar-nav mr-auto">
				
				<li class="nav-item ">
					<a class="nav-link" href="#"><h4><strong>Encuentra un Club <br></strong></h4>
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="#"><h4><strong>Acerca de Planet Fitness</strong></h4>
						<span class="sr-only">(current)</span>
					</a>
				</li>
			</ul>
    <ul class="navbar-nav ml-auto ">
			
				<li class="nav-item">
					<a class="nav-link" href="#"><h4><i class="far fa-user"></i>Mi cuenta</h4></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><h4><img src="https://cdn.countryflags.com/thumbs/mexico/flag-800.png" width="20" height="15"></i>  Mexico</h4></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><h4><i class="fas fa-search"></i>Busqueda</h4></a>
				</li>
				<li>
				</li>
				<button class="btn  btn-yellow btn-lg my-sm-0" type="submit " > Inscribete</button> 
			</ul>
		</div>
	</nav>
</section>
<section>
	<!-- Jumbotron -->

	    <div class="contenedor">
    <img src="images/mm.jpg"width= "1263"height="250" alt="Entrenamiento físico ilimitadΩo desde $I5 al mes">
    


 
    	<br>


</div>

      </div>

      <div class="container my-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text p-5">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-5 mb-4 mb-md-0">

        <div class="view">
          <img src="https://mdbootstrap.com/img/illustrations/undraw_Group_chat_unwm.svg" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-7 mb-lg-0 mb-4">

        <!-- Form -->
        <form method="POST" action="com.php">

          <!-- Section heading -->
          <h3 class="font-weight-bold my-3">Hola ingresa tu Pregunta!!</h3>
          
          <p class="text-muted mb-4 pb-2">¿En qué momento me harán el cargo de mi mensualidad?</p>


          <div class="input-group">
            <input type="text" class="form-control" placeholder="Ingresa tu nombre" aria-label="Ingresa tu Pregunta" name="usuario"
              aria-describedby="button-addon2">
 
<br>
<br><br>


          <div class="input-group">
            <input type="text" class="form-control" placeholder="Ingresa tu Pregunta" aria-label="Ingresa tu Pregunta"  name="comentario"
              aria-describedby="button-addon2">
              
              <br>
<br><br>
            
<button type="submit" name="registrar"  class="btn aqua-gradient btn-block btn-rounded z-depth-1a"  >Enviar </button>         
         
        </form>
        <!-- Form -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
    </form>
  </section>
  <!--Section: Content-->


</div>
   <div class="container my-5 z-depth-1">
  <section class="dark-grey-text p-5">

<form class="login" method="post">
	<center><h1>Preguntas</h1> </center>
	<br>
	<br>
  <?php
  $sql = "SELECT * FROM comentario"; 
  $query = $cnnPDO -> prepare($sql); 
  $query -> execute(); 
  $results = $query -> fetchAll(PDO::FETCH_OBJ); 

  if($query -> rowCount() > 0)   { 
    foreach($results as $result) { 

      echo " 
      <div class='media border p-3'>
      <img src='images/avatar.png' alt='John Doe' class='mr-3 mt-3 rounded-circle' style='width:60px;'>
      <div class='media-body'>
        <h5> ".$result -> usuario." <small><i>Posted on  ".$result -> fecha."</i></small></h5>
        <p> ".$result -> comentario."</p>
      </div>
    </div>


      ";


    }
  }
  ?>
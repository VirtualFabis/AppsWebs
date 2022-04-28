<?php 

ob_start();

?>

<?php 

require_once 'cdn.html';

?>
<?php  
session_start();
if (!isset($_SESSION['email'])) {
	header('Location: sesion.php');
}elseif(isset($_SESSION['email'] )){
	include 'cnn.php';

	$sentencia = $cnnPDO->query("SELECT * FROM user ;");
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
		


}else{
	echo "Error en el sistema";
}



?>

<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
	
	<title>Divice</title>
	<link rel="icon" href="images/logo.png" />

</head>
<body>
	<style type="text/css">
		@media screen (max-width:1024px) and (min-width: 600px){

}

		html {
			min-height: 100%;
			position: relative;
		}
		body {
			margin: 0;
			margin-bottom: 40px;
		}
		footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 50px;

		}

</style>

	<nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient">

			<a class="navbar-brand" href="#"><img src="images/logo.png"width= "60" height="60"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
			aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" ><i class="fas fa-users"></i> Smmart Safe Home  <?php 

					echo "   <strong>Bienvenido ",  $_SESSION['nombre']," "  
					?>   </strong>
						<span class="sr-only">(current)</span>
					</a>
				</li>

			</ul>

			<ul class="navbar-nav ml-auto nav-flex-icons">

			
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light">
						<i class="fab fa-twitter"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light">
						<i class="fab fa-facebook"></i>
					</a>
				</li>
			
							<li><a href="settings.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Settings</button> </a></li>

			      <li><a href="cerrar.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Cerrar sesion</button> </a></li>

				
			</ul>
		</div>
	</nav>
	<br>
	<center>
		<h2>Registro de actividad</h2>
	</center>
	<br>

	<?php
					$sql = "SELECT * FROM actividad"; 
					$query = $cnnPDO -> prepare($sql); 
					$query -> execute(); 
					$results = $query -> fetchAll(PDO::FETCH_OBJ); 

					if($query -> rowCount() > 0)   { 
						foreach($results as $result) { 
							  

							echo " 

				<div class='container col-sm-8'>

					<div class='media border p-3'>
					<img src='images/f.png' alt='John Doe' class='mr-3 mt-3 rounded-circle' style='width:60px'>
					<div class='media-body'>
					<h6> Actividad reciente <small><i>Fecha del registro: ".$result -> fecha."
					</i></small></h5>
					<p> En linea y el numero del registro: ".$result -> id."</p>
				</div>
			</div>
		</div>

		";







							

							}
						}
						?>

	
<br>

<footer class="page-footer font-small aqua-gradient py-3">

  <!-- Footer Elements -->
  <div class="container">

    <div class="row">
      <div class="col-md-6 d-flex justify-content-start">
        <!-- Copyright -->
        <div class="footer-copyright text-center bg-transparent">© 2020 Copyright:
          <a href="#"> Fabis</a>
        </div>
        <!-- Copyright -->
      </div>
      <div class="col-md-6 d-flex justify-content-end">

        <ul class="list-unstyled d-flex mb-0">
          <li>
            <a class="mr-3" role="button" href="https://www.facebook.com/fabis.ibarra.71/"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a class="mr-3" role="button" href=""><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a class="" role="button"><i class="fab fa-youtube"></i></a>
          </li>
        </ul>
      </div>
    </div>

  </div>
  <!-- Footer Elements -->

</footer>
<!-- Footer -->
</body>
</html>
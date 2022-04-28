<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="icon" href="images/icono.png" />


</head>
<body>

	<section>	

		<!--Navbar -->
		<nav class="mb-1 navbar navbar-expand-lg navbar-dark  peach-gradient">

			<a class="navbar-brand" href="#"><img src="images/logo.png"width= "150" height="70"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
			aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
			
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
				<li class="nav-item">
				</li>

			</ul>
		</div>
	</nav>
</section>
<section> <center>
	<div class="col-sm-5 align: ">
		<br>
				<form method="POST" action="loginProceso2.php">

				<h2>Por tu Seguridad</h2>
		
		<!--Body-->
		<div class="modal-body mx-4">
			<!--Body-->
			<br>
			<p align="left" >Ingresa tu contraseña
			</p>
			<div class="md-form mb-5 " align="left">
				<i class="fas fa-lock prefix grey-text"></i>
				<input type="password" id="orangeForm-pass" class="form-control validate" name="password">
				<label data-error="wrong" data-success="right" for="orangeForm-pass">Contraseña</label>
			</div>



			<div class="text-center mb-3">
				<a href="index.php"><button type="submit"  name="iniciar" id="btn-one" class="btn peach-gradient btn-block btn-rounded z-depth-1a"  >Continuar</button></a>
			</div>
			
			<!--/.Content-->
		</div>
	</div>
	<!-- Modal -->
</center>
</form>
</section>


</body>
</html>
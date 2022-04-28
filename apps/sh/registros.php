<?php 
require_once 'db.php';

require_once 'cdn.html';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<link rel="icon" href="images/xd.png" />



	<style type="text/css">
		.columna {
			width:33%;
			float:left;
		}

		@media (max-width: 500px) {

			.columna {
				width:auto;
				float:none;
			}

		}
	</style>
</head>
<body>
	<section>	

		<!--Navbar -->
		<nav class="mb-1 navbar navbar-expand-lg navbar-dark  blue-gradient">

			<a class="navbar-brand" href="#"><img src="images/xd.png"width= "60" height="60"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
			aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" href="#"> <i class="fas fa-users"></i> Registros
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
				<li class="nav-item ">
					<a class="nav-link" href="index.php"> Salir
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
				</li>

			</ul>
		</div>
	</nav>
</section>
<section>

	<br>
	<?php
	$sql = "SELECT * FROM registros"; 
	$query = $cnnPDO -> prepare($sql); 
	$query -> execute(); 
	$results = $query -> fetchAll(PDO::FETCH_OBJ); 

	if($query -> rowCount() > 0)   { 
		foreach($results as $result) { 

			echo " 
			<div class='container'>
			<div class='columna'>
			<div class='row'>
			<div class='col-lg-10 '>

			<div class='card testimonial-card'>

			<div class='card-up indigo lighten-1'></div>


			<div class='avatar mx-auto white'>
			<img src='images/avatar.png' class='rounded-circle'
			alt='woman avatar' width='200' height='200'>
			</div>

			<div class='card-body'>

			<h5 class='card-title'><i class='fas fa-user-tie'></i> ".$result -> nombre. "  ".$result -> apellidos."</h5>
			<p> 
			<i class='far fa-envelope'></i> Email: ".$result -> correo."<br>
			<i class='fas fa-transgender'></i> Genero: ".$result -> genero."<br>
			<i class='far fa-calendar-alt'></i> Fecha de nacimiento: ".$result -> fecha."
			<i class='fas fa-key'></i> Contraseña: ".$result -> psw."
			</p>
			</div>
			</div>
			</div>

			</div>
			<br>
			</div>
			</div>


			";


		}
	}
	?>
	
</section>
</body>
</html>
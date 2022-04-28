<?php 

ob_start();
?>

<?php 
session_start();
?>

<?php 
include("php/conexion1.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title> Biblioteca </title>
	
	<!-- CSS -->
	<link rel="icon" href="images/logo.png" />


	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

	<!-- JavaScript -->

	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

</head>
<body>


	<nav class="navbar navbar-expand-lg bg-dark p-4"> 
		<ul>
			<i class="crimson-text pr-3 fab fa-playstation red-text fa-4x"></i>

			<span class="navbar-text white-text"> 

				<h3> EASTEAM </a>

					<?php 

					echo "<h4> <i class='far fa-user-circle'></i> Bienvenido ",  $_SESSION['nombre'] , "</h4>"



					?>


				</ul> 


				<form class="form-inline my-2 my-lg-0 ml-auto">


					<a href="logout.php"><font size=4><i class="fas fa-window-close"></i> Cerrar sesion</a>

					</nav>


					<br>
					<br>

					<div class="row">
						<div class="col-sm-4">
							<center>	
								<!-- Card -->
								<div class="card">

									<center>

										<!-- Card image -->
										<img src="images/rocket.jpg" width="344" height="165">

									</center>

									<!-- Card content -->
									<div class="card-body">

										<!-- Title -->
										<h3 class="card-title"><a>ROCKET LEAGUE</a></h3>
										<!-- Text -->
										<p class="card-text">EL MEJOR JUEGO DE FUTBOL EN CARROS</p>
										<!-- Button --><br>
										<a href="#" class="btn btn-primary">Jugar</a>

									</div>

								</div>
								<!-- Card -->	
							</center>	
						</div>	

						<!-- ********************************************* -->
						<div class="col-sm-4">
							<center>
								<div class="card">

									<center>


										<img src="images/spidey.jpg" width="344" height="165">

									</center>

									<div class="card-body">


										<h3 class="card-title"><a>SPIDERMAN PS4</a></h3>

										<p class="card-text">EL MAS RECIENTE JUEGO DEL SUPERHEROE FRANQUICIA DE MARVEL</p>

										<a href="#" class="btn btn-primary">Jugar</a>

									</div>
								</div>
							</center>	
						</div>	

						<!-- ********************************************* -->

						<div class="col-sm-4">
							<center>
								<div class="card">

									<center>



										<img src="images/gta.jpg" width="344" height="165">
									</center>

									<div class="card-body">


										<h3 class="card-title"><a>GTA V</a></h3>

										<p class="card-text">JUEGA EL MEJOR JUEGO EN MUNDO ABIERTA HASTA LA FECHA</p>

										<a href="#" class="btn btn-primary">Jugar</a>

									</div>
								</div>
							</center>	




						</div>
					</div>
				</div>
			</div>

			<br>
			<br>







			<div class="row">
				<div class="col-sm-4">
					<center>	
						<!-- Card -->
						<div class="card">

							<center>

								<!-- Card image -->
								<img src="images/geo.jpg" width="344" height="165">

							</center>

							<!-- Card content -->
							<div class="card-body">

								<!-- Title -->
								<h3 class="card-title"><a>GEOMETRY DASH</a></h3>
								<!-- Text -->
								<p class="card-text">DISFRUTA EL JUEGO MAS ADICTIVO Y DIFICIL JAMAS DESARROLLADO</p>
								<!-- Button -->
								<a href="#" class="btn btn-primary">Jugar</a>

							</div>

						</div>
						<!-- Card -->	
					</center>	
				</div>	

				<!-- ********************************************* -->
				<div class="col-sm-4">
					<center>
						<div class="card">

							<center>


								<img src="images/over.png" width="344" height="165">

							</center>

							<div class="card-body">


								<h3 class="card-title"><a>OVERWATCH</a></h3>

								<p class="card-text">DEMUESTRA TUS HABILIDADES Y ESTRATEGIAS COMO JUGADOR</p>

								<a href="#" class="btn btn-primary">Jugar</a>

							</div>
						</div>
					</center>	
				</div>	

				<!-- ********************************************* -->

				<div class="col-sm-4">
					<center>
						<div class="card">

							<center>



								<img src="images/fifa.jpg" width="344" height="165">
							</center>

							<div class="card-body">


								<h3 class="card-title"><a>FIFA 21</a></h3>

								<p class="card-text">DISFRUTA EL MEJOR JUEGO DE FUTBOL </p>
								<br>
								<a href="#" class="btn btn-primary">Jugar</a>

							</div>
						</div>
					</center>	

				</div>
			</div>
		</div>
	</div>

	<br>
	<br>

	<div class="row">
		<div class="col-sm-4">
			<center>	
				<!-- Card -->
				<div class="card">

					<center>

						<!-- Card image -->
						<img src="images/mine.png" width="344" height="165">

					</center>

					<!-- Card content -->
					<div class="card-body">

						<!-- Title -->
						<h3 class="card-title"><a>MINECRAFT</a></h3>
						<!-- Text -->
						<p class="card-text">EXPLOTA TU CREATIVIDAD CON ESTE JUEGO</p>
						<!-- Button --><br>
						<a href="#" class="btn btn-primary">Jugar</a>

					</div>

				</div>
				<!-- Card -->	
			</center>	
		</div>	

		<!-- ********************************************* -->
		<div class="col-sm-4">
			<center>
				<div class="card">

					<center>


						<img src="images/res.jpg" width="344" height="165">

					</center>

					<div class="card-body">


						<h3 class="card-title"><a>RESIDENT EVIL 4</a></h3>

						<p class="card-text">DIVIERTETE MATANDO ZOMBIES CON ESTE DIVERTIDO JUEGO.</p>

						<a href="#" class="btn btn-primary">Jugar</a>

					</div>
				</div>
			</center>	
		</div>	

		<!-- ********************************************* -->

		<div class="col-sm-4">
			<center>
				<div class="card">

					<center>



						<img src="images/callof.jpg" width="344" height="165">
					</center>

					<div class="card-body">


						<h3 class="card-title"><a>COD BLACK OPS ll</a></h3>

						<p class="card-text">JUEGA CON TUS AMIGOS AMIGOS ESTE DIVERTIDO JUEGO DE GUERRA</p>

						<a href="#" class="btn btn-primary">Jugar</a>

					</div>
				</div>
			</center>	

		</div>
	</div>
</div>
</div>
<br>
<center><h1>Videojuegpos Proximos a salir </h1></center>






	<br>
	<br>
	<div class="container">
		<div class="row">
		<div class="col-sm-4">
				<div class="card">
					<!-- Card image -->
						  <img src='vista.php?id=1' alt="Proximamente" width="344" height="165" /> 
						<!-- Card content -->
						<div class="card-body">

							<center></center><center><h3 class="card-title"><a>Proximamente</a></h3></center>


					<center><a href="#" class="btn btn-primary">Jugar</a></center>

						</div>
					</a>
				</div>
			</div>

			

		<div class="col-sm-4">
					<div class="card">
						<!-- Card image -->
							<center></center> <img src='vista.php?id=2' alt="Proximamente" width="344"  height="165" />

							<!-- Card content -->
							<div class="card-body">
								<center><h3 class="card-title">Proximamente</h3></center>


						<center><a href="#" class="btn btn-primary">Jugar</a></center>
							</div>
						</a>
					</div>
				</div>
		<div class="col-sm-4">
					<div class="card">
						<!-- Card image -->
						  <center> <img src='vista.php?id=3' alt="Proximamente" width="344" height="165"  /></center> 

							<!-- Card content -->
							<div class="card-body">

								<center><h3 class="card-title">Proximamente</h3></center>


							<center>	<a href="#" class="btn btn-primary">Jugar</a></center>

							</div>
						</a>
					</div>
				</div>
			</div>


	</body>
	</html>
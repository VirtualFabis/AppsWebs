<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Rocket</title>
	<link rel="icon" href="images/icono.png" />

	<style type="text/css">
		.contenedor{
			position: relative;
			display: inline-block;
			text-align: center;
		}

		
		.centrado{
			position: absolute;
			top: 73%;
			left: 30%;
			transform: translate(-50%, -50%);
		}
	</style>
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
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" href="clave.php"><i class="fas fa-users"></i> Usuarios de Rocket
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
				<li class="nav-item">
				</li>
				<li class="nav-item">
					<a class="nav-link" href="email.php"><i class="fas fa-user"></i></i>Inicia Sesión</a>
				</li>
				<li>
				</li>
				<li><a href="email.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Comienza ahora, es gartis</button> </a></li>
			</ul>
		</div>
	</nav>
</section>
<section>
	<!-- Jumbotron -->

	<div class="jumbotron p-0 border-0 ">
		<div class="view overlay rounded-top">
			<div class="contenedor">
				<img src="images/owo.png"width= "1343"height="560">
				
				<div class="centrado"><h2 style="color: #2E4053"><strong>Consulta tu buró de crédito GRATIS!!</h2>
					<br>
					<h3 style="color: #424949">Convertimos tu consulta de buró en asesoría personalizada <br>para alcanzar tu bienestar financiero.</strong></h3>
					<a  href="#"><button class="btn peach-gradient">Comienza ahora, es gartis</button></a>

				</div>
			</div>
			<div class="mask rgba-white-slight"></div>
		</div>
		<div class="card-body text-center mb-3">
			<div class="container">
				<div class="row">
					<div class="col-sm">
						<!-- Card -->
						<div class="card  border-0">

							<!-- Card image -->
							<div class="view overlay">
								<img class="card-img-top" src="images/1.png"
								alt="Card image cap">
								<a href="#!">
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>

							<!-- Card content -->
							<div class="card-body">
								<!-- Title -->
								<p class="card-text">"El seguimiento de Rocket.la va desde la perfilación hasta la aprobación del crédito."</p>

							</div>

						</div>
						<!-- Card -->
					</div>
					<div class="col-sm">
						<!-- Card -->
						<div class="card  border-0">

							<!-- Card image -->
							<div class="view overlay">
								<img class="card-img-top" src="images/2.png"
								alt="Card image cap">
								<a href="#!">
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>

							<!-- Card content -->
							<div class="card-body">
								<!-- Title -->
								<p class="card-text">"Esta startup promete tomar las mejores decisiones financieras por ti."</p>

							</div>

						</div>
						<!-- Card -->					</div>
						<div class="col-sm">
							<!-- Card -->
							<div class="card  border-0">

								<!-- Card image -->
								<div class="view overlay">
									<img class="card-img-top" src="images/3.png" 
									alt="Card image cap">
									<a href="#!">
										<div class="mask rgba-white-slight"></div>
									</a>
								</div>

								<!-- Card content -->
								<div class="card-body">
									<!-- Title -->
									<p class="card-text">"Rocket.la te encuentra el mejor crédito según tu perfil y requerimientos."</p>

								</div>

							</div>
							<!-- Card -->					</div>
							<div class="col-sm">
								<!-- Card -->
								<div class="card  border-0">

									<!-- Card image -->
									<div class="view overlay">
										<img class="card-img-top" src="images/4.png"
										alt="Card image cap">
										<a href="#!">
											<div class="mask rgba-white-slight"></div>
										</a>
									</div>

									<!-- Card content -->
									<div class="card-body">
										<!-- Title -->
										<p class="card-text">"La startup que ayuda a mejorar la experiencia de los servicios financieros."</p>

									</div>

								</div>
								<!-- Card -->					</div>
							</div>
						</div>
					</div>

				</div>
			</section>

		</body>
		</html>
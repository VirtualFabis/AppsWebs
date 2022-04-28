<?php 

require_once 'cdn.html';

include("php/conexion1.php");

?>

<?php
if (isset($_POST['registrar'])) 
{
	if (!empty($_POST['nombre']) && !empty($_POST['comentarios']))
	{
		mysqli_query($cnx,"INSERT into uwu (nombre, comentarios) values
			( '$_POST[nombre]',
			'$_POST[comentarios]')");


	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Saber</title>
	<link rel="icon" href="images/logo.png" />

	<style type="text/css">
		body{

		}
		section{
			margin-top: -14px;
		}
	</style>
</head>
<body>
	<section>	


		<form class="login" method="post">

			<!--Navbar -->
			<nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient">

				<a class="navbar-brand" href="#"><img src="images/logo.png"width= "60" height="60"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
				aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="#">Saber
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Aplicaciones Web orientada a servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> </a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto nav-flex-icons">
					<li class="nav-item">
						<a class="nav-link waves-effect waves-light">
						</a>
					</li>
					<li class="nav-item">
				
					</li>
					<li class="nav-item">
					</li>
					<li class="nav-item">

					</li>
					<li>
					</li>
					<li>

						<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header text-center">
									<h4 class="modal-title w-100 font-weight-bold">Envia tus comentarios</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="modal-body mx-3">
									<div class="md-form">
										<i class="fas fa-user prefix "></i>
										<input type="text"  name="nombre" id="form34" class="form-control validate">
										<label   data-error="wrong"   data-success="right" for="form34">Usuario</label>
									</div>



									<div class="md-form">
										<i class="fas fa-comment prefix "></i>
										<input type="text" name="comentarios" id="form30" class="form-control validate">
										<label  data-error="wrong" data-success="right" for="form8">Comentario</label>
									</div>

								</div>
								<div class="modal-footer d-flex justify-content-center">
									<button type="submit"  class="btn btn-unique aqua-gradient" name="registrar" >Enviar <i class="fas fa-paper-plane-o ml-1"></i></button>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="text-center">
					<a href="" class="btn btn-outline-white mb-4" data-toggle="modal" data-target="#modalContactForm">Envia tus comentarios</a>
				</div></li>
			</ul>
		</div>
	</nav>
</section>
<section>
	<!-- Jumbotron -->
	<div class="jumbotron p-0 border-0 ">
		<div class="view overlay rounded-top">
			
			<img src="images/mundo.png"width= "1343"height="450">

		</div>
		<div class="mask rgba-white-slight"></div>
	</div>
	<div class="card-body text-center mb-3">
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<!-- Card -->
					<div class="card  ">

						<!-- Card image -->
						<div class="view overlay">
							<img class="card-img-top" src="images/xd.png"
							alt="Card image cap">
							<a href="#!">
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>

						<!-- Card content -->
						<div class="card-body">
							<!-- Title -->
							<p class="card-text">"El saber 1 de la materia Aplicaciones Web orientada a servicos"</p>

							<a href="indice.php" class="btn btn-primary aqua-gradient">Ver mas</a>
						</div>

					</div>
					<!-- Card -->
				</div>
				<div class="col-sm">
					<!-- Card -->
					<div class="card  ">

						<!-- Card image -->
						<div class="view overlay">
							<img class="card-img-top" src="images/saber2.png" height="155" 
							alt="Card image cap">
							<a href="#!">
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>

						<!-- Card content -->
						<div class="card-body">
							<!-- Title -->
							<p class="card-text">"El saber de la materia Aplicaciones Web orientada a servicos"</p>

							<a href="indice2.php" class="btn btn-primary aqua-gradient">Ver mas</a>
						</div>

					</div>
					<!-- Card -->
				</div>

				<div class="col-sm">
					<!-- Card -->
					<div class="card">

						<!-- Card image -->
						<div class="view overlay">
							<img class="card-img-top" src="images/13.png" height="195" alt="Card image cap">
							<a href="#!">
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>

						<!-- Card content -->
						<div class="card-body">
							<!-- Title -->
							<p class="card-text">"Sobre el diseñador"</p>


							<a href="mi.php" class="btn btn-primary aqua-gradient">Ver mas</a>
						</div>

					</div>
					<!-- Card -->					</div>
	
						<div class="col-sm">
							<!-- Card -->
							<div class="card  ">

								<!-- Card image -->
								<div class="view overlay">
									<img class="card-img-top" src="images/c.png" height="195" 
									alt="Card image cap">
									<a href="#!">
										<div class="mask rgba-white-slight"></div>
									</a>
								</div>

								<!-- Card content -->
								<div class="card-body">
									<!-- Title -->
									<p class="card-text">"Mira los Comentarios"</p>

									<a href="comentarios.php" class="btn btn-primary aqua-gradient">Ver mas</a>

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
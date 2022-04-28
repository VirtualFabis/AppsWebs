<?php
ob_start() ;
?>

<?php

# Se creao una sesión
session_start();

# Se manda llamar el archivo de conexión
require_once 'php/conexion.php';


?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agenda</title>
	
	<!-- icono de la pagina -->
	<link rel="icon" href="images/icons/agenda.png">
	
	<!-- Mis CSS -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	
</head>

<body background="images/banner.jpg">
	<nav class="navbar navbar-inverse ">
		<div class="container-fluid ">
			<div class="navbar-header">
				<a class="navbar-brand" >web-Agenda Mis Contactos®</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a><font size=4><?php echo $_SESSION['nombre'] ?></a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="logout.php"><font size=4>Cerrar Sesión</a></li>
					</ul>
				</div>
			</nav> 


			<div class="container">

				<div class="row">


					<div class="col-md-12">
						<br><br><br> 	 	
						<table class="table table-hover table-condensed table-bordered">
							<tr>
								<td>Matrícula</td>
								<td>Nombre</td>
								<td>Celular</td>
								<td>Correo</td>
								<td>Ciudad</td>
								<td>Contacto</td>
							</tr>
							<?php
							$sql="SELECT * from agenda";
							$registro=mysqli_query($cnx,$sql);
							while($campo=mysqli_fetch_array($registro))
							{
								if ($campo['usuario']==$_SESSION['usuario'])
								{
									?>
									<tr class="small">
										<td><?php echo $campo['matricula'];?></td>
										<td><?php echo $campo['nombre'];?></td>
										<td><?php echo $campo['celular'];?></td>
										<td><?php echo $campo['correo'];?></td>
										<td><?php echo $campo['ciudad'];?></td>
										<td><?php echo $campo['usuario'];?></td>
									</tr>
									<?php
								}
							}
								?>
							</table>

						</div>	
					</div>

					<div class="row">
						<div class="col-md-12">
							<p align="center">Copyright © 2020 Master-db. Todos los derechos reservados. Desarrollado por el David Belmares// <a>BootStraps HTML5 + CSS3 + PHP</a> <a href="https://postparaprogramadores.com/libro-bootstraps/"></a></p>
						</div>
					</div>
				</div>

			</div>

		</body>
		</html>


		<?php
		ob_end_flush();
		?>					
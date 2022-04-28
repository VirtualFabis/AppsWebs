<?php
ob_start() ;
?>

<?php

# Se creao una sesión
session_start();

# Se manda llamar el archivo de conexión
require_once 'php/conexion1.php';


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
	
	<!-- MDB 4.19.0 -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

	<!-- JavaScrip -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
	
</head>

<body background="images/banner.jpg">
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient ">
		<a class="navbar-brand" href="#"><img src="images/mi.png " width= "200"height="50"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
		aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a><h2><FONT COLOR="blue"><?php echo $_SESSION['nombre'] ?></h2></a>

			
			</li>
		</ul>
		<ul class="navbar-nav ml-auto nav-flex-icons">
			<li class="nav-item">
				<a href="logout.php"><font size=4>Cerrar Sesión</a></li>
				</ul>
			</div>
		</nav>

		<div class="container">

			<div class="row">


				<div class="col-md-12">
					<br><br><br> 	 	
					<table class="table table-striped table-responsive-md btn-table">
						<tr>
							<td>Matrícula</td>
							<td>Nombre</td>
							<td>Celular</td>
							<td>Correo</td>
							<td>Ciudad</td>
							<td>Secion</td>
						</tr>
						<?php
						$sql="SELECT * from t_agenda";
						$registro=mysqli_query($cnx,$sql);
						while($campo=mysqli_fetch_array($registro))
						{

							?>
							<tr class="small">
								<td><?php echo $campo['matricula'];?></td>
								<td><?php echo $campo['nombre'];?></td>
								<td><?php echo $campo['celular'];?></td>
								<td><?php echo $campo['correo'];?></td>
								<td><?php echo $campo['ciudad'];?></td>
								<td><?php echo $campo['nombre'];?></td>
							</tr>
							<?php
						}
						?>
					</table>

				</div>	
			</div>


		</div>

	</div>

</body>
</html>


<?php
ob_end_flush();
?>					
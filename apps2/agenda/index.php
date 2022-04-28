
<?php
ob_start() ;
?>

<?php

# Se creao una sesión
session_start();
?>

<!-- Códigos de CONEXION -->

<?php
#include("php/conexion1.php");
require_once('php/conexion1.php');
?>

<!-- Códigos de REGISTRAR -->
<?php
if (isset($_POST['registrar'])) 
{
	if (!empty($_POST['matricula']) && !empty($_POST['celular']) && !empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['ciudad']))
	{
		mysqli_query($cnx,"INSERT into t_agenda values
			( '$_POST[matricula]',
			'$_POST[nombre]',
			'$_POST[celular]',
			'$_POST[email]',
			'$_POST[ciudad]')");


	}
}
?>

<!-- Códigos de BUSQUEDA -->
<?php
if (isset($_POST['buscar'])) 
{
	if (!empty($_POST['matricula'])|| $_POST['matricula']!="Ingresa Matricula")
	{
		$sql="SELECT * from t_agenda where matricula='$_POST[matricula]'";
		$registro=mysqli_query($cnx,$sql);
		$campo=mysqli_fetch_array($registro);
	}
}
?>

<!-- Códigos de ELIMINAR -->
<?php
if (isset($_POST['eliminar'])) 
{
	if (!empty($_POST['matricula']))
	{
		$sql="DELETE from t_agenda where matricula='$_POST[matricula]'";
		$registro=mysqli_query($cnx,$sql);
		header("location:index.php");
	}
}
?>

<!-- Códigos de ACTUALIZAR -->
<?php
if (isset($_POST['actualizar'])) 
{
	if (!empty($_POST['matricula']))
	{
		mysqli_query($cnx,"UPDATE t_agenda set
			matricula='$_POST[matricula]',
			nombre='$_POST[nombre]',
			celular='$_POST[celular]',
			correo='$_POST[email]',
			ciudad='$_POST[ciudad]'
			where matricula='$_POST[matricula]'");
	}
}
?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agenda</title>
	
	<!-- icono de la pagina -->
	<link rel="icon" href="images/icons/agenda.png">
	
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

<body>
	<div align="center">
		<img src="images/agenda.png" >
	</div>
	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<form class="login" method="post">

					<h1 class="login-title"><i class="fas fa-list-ul fa-flip-horizontal"></i> Alumnos</h1>

					<!-- Material input -->
					<div class="md-form">
						<i class="fas fa-fingerprint prefix"></i>
						<input type="text" id="inputValidationEx" class="form-control validate" name = "matricula" value="<?php if (isset($_POST['buscar'])) echo $campo['matricula']?>">
						<label for="inputValidationEx" data-error="wrong" data-success="right">Matricula</label>
					</div> 

					<!-- Material input -->
					<div class="md-form">
						<i class="fas fa-user prefix"></i>
						<input type="text" id="inputValidationEx" class="form-control validate" name = "nombre" value="<?php if (isset($_POST['buscar'])) echo $campo['nombre']?>">
						<label for="inputValidationEx" data-error="wrong" data-success="right">Nombre completo</label>
					</div>

					<!-- Material input -->
					<div class="md-form">
						<i class="fas fa-mobile prefix"></i>
						<input type="text" id="inputValidationEx" class="form-control validate" name = "celular" value="<?php if (isset($_POST['buscar'])) echo $campo['celular']?>">
						<label for="inputValidationEx" data-error="wrong" data-success="right">Celular</label>
					</div>

					<!-- Material input -->
					<div class="md-form">
						<i class="fas fa-envelope prefix"></i>
						<input type="email" id="inputValidationEx" class="form-control validate" name = "email" value="<?php if (isset($_POST['buscar'])) echo $campo['correo']?>">
						<label for="inputValidationEx" data-error="wrong" data-success="right">Correo</label>
					</div>

					<!-- Material input -->
					<div class="md-form">
						<i class="fas fa-globe-americas prefix"></i>
						<input type="text" id="inputValidationEx" class="form-control validate" name = "ciudad" value="<?php if (isset($_POST['buscar'])) echo $campo['ciudad']?>">
						<label for="inputValidationEx" data-error="wrong" data-success="right">Ciudad</label>
					</div>

					<button type="submit" class="btn-floating btn-lg btn-default aqua-gradient" name="registrar"><i class="fas fa-plus"></i></button>

					<button type="submit" class="btn-floating btn-lg btn-default aqua-gradient" name="eliminar"><i class="far fa-trash-alt"></i></button>

					<button type="submit" class="btn-floating btn-lg btn-default aqua-gradient" name="buscar"><i class="fas fa-search"></i></i></button>

					<button type="submit"class="btn-floating btn-lg btn-default aqua-gradient" name="actualizar"><i class="fas fa-retweet"></i></button>


				</form>
			</div>

			<div class="col-md-8">


				<a><font size=4><?php echo "<h4><i class='far fa-user-circle'></i> Bienvenido ", $_SESSION['nombre'] , "</h4>"?></a>
					<a href="logout.php"><font size=4><i class="fas fa-window-close"></i> Cerrar sesion</a>

						<br>					
						
						<table class="table table-striped table-responsive-md btn-table">

							<thead>
								<tr>
									<th>Matricula</th>
									<th>Nombre</th>
									<th>Celular</th>
									<th>Correo</th>
									<th>Ciudad</th>
								</tr>
							</thead>
							<?php
							$sql="SELECT * from t_agenda";
							$registro=mysqli_query($cnx,$sql);
							while($campo=mysqli_fetch_array($registro))
							{
								?>
								<tbody>
									<tr class="small">
										<td><?php echo $campo['matricula'];?></td>
										<td><?php echo $campo['nombre'];?></td>
										<td><?php echo $campo['celular'];?></td>
										<td><?php echo $campo['correo'];?></td>
										<td><?php echo $campo['ciudad'];?></td>
									</tr>
									<?php
								}
								?>
							</tbody>
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
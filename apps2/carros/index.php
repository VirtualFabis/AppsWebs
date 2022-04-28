<?php
#include("php/conexion1.php");
require_once('php/conexion1.php');
?>

<!-- Códigos de REGISTRAR -->
<?php
if (isset($_POST['registrar'])) 
{
	if (!empty($_POST['correo']) && !empty($_POST['celular']) && !empty($_POST['nombre']) && !empty($_POST['genero']) && !empty($_POST['codigo_postal']) && !empty($_POST['auto']))
	{
		mysqli_query($cnx,"INSERT into carros values
			( '$_POST[correo]',
			'$_POST[nombre]',
			'$_POST[celular]',
			'$_POST[genero]',
			'$_POST[codigo_postal]',
			'$_POST[auto]')");


	}
}
?>

<!-- Códigos de BUSQUEDA -->
<?php
if (isset($_POST['buscar'])) 
{
	if (!empty($_POST['correo'])|| $_POST['correo']!="Ingresa el correo")
	{
		$sql="SELECT * from carros where correo='$_POST[correo]'";
		$registro=mysqli_query($cnx,$sql);
		$campo=mysqli_fetch_array($registro);
	}
}
?>

<!-- Códigos de ELIMINAR -->
<?php
if (isset($_POST['eliminar'])) 
{
	if (!empty($_POST['correo']))
	{
		$sql="DELETE from carros where correo='$_POST[correo]'";
		$registro=mysqli_query($cnx,$sql);
		header("location:index.php");
	}
}
?>

<!-- Códigos de ACTUALIZAR -->
<?php
if (isset($_POST['actualizar'])) 
{
	if (!empty($_POST['correo']))
	{
		mysqli_query($cnx,"UPDATE carros set
			correo='$_POST[correo]',
			nombre='$_POST[nombre]',
			celular='$_POST[celular]',
			genero='$_POST[genero]',
			codigo_postal='$_POST[codigo_postal]',
			auto='$_POST[auto]'
			where correo='$_POST[correo]'");
	}
}
?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Seguro uvu</title>
	
	<!-- icono de la pagina -->
	
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
	<section>	

		<!--Navbar -->
		   <nav class="mb-1 navbar navbar-expand-lg navbar-dark  blue-gradient">
			<a class="navbar-brand" href="#"><img src="images/uwu.png"width= "35"height="35"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
			aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" href="#">Personas
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">El mejor seguro de comprador de autos </a>
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
					<a class="nav-link" href="#">Shop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-satellite"></i>Travel to Mexico</a>
				</li>
				<li>
					<input class="form-control" type="search" placeholder="Search" aria-label="Search"> </li>
					<li><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Buscar <i class="fas fa-search"></i></button> </li>
				</ul>
			</div>
		</nav>
	</section>


	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<form class="login" method="post">

					<h3 class="login-title"><i class="fas fa-list-ul fa-flip-horizontal"></i> Registra tus datos</h3>

				<!-- Material input -->
					<div class="md-form">
						<i class="fas fa-envelope prefix"></i>
						<input type="email" id="inputValidationEx" class="form-control validate" name = "correo" value="<?php if (isset($_POST['buscar'])) echo $campo['correo']?>">
						<label for="inputValidationEx" data-error="wrong" data-success="right">Correo</label>
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
						<i class="fas fa-mercury prefix"></i>
						<input type="text" id="inputValidationEx" class="form-control validate" name = "genero" value="<?php if (isset($_POST['buscar'])) echo $campo['genero']?>">
						<label for="inputValidationEx" data-error="wrong" data-success="right">Genero</label>
					</div> 

					<!-- Material input -->
					<div class="md-form">
						<i class="fas fa-globe-americas prefix"></i>
						<input type="text" id="inputValidationEx" class="form-control validate" name = "codigo_postal" value="<?php if (isset($_POST['buscar'])) echo $campo['codigo_postal']?>">
						<label for="inputValidationEx" data-error="wrong" data-success="right">Codigo postal</label>
					</div>

					<div class="md-form">
						<i class="fas fa-car-crash prefix"></i>
						<input type="text" id="inputValidationEx" class="form-control validate" name = "auto" value="<?php if (isset($_POST['buscar'])) echo $campo['auto']?>">
						<label for="inputValidationEx" data-error="wrong" data-success="right">Ingresa tu auto</label>
					</div>

					<button type="submit" class="btn-floating btn-lg btn-default aqua-gradient" name="registrar"><i class="fas fa-plus"></i></button>

					<button type="submit" class="btn-floating btn-lg btn-default aqua-gradient" name="eliminar"><i class="far fa-trash-alt"></i></button>

					<button type="submit" class="btn-floating btn-lg btn-default aqua-gradient" name="buscar"><i class="fas fa-search"></i></i></button>

					<button type="submit"class="btn-floating btn-lg btn-default aqua-gradient" name="actualizar"><i class="fas fa-retweet"></i></button>


				</form>
			</div>
			



			<div class="col-md-8">



				<br>					

				<table class="table table-striped table-responsive-md btn-table">

					<thead>
						<tr>
							<th>Correo</th>
							<th>Nombre</th>
							<th>Celular</th>
							<th>Genero</th>
							<th>Codigo postal</th>
							<th>Auto</th>
						</tr>
					</thead>
					<?php
					$sql="SELECT * from carros";
					$registro=mysqli_query($cnx,$sql);
					while($campo=mysqli_fetch_array($registro))
					{
						?>
						<tbody>
							<tr class="small">
								<td><?php echo $campo['correo'];?></td>
								<td><?php echo $campo['nombre'];?></td>
								<td><?php echo $campo['celular'];?></td>
								<td><?php echo $campo['genero'];?></td>
								<td><?php echo $campo['codigo_postal'];?></td>
								<td><?php echo $campo['auto'];?></td>
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
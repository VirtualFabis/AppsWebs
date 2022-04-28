
<!-- Códigos de CONEXION -->
<?php
include("php/conexion1.php");
	//require_once('php/conexio.php');
?>

<!-- Códigos de REGISTRAR -->
<?php
if (isset($_POST['registrar'])) 
{
	if (!empty($_POST['tarjeta']) && !empty($_POST['nombre'])  && !empty($_POST['fecha'])  && !empty($_POST['cvc']))
	{
		mysqli_query($cnx,"INSERT into agenda values
			( '$_POST[tarjeta]',
			'$_POST[nombre]',
			'$_POST[fecha]',
			'$_POST[cvc]' )");

		
	}
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Paganos</title>
	
	<!-- icono de la pagina -->
	<link rel="icon" href="images/logo.png" />
	
	<!-- Mis CSS -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

</head>

<body>
	<div align="">
		<nav class="navbar navbar-dark primary-color">
			<a class="navbar-brand"><font color="black"><center><h1>Ingresa datos de tu tarjeta</font><h1><center></a>
			</nav>
		</nav>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<form class="login" method="post">
					<h1 class="login-title"><span class="glyphicon glyphicon-tasks"></span>Pago</h1>


					<div class="row">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-send"></i></span><input type="text" class="form-control input-lg" placeholder="Número de crédito" autofocus name="tarjeta" value="<?php if (isset($_POST['buscar'])) echo $campo['tarjeta']?>"></div></div>
							<br>

							<div class="row">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="text" class="form-control input-lg" placeholder="Nombre" autofocus name="nombre" value="<?php if (isset($_POST['buscar'])) echo $campo['nombre']?>"></div></div>
									<br>

									<div class="row">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span><input type="text" class="form-control input-lg" placeholder="Fecha" autofocus name="fecha" value="<?php if (isset($_POST['buscar'])) echo $campo['fecha']?>"></div></div>
											<br>

											<div class="row">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="text" class="form-control input-lg" placeholder="CVC" name="cvc" value="<?php if (isset($_POST['buscar'])) echo $campo['cvc']?>"></div></div>
													<br>

                    									
													
													<button type="submit" class="btn btn-primary btn-lg btn-warning "  name="registrar"><a href="compra.php"> Confirmar compra</button></a>
												
													<br><br>


													
												</form>
											</div>



										</div>	
									</div>

									<div class="row">
										<div class="col-md-12">
											<p align="center"><font color="black">Copyright © 2020 Master-db. Todos los derechos reservados. Desarrollado por EASTEAM
											</div>
										</div>

									</div>

								</body>
								</html>

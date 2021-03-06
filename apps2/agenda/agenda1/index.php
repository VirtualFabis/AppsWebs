<?php
ob_start() ;
?>

<?php

# Se creao una sesión
session_start();

# Se manda llamar el archivo de conexión
require_once 'php/conexion.php';

# Se verifica si se presiona el botón llamado iniciar-sesion
if (isset($_POST['iniciar-session']))
{
	# Se guarda el contendio de las cajas de texto en las variables $us y $ps
	$us=$_POST['usuario'];
	$ps=$_POST['password'];
	
	# Se valida que las variables no esten vacias o nulas
	if (!empty($us) &&  !empty($ps))
	{
		# Query de consulta
		$query = "SELECT * from usuarios WHERE username='".$us."' AND password='".$ps."'";

		# Asigna el registro del Query
		$registro=mysqli_query($cnx,$query);

		# Asigna los datos del registro a la variable $campo
		$campo=mysqli_fetch_array($registro);

		# Cuenta la cantidad de registros del Query
		$count=mysqli_num_rows($registro);

		# Valida que la variable count tenga un valor
		if($count)	
		{	
			if ($campo['username']=="admin" AND $campo['password'] == $ps)
			{
				$_SESSION['nombre'] = $campo['name'];
				header("location:vista_admin.php");	
			}
			else
			{
				$_SESSION['nombre'] = $campo['name'];
				$_SESSION['usuario'] = $campo['username'];
				header("location:vista_usuario.php");	
			}	
		} 
		else
		{
			echo "<div class='alert alert-danger'>
			<strong><h4>Ha surgido un Error<br>Verifica las credenciales de Acceso!</strong></div>";
		}
		
	}
}
?>

<html>
<head>
	<title>Agenda</title>

	<!-- icono de la pagina -->
	<link rel="icon" href="images/icons/agenda.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<script src="js/bootstrap.min.js" ></script>

</head>

<body background="images/banner.jpg">
	<nav class="navbar navbar-inverse ">
		<div class="container-fluid ">
			<div class="navbar-header">
				<a class="navbar-brand" >web-Agenda Mis Contactos®</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a><font size=4>Almacena tus Contactos en la Web</a></li>
				</ul>
			</div>
		</nav> 

		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title"> --My Agenda--  Iniciar Sesi&oacute;n</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="recupera.php">¿Se te olvid&oacute; tu contraseña?</a></div>
					</div>     

					<div style="padding-top:30px" class="panel-body" >

						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="Usuario">                                        
							</div>

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="password" placeholder="Password">
							</div>

							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button name="iniciar-session" id="btn-login" type="submit" class="btn btn-success">Iniciar Sesi&oacute;n</a>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12 control">
										<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
											No tiene una cuenta! <a href="registro.php">Registrate aquí</a>
										</div>
									</div>
								</div>    
							</form>
						</div>                     
					</div>  
				</div>
			</div>
		</body>
		</html>	
		<?php
		ob_end_flush();
		?>					
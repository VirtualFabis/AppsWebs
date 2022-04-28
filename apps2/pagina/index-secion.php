<?php
ob_start() ;
?>

<?php

# Se creao una sesión
session_start();

# Se manda llamar el archivo de conexión
include("php/conexion1.php");


# Se verifica si se presiona el botón llamado iniciar-sesion
if (isset($_POST['iniciar']))
{
	# Se guarda el contendio de las cajas de texto en las variables $us y $ps
	$us=$_POST['user'];
	$ps=$_POST['pass'];
	
	# Se valida que las variables no esten vacias o nulas
	if (!empty($us) &&  !empty($ps))
	{
		# Query de consulta
		$query = "SELECT * from usuarios WHERE usuario='".$us."' AND contrasena='".$ps."'";

		# Asigna el registro del Query
		$registro=mysqli_query($cnx,$query);

		# Asigna los datos del registro a la variable $campo
		$campo=mysqli_fetch_array($registro);

		# Cuenta la cantidad de registros del Query
		$count=mysqli_num_rows($registro);

		# Valida que la variable count tenga un valor
		if($count)	
		{	
			if ($campo['usuario']=="admin" AND $campo['contrasena'] == $ps)
			{
				$_SESSION['nombre'] = $campo['nombre'];
				header("location:admin.php");
			}
			else
			{
				$_SESSION['nombre'] = $campo['nombre'];
				$_SESSION['usuario'] = $campo['usuario'];
				header("location:juegos.php");	
			}	
			
		} 
		else	{	

			$message = "Error! Verifica  tu  Usuario o Contraseña";
			echo "<script type='text/javascript' >alert('$message');</script>";


		}

	}
}   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inico de sesion</title>
	<!-- icono de la pagina -->
  <link rel="icon" href="images/logo.png" />
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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<style type="text/css">
		body{
			margin-left: -10px;
			margin-top: -10px;
			margin-right: -20px;
			margin-bottom: -10px;
		}
		html {
			overflow: hidden;
		}
	}
	section{
		margin-top: -5px;
	}

</style>
</head>

<body>
	<section>
		<nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient ">
			
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Bienvenido EA Access
						<span class="sr-only">(current)</span>
					</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto nav-flex-icons">


				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href="index.php" >
						Regresar al inicio
					</a>
				</li>


				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user"></i>
				
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-default"
				aria-labelledby="navbarDropdownMenuLink-333">

			</div>
		</li>
	</ul>
</div>
</nav>
<!--/.Navbar -->
</section>

<section>
	<form class="login" method="post"  action="<?php $_SERVER['PHP_SELF'] ?>"> 

		<div class="row">
			<div class="col-sm-4">
				<img src="images/league.jpg " width= "400"height="615">
			</div>
			<div class="col-sm-6">

				<section><center><h2 style="color:  #0042ff "> Iniciar Sesion <br>  Registrarse </h2></center></section>



				<!-- Nav tabs -->
				<br>
				<ul class="nav nav-tabs md-tabs tabs-2 btn-link darken-2 aling-center" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
						Inicia sesion</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#panel8" role="tab" ><i class="fas fa-user-plus mr-1" ></i>
						Registrate</a>
					</li>
				</ul>

				<!-- Tab panels -->
				<div class="tab-content">
					<!--Panel 7-->
					<div class="tab-pane fade in show active" id="panel7" role="tabpanel">

						<!--Body-->
						<div class="modal-body mb-1">
							<div class="md-form form-sm mb-5">
								<i class="fas fa-user prefix"></i>
								<input type="text" id="modalLRInput10"  name ="user"  class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput10">NickName</label>
							</div>

							<div class="md-form form-sm mb-4">
								<i class="fas fa-lock prefix"></i>
								<input type="password" id="modalLRInput11"   name ="pass" class="form-control form-control-sm validate">
								<label data-error="wrong" data-success="right" for="modalLRInput11">Contraseña </label>
							</div>
							<div class="text-center mt-2">
								<button type="submit"  name="iniciar" class="btn btn-info" > Inicia sesion <i class="fas fa-sign-in ml-1"></i></button>

							</div>
						</div>
					</div>



					<?php
					if (isset($_POST['registrar'])) 
					{
						if (!empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['contrasena']))
						{
							mysqli_query($cnx,"INSERT into usuarios values
								( '$_POST[nombre]',
								'$_POST[usuario]',
								'$_POST[email]',
								'$_POST[contrasena]')");
						}
					}
					?>
					<!--Panel 8-->
					<div class="tab-pane fade" id="panel8" role="tabpanel">

						<!--Body-->
						<div class="modal-body">
							<div class="md-form form-sm mb-5">
								<i class="fas fa-male prefix"></i>
								<input type="text" id="modalLRInput12" name="nombre" class="form-control form-control-sm validate"  > 
								<label data-error="wrong" data-success="right" for="modalLRInput12">Nombre </label>
							</div>

							<div class="md-form form-sm mb-5">
								<i class="fas fa-user prefix"></i>
								<input type="text" id="modalLRInput13"  name="usuario" class="form-control form-control-sm validate" >
								<label data-error="wrong" data-success="right" for="modalLRInput13">NickName</label>
							</div>

							<div class="md-form mb-5">
								<i class="fas fa-envelope prefix"></i>
								<input type="email" id="orangeForm-email"  name="email" class="form-control validate">
								<label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
							</div>

							<div class="md-form form-sm mb-4">
								<i class="fas fa-lock prefix"></i>
								<input type="password" id="modalLRInput14" name="contrasena" class="form-control form-control-sm validate" >
								<label data-error="wrong" data-success="right" for="modalLRInput14">Contraseña</label>
							</div>

							<div class="text-center form-sm mt-2">
								<button  type="submit" name="registrar" class="btn btn-info"  >Registrate <i class="fas fa-sign-in ml-1"></i></button>
							</div>

						</div>
						<!--Footer-->

					</div>
					<!--/.Panel 8-->
				</div>

			</div>
		</div>
		<!--/.Content-->
	</div>
</div>
</form>
</div>

</div>
</div>
</section>
</body>
</html>
<?php
ob_end_flush();
?>
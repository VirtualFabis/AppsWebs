<?php 

ob_start();

?>

<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>

<?php  
session_start();
if (!isset($_SESSION['email'])) {
	header('Location: email.php');
}elseif(isset($_SESSION['email'] )){
	include 'cnn.php';

	$sentencia = $cnnPDO->query("SELECT * FROM xd;");
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);


}else{
	echo "Error en el sistema";
}



?>

<?php 

//se verifica si se presiona el botón llamado validar
if (isset($_POST['eliminar']))
{
	//se guarda en las variables$us y $ps
	$email=$_SESSION['email'];
	
	//Query de consulta
	$query = $cnnPDO->prepare('DELETE from xd WHERE email =:email');

	//Manejo de parámetros
	$query->bindParam(':email', $email);

	//Execución del query
	$query->execute(); 

	session_start();
	session_destroy();
	
	header('Location: index.php');

}

?>
<?php
     //Valida que el usuario hizo clik en el Boton 
if (isset($_POST['actualizar'])) 
{
    //Trae datos del formulario
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$celular=$_POST['celular'];
	$ingreso=$_POST['ingreso'];
	$password=$_POST['password'];

        //Validar que las cajas no esten vacias
	if (!empty($nombre) && !empty($email) && !empty($celular) && !empty($ingreso) && !empty($password))
	{
               //Actualizamod los datos en la tabla de la db  
		$sql = $cnnPDO->prepare(
			'UPDATE xd SET nombre = :nombre, email = :email, celular = :celular, ingreso = :ingreso, password = :password WHERE email = :email'
		);

              //Asignar las variables a los campos de la tabla
		$sql->bindParam(':nombre',$nombre);
		$sql->bindParam(':email',$email);
		$sql->bindParam(':celular',$celular);
		$sql->bindParam(':ingreso',$ingreso);
		$sql->bindParam(':password',$password);

              //Ejecutar la variable $sql
		$sql->execute();
		unset($sql);
		unset($cnnPDO);
		session_start();
		session_destroy();
		header('Location: email.php');

	}
           // header("location:index.php"); 
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Rocket</title>
	<link rel="icon" href="images/icono.png" />
	<style>

		html,
		body,
		header,
		.view {
			height: 100%;
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
					<a class="nav-link" href="#"><?php 

					echo " <h5> <i class='far fa-user-circle'></i> Bienvenido ",  $_SESSION['nombre'],"</h5> "  
					?>
					<span class="sr-only"></span>
				</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto nav-flex-icons">
			<li class="nav-item">
				<a class="nav-link waves-effect waves-light">
					<i class="fab fa-twitter" ></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link waves-effect waves-light">
					<i class="fab fa-facebook"></i>
				</a>
			</li>
			<li class="nav-item">
			</li>
			
			<li>
			</li>
			<li><a href="cerrar.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Cerrar sesion</button> </a></li>
		</ul>
	</div>
</nav>
</section>

<!-- Main navigation -->
<header>

	<!-- Full Page Intro -->
	<div class="view grey lighten-3">
		<!-- Mask & flexbox options-->
		<div class="mask">
			<!-- Content -->
			<div class="container h-100">
				<!--Grid row-->
				<div class="row align-items-center h-70">
					<!--Grid column-->
					<div class="col-md-5">
						<h1 class="mb-4"><span class="text-warning">Tu informacion esta protegiada con rocket!!</span>
							<br><br>
							<span class="cyan-text"></span>Tus datos de tu cuenta:</h1>
							<div class="media border p-3">
								<img src="images/avatar.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
								<div class="media-body">
									<h5 style="font-weight: bold"><?php echo $_SESSION['nombre'];?> </h5>
									<h5><small><i>Email: <?php echo $_SESSION['email'];?></i></small><br></h5>
									<h5><small><i>Phone: <?php echo $_SESSION['celular'];?></i></small><br></h5>
									<h5><small><i>Monthly income: <?php echo $_SESSION['ingreso'];?></i></small><br></h5>
									<h5><small><i>Password: <?php echo $_SESSION['password'];?></i></small></h5>
								</div>
							</div>
							<form class="login" method="post">
								<br>
								<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
								aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header text-center">
											<h5 class="modal-title w-100 font-weight-bold">Ten en cuenta que tus datos se van a actualizar cuando vuelvas a iniciar sesion!</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body mx-3">
											<div class="md-form mb-5" align="left">
												<i class="fas fa-envelope prefix grey-text "></i>
												<input type="email" id="orangeForm-email" class="form-control validate" name="email"value="<?php echo $_SESSION['email']?>">
												<label data-error="wrong" data-success="right" for="orangeForm-email">Correo electronico</label>
											</div>
											<div class="md-form mb-5 " align="left">
												<i class="fas fa-user prefix grey-text"></i>
												<input type="text" id="inputValidationEx" class="form-control validate"  name="nombre"value="<?php echo $_SESSION['nombre']?>">
												<label for="inputValidationEx" data-error="wrong" data-success="right">Nombre completo</label>
											</div>
											
											<div class="md-form mb-5 " align="left">
												<i class="fas fa-mobile prefix grey-text"></i>
												<input type="text" id="inputValidationEx" class="form-control validate" name = "celular" value="<?php echo $_SESSION['celular']?>">
												<label for="inputValidationEx" data-error="wrong" data-success="right">Celular</label>
											</div>


											<div class="md-form mb-5 " align="left">
												<i class="far fa-credit-card prefix grey-text"></i>
												<input type="text" id="inputValidationEx" class="form-control validate" name="ingreso" value="<?php echo $_SESSION['ingreso']?>">
												<label for="inputValidationEx" data-error="wrong" data-success="right">Ingreso mensual </label>
											</div>

											<div class="md-form mb-4" align="left">
												<i class="fas fa-lock prefix grey-text "></i>
												<input type="password" id="orangeForm-pass" class="form-control validate" name="password" value="<?php echo $_SESSION['password']?>">
												<label data-error="wrong" data-success="right" for="orangeForm-pass">Contraseña</label>
											</div>

											<div class="text-center mb-3">
												<button type="submit" name="actualizar" id="btn-one" class="btn peach-gradient btn-block btn-rounded z-depth-1a"  >Actualizar</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="text-center">
								<a href="" class="btn btn-dark btn-md  " data-toggle="modal" data-target="#modalLoginForm">Modifca los datos de tu cuenta</a>
							</div>
							<center>

								<!-- Button trigger modal -->
								<button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#basicExampleModal">
									Elimina tu cuenta
								</button>

								<!-- Modal -->
								<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
								aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Eliminar tu cuenta</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											Estas a punto de eliminar tu cuenta de rocket.li, si haces esto perderas todos tus datos..
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-indigo" data-dismiss="modal">Cancelar</button>
											<button type="submit"  name="eliminar" class="btn btn-danger">Eliminar cuenta</button>
										</div>
									</div>
								</div>
							</div>								
						</div>
						<!--Grid column-->

					</center>
					<!--Grid column-->
					<div class="col-md-6">
						<img src="https://mdbootstrap.com/img/illustrations/hiker-man-colour.svg" alt="" class="img-fluid" width="500" height="300">
					</div>
					<!--Grid column-->
				</div>
				<!--Grid row-->
			</div>
			<!-- Content -->
		</div>
		<!-- Mask & flexbox options-->
	</div>
	<!-- Full Page Intro -->

</header>
<!-- Main navigation -->
</form>
</body>
</html>
<?php
ob_end_flush();
?>
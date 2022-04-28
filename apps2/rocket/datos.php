<?php
ob_start() ;
?>
<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>

<?php
     //Valida que el usuario hizo clik en el Boton 
if (isset($_POST['registrar'])) 
{
    //Trae datos del formulario
	$email=$_POST['email'];
	$nombre=$_POST['nombre'];
	$celular=$_POST['celular'];
	$ingreso=$_POST['ingreso'];
	$password=$_POST['password'];

        //Validar que las cajas no esten vacias
	if (!empty($email) && !empty($nombre) && !empty($celular) && !empty($ingreso) && !empty($password))
	{
              //Insertar datos en la tabla de la db  
		$sql=$cnnPDO->prepare("INSERT INTO xd
			(email, nombre, celular, ingreso, password) VALUES (:email, :nombre, :celular, :ingreso, :password)");

              //Asignar las variables a los campos de la tabla
		$sql->bindParam(':email',$email);
		$sql->bindParam(':nombre',$nombre);
		$sql->bindParam(':celular',$celular);
		$sql->bindParam(':ingreso',$ingreso);
		$sql->bindParam(':password',$password);

              //Ejecutar la variable $sql
		$sql->execute();
		unset($sql);
		unset($cnnPDO);
		            header("location:principal.php"); 

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="icon" href="images/icono.png" />


</head>
<body>
	<form class="login" method="post">

		<section>	

			<!--Navbar -->
			<nav class="mb-1 navbar navbar-expand-lg navbar-dark  peach-gradient">

				<a class="navbar-brand" href="#"><img src="images/logo.png"width= "150" height="70"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
				aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent-333">

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

				</ul>
			</div>
		</nav>
	</section>
	<section> <center>
		<div class="col-sm-5 align: ">
			<br>

			<h2>Queremos conocerte</h2>
			<H3>Sólo te pedimos la información mínima para poder consultar tu buró. ¡No te preocupes! Tus datos siempre estarán protegidos.
			</H3>
			<!--Body-->
			<div class="modal-body mx-4">
				<!--Body-->
				<br>
				<p align="left" >Ingresa sus datos
				</p>
				<div class="md-form mb-5" align="left">
					<i class="fas fa-envelope prefix grey-text "></i>
					<input type="email" id="orangeForm-email" class="form-control validate" name="email">
					<label data-error="wrong" data-success="right" for="orangeForm-email">Correo electronico</label>
				</div>
				<div class="md-form mb-5 " align="left">
					<i class="fas fa-user prefix grey-text"></i>
					<input type="text" id="inputValidationEx" class="form-control validate"  name="nombre">
					<label for="inputValidationEx" data-error="wrong" data-success="right">Nombre completo</label>
				</div>
				<div class="md-form mb-5 " align="left">
					<i class="fas fa-mobile prefix grey-text"></i>
					<input type="text" id="inputValidationEx" class="form-control validate" name = "celular" >
					<label for="inputValidationEx" data-error="wrong" data-success="right">Celular</label>
				</div>


				<div class="md-form mb-5 " align="left">
					<i class="far fa-credit-card prefix grey-text"></i>
					<input type="text" id="inputValidationEx" class="form-control validate" name="ingreso" >
					<label for="inputValidationEx" data-error="wrong" data-success="right">Ingreso mensual </label>
				</div>

				<div class="md-form mb-4" align="left">
					<i class="fas fa-lock prefix grey-text "></i>
					<input type="password" id="orangeForm-pass" class="form-control validate" name="password">
					<label data-error="wrong" data-success="right" for="orangeForm-pass">Contraseña</label>
				</div>

				<div class="text-center mb-3">
				<button type="submit" name="registrar" id="btn-one" class="btn peach-gradient btn-block btn-rounded z-depth-1a"  >Continuar</button>
				</div>
			</form>
			<!--/.Content-->
		</div>
	</div>
	<!-- Modal -->
</center>
</section>


</body>
</html>
<?php
ob_end_flush();
?>
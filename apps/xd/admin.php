<?php
ob_start() ;
?>
<?php  
session_start();
if (!isset($_SESSION['email'])) {
	header('Location: sesion.php');
}elseif(isset($_SESSION['email'] )){
	include 'cnn.php';

	$sentencia = $cnnPDO->query("SELECT * FROM user;");
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);


}else{
	echo "Error en el sistema";
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
	$password=$_POST['password'];

        //Validar que las cajas no esten vacias
	if (!empty($nombre) && !empty($email) && !empty($celular) && !empty($password))
	{
               //Actualizamod los datos en la tabla de la db  
		$sql = $cnnPDO->prepare(
			'UPDATE user SET nombre = :nombre, email = :email, celular = :celular, password = :password WHERE email = :email'
		);

              //Asignar las variables a los campos de la tabla
		$sql->bindParam(':nombre',$nombre);
		$sql->bindParam(':email',$email);
		$sql->bindParam(':celular',$celular);
		$sql->bindParam(':password',$password);

              //Ejecutar la variable $sql
		$sql->execute();
		unset($sql);
		unset($cnnPDO);


	session_start();
	session_destroy();
	
	header('Location: index.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
	
	<title>Bienvenido adminitardor</title>
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


 <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 


<style type="text/css">
	@media screen (max-width:1024px) and (min-width: 600px){

} 
	
	a {
  font-size: 25px;
  line-height: 50px;
  text-align: center;
  width: 100px;
  height: 50px;
}
</style>

</head>
<body>
	<body background="images/neg.jpg">
		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark unique-color-dark">
			<!-- Navbar brand -->
			<a class="navbar-brand" href="">Bienvenido Administrador</a>
			<!-- Collapse button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
			aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Collapsible content -->
		<div class="collapse navbar-collapse" id="basicExampleNav">
			


	</ul>
	<ul class="navbar-nav ml-auto nav-flex-icons">


		<form method="POST" action="cerrar.php">


			<button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Cerrar sesion</button>

		</form>

	</ul>

</div>
<!-- Collapsible content -->
</nav>
<div class=" my-11 p-5 z-depth-10 unique-color-dark">

	<div class="container">
		<div class="row">
			<div class="col-md">
				<!-- Card -->
				<div class="card">

					<!-- Card image -->
					<div class="view overlay">
						<img class="card-img-top" src="https://media.giphy.com/media/xUPGcAep2BZhomS0HC/giphy.gif"
						alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>

					<!-- Card content -->
					<div class="card-body">
						<center>
							<!-- Title -->
							<h4 class="card-title">Eliminar usuarios</h4>
							<!-- Text -->
							<p class="card-text"><h6>Eliminar usuarios que ya no utilicen la aplicación.</h6></p>
							<!-- Button -->
							<a href="usuarios.php" class="btn btn-primary">Ir</a>

						</center>
					</div>

				</div>
				<!-- Card -->
			</div>
			<div class="col-md">
				<!-- Card -->
				<div class="card">

					<!-- Card image -->
					<div class="view overlay">
						<img class="card-img-top" src="https://media.giphy.com/media/xUPGcAep2BZhomS0HC/giphy.gif"
						alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>

					<!-- Card content -->
					<div class="card-body">
						<center>
							<h4 class="card-title">Registrar usuarios</h4>
							<!-- Text -->
							<p class="card-text"><h6>Registra a los usuario que usen  esta aplicación</h6></p>
							<!-- Button -->
							<a class="btn btn-primary"  data-toggle="modal" data-target="#select" >Ir</a>
							<div class="modal fade" id="select" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
								<div class="modal-dialog"  >
									<div class="modal-content" >
										<div class="modal-header" >
											<h5 class="modal-title" id="exampleModalLabel">Registra los usuarios nuevos</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" >

												<span>Registrar</span>
												<!--Panel 8-->

												<!--Body-->
												<form id="formajax" name="formajax" class="md-form" method="POST" style="color: #757575;">
													<!-- nombre -->
													<div class="md-form input-with-post-icon">
														<i class="fas fa-user input-prefix"></i>
														<input type="text" id="nombre" class="form-control" name="nombre" autofocus >
														<label for="nombre">Nombre</label>
													</div>

													<!-- Email -->
													<div class="md-form input-with-post-icon">
														<i class="fas fa-at input-prefix"></i>
														<input type="email" id="email" class="form-control" name="email" >
														<label for="email">Email</label>
													</div>


													<!-- Celular -->
													<div class="md-form input-with-post-icon">
														<i class="fas fa-mobile-alt input-prefix"></i>
														<input type="number" id="celular" class="form-control" name="celular" >
														<label for="celul">Celular</label>
													</div>

													<!-- Password -->
													<div class="md-form input-with-post-icon">
														<i class="fas fa-unlock input-prefix"></i>
														<input type="password" id="password" class="form-control" name="password" >
														<label for="password">Contraseña</label>
													</div>

										
									<div class="modal-footer" >
										<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
										<button  name="enviar" id="enviar" type="button" class="btn btn-primary " >Enviar</button>
									</form>
								</div>
							</div>


						</center>
					</div>

				</div>
				<!-- Card -->
			</div>
			<div class="col-md">
				<!-- Card -->
				<div class="card" > 

					<!-- Card image -->
					<div class="view overlay">
						<img class="card-img-top" src="https://media.giphy.com/media/xUPGcAep2BZhomS0HC/giphy.gif"
						alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>

					<!-- Card content -->
					<div class="card-body">
						<center>
							<!-- Title -->
							<h4 class="card-title">Ver los producto del alamcen</h4>

							<p class="card-text"><h6>Ver los producto del alamcen</h6></p>
							<!-- Button -->
							<a href="ad.php" class="btn btn-primary">Ir</a>


						</center>

					</div>


				</div>


				<!-- Card -->

			</div>

				<div class="col-md">
				<!-- Card -->
				<div class="card" >

					<!-- Card image -->
					<div class="view overlay">
						<img class="card-img-top" src="https://media.giphy.com/media/xUPGcAep2BZhomS0HC/giphy.gif"
						alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>

					<!-- Card content -->
					<div class="card-body" style="height: 200px;">
						<center>
							<!-- Title -->
							<h4 class="card-title">Modificar los datos </h4>
							<!-- Text -->
							<p class="card-text"><h6>Modifica los datos de tu cuenta.</h6></p>
							<!-- Button -->
							<form class="login" method="post">
							
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
												<input type="email" id="orangeForm-email"  readonly="readonly"  class="form-control validate" name="email"value="<?php echo $_SESSION['email']?>">
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



											<div class="md-form mb-4" align="left">
												<i class="fas fa-lock prefix grey-text "></i>
												<input type="password" id="orangeForm-pass" class="form-control validate" name="password" value="<?php echo $_SESSION['password']?>">
												<label data-error="wrong" data-success="right" for="orangeForm-pass">Contraseña</label>
											</div>

											<div class="text-center mb-3">
												<button type="submit" name="actualizar" id="btn-one" class="btn aqua-gradient btn-block btn-rounded z-depth-1a"  >Actualizar</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="text-center">
								<a href="" class="btn btn-primary  " data-toggle="modal" data-target="#modalLoginForm">Ir</a>
							</div>
						</form>

						</center>
					</div>

				</div>
			</div>
		</div>
	</div>

	<br><br>
	<br><br>
</div>
</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#enviar').click(function(){
			var datos = $('#formajax').serialize();

			if ($('#nombre').val() == '') {
				swal ("¡Debe de Ingrese un Nombre! " , "" , "warning");
				return;
			}
			if ($('#email').val() == '') {
				swal ("¡Debe de Ingrese un email! " , "" , "warning");
				return;
			}
			if ($('#celular').val() == '') {
				swal ("¡Debe de Ingrese un celular! " , "" , "warning");
				return;
			}
			if ($('#password').val() == '') {
				swal ("¡Debe de Ingrese una Contraseña! " , "" , "warning");
				return;
			}

			$.ajax({
				type:"POST",
				url:"registro.php",
				data:datos,
				success:function(r){
					if (r==1)
					{
						swal ("¡Registro enviado! " , "¡Los datos fueron registrados!" , "success");
						$('#nombre').val('');
						$('#email').val('');
						$('#celular').val('');
						$('#password').val('');
					}
					else 
					{
						alert("Error");
					}

				}

			});
			return false;

		});
	});
</script>
<?php
ob_end_flush();
?>

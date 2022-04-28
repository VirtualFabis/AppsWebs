<?php 

ob_start();

?>
<?php 

require_once 'cdn.html';

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
if (isset($_POST['eliminar']))
{
	//se guarda en las variables$us y $ps
	$email=$_POST['email'];
	
	//Query de consulta
	$query = $cnnPDO->prepare('DELETE from user WHERE email =:email');

	//Manejo de parámetros
	$query->bindParam(':email', $email);

	//Execución del query
	$query->execute(); 

	

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
	<title>Divice</title>
	<link rel="icon" href="images/logo.png" />



 <style type="text/css">

 	@media screen (max-width:1024px) and (min-width: 600px){

} 
 	
 html {
  min-height: 100%;
  position: relative;
}
body {
  margin: 0;
  margin-bottom: 40px;
}
footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 50px;
  
}
 </style>
</head>
<body>

	<nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient">

		<a class="navbar-brand" href="#"><img src="images/logo.png"width= "60" height="60"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
		aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link" ><i class="fas fa-users"></i> Smmart Safe Home  <?php 

				echo "   <strong>Bienvenido ",  $_SESSION['nombre']," "  
				?>   </strong>
				<span class="sr-only">(current)</span>
			</a>
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
				<li><a href="pdf1.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Generar PDF</button> </a></li>


		<li><a href="cerrar.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Cerrar sesion</button> </a></li>


	</ul>
	</div>
</nav>

<br>
<center>
	<h2>Registro de Usuarios</h2>
</center>					


<center><button class="btn btn-danger"  style="width: 230px;" data-toggle="modal" data-target="#delete">
Eliminar un usuario</button> </center>

<br>

<div class="container col-sm-8">

	<?php
	$sql = "SELECT * FROM user"; 
	$query = $cnnPDO -> prepare($sql); 
	$query -> execute(); 
	$results = $query -> fetchAll(PDO::FETCH_OBJ); 

	if($query -> rowCount() > 0)   { 
		foreach($results as $result) { 


			echo "

			<div class='media border p-3'>
			<img src='images/avatar.png' alt='John Doe' class='mr-3 mt-3 rounded-circle' style='width:60px;'>
			<div class='media-body'>
			<h5 style='font-weight: bold'>Usuario: ".$result -> nombre." </h5>
			<h5><small><i>Email: ".$result -> email." </i></small><br></h5>
			<h5><small><i>Phone: ".$result -> celular." </i></small><br></h5>
			<h5><small><i>Contraseña: ".$result -> password." </i></small><br></h5>


			</div>
			</div>

			";		  

			








		}
	}
	?>
</div>
</div>

	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
		<div class="modal-dialog"  >
			<div class="modal-content" >
				<div class="modal-header" >
					<h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" >
					<form class="login" method="post">

						<span>Selecciona email del usuario que  quieres eliminar</span>
						<input type="text" name="email" id="id" class="form-control">				</div>
						<div class="modal-footer" >
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button  type="submit" class="btn btn-primary" name="eliminar">Save changes</button>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</div>

</div>
</form>
<br>


<footer class="page-footer font-small aqua-gradient py-3">

	<!-- Footer Elements -->
	<div class="container">

		<div class="row">
			<div class="col-md-6 d-flex justify-content-start">
				<!-- Copyright -->
				<div class="footer-copyright text-center bg-transparent">© 2020 Copyright:
					<a href="#">Fabis</a>
				</div>
				<!-- Copyright -->
			</div>
			<div class="col-md-6 d-flex justify-content-end">

				<ul class="list-unstyled d-flex mb-0">
					<li>
						<a class="mr-3" role="button" href="https://www.facebook.com/fabis.ibarra.71/"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li>
						<a class="mr-3" role="button" href="https://twitter.com/Del_Bosque1312"><i class="fab fa-twitter"></i></a>
					</li>
					<li>
						<a class="mr-3" role="button" href="https://www.instagram.com/sebas_ddb/"><i class="fab fa-instagram"></i></a>
					</li>
					<li>
						<a class="" role="button"><i class="fab fa-youtube"></i></a>
					</li>
				</ul>
			</div>
		</div>

	</div>
	<!-- Footer Elements -->

</footer>
</body>
</html>
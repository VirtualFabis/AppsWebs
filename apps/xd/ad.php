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
	$id=$_POST['id'];
	
	//Query de consulta
	$query = $cnnPDO->prepare('DELETE from actividad WHERE id =:id');

	//Manejo de parámetros
	$query->bindParam(':id', $id);

	//Execución del query
	$query->execute(); 

	

}

?>
<?php  
if (isset($_POST['borrar']))
{
	//se guarda en las variables$us y $ps

	//Query de consulta
	$query = $cnnPDO->prepare('DELETE from hora');

	//Manejo de parámetros

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

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 


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

		<li><a href="pdf.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Generar PDF</button> </a></li>

		<li><a href="settings.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Settings</button> </a></li>

		<li><a href="cerrar.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Cerrar sesion</button> </a></li>

		
	</ul>
</div>
</nav>
<br>
<center>
	<h2>Registro de actividad
		<?php
		$sql = "SELECT * FROM hora"; 
		$query = $cnnPDO -> prepare($sql); 
		$query -> execute(); 
		$results = $query -> fetchAll(PDO::FETCH_OBJ); 

		if($query -> rowCount() > 0)   { 
			foreach($results as $result) { 

				$New = date('g:ia', strtotime($result -> hora1));
				$New1 = date('g:ia', strtotime($result -> hora2));


				echo " <h2 style='color: red'> Desactivado de ".$New." a ".$New1."
				";









			}
		}
		?>
	</h2> 
	
	<button class="btn btn-danger"  style="width: 230px;" data-toggle="modal" data-target="#delete">
	Elimina un registro</button>


	<a href="ejemplo.php"><button class="btn btn-secondary"  style="width: 300px;">
	Inserta un registro de Prueba!!</button> <a>



		<button class="btn aqua-gradient"   style="width: 200px;" data-toggle="modal" data-target="#horas">
		Rango de horas</button>

		<button class="btn  btn-danger "   style="width: 250px;" data-toggle="modal" data-target="#borrar">
		Elimina el rango de horas</button>
	</center>

	
	


	<br>

	<?php
	$sql = "SELECT * FROM actividad"; 
	$query = $cnnPDO -> prepare($sql); 
	$query -> execute(); 
	$results = $query -> fetchAll(PDO::FETCH_OBJ); 

	if($query -> rowCount() > 0)   { 
		foreach($results as $result) { 

			$newDate = date('g:ia \o\n l jS F Y', strtotime($result -> fecha));

			echo " 


			<div class='container col-sm-8'>

			<div class='media border p-3'>
			<img src='images/f.png' alt='John Doe' class='mr-3 mt-3 rounded-circle' style='width:60px;'>
			<div class='media-body'>
			<h6> Actividad reciente <small><i>Fecha del registro: ".$newDate."
			</i></small></h5>
			<p> En linea y el Numero del registro: ".$result -> id."</p>
			

			</div>
			</div>
			</div>


			";










		}
	}
	?>

	<br>

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

						<span>Selecciona la id del registro que  quieres eliminar</span>
						<input type="text" name="id" id="id" class="form-control">				</div>
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


<div class="modal fade" id="borrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
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

					<span>Desea eliminar el rango de horas?</span>
					<div class="modal-footer" >
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button  type="submit" class="btn btn-primary" name="borrar">Save changes</button>
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

		<form method="POST" action="hora.php">

	<div class="modal fade" id="horas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
		<div class="modal-dialog"  >
			<div class="modal-content" >
				<div class="modal-header" >
					<h5 class="modal-title" id="exampleModalLabel">Seleciona un rango de horas</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" >

						<span>En este rango de horas no te llegara ninguana alerta de dispositivo</span>
						<br>
						<input type="time" name="hora1" id="hora1" class="form-control">		
						<br>	
						<input type="time" name="hora2" id="hora2" class="form-control">			
					</div>
					<div class="modal-footer" >
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button  type="submit" class="btn btn-primary" id="enviar" name="enviar">Save changes</button>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
</div>

</div>
</form>

<footer class="page-footer font-small aqua-gradient py-3">

	<!-- Footer Elements -->
	<div class="container">

		<div class="row">
			<div class="col-md-6 d-flex justify-content-start">
				<!-- Copyright -->
				<div class="footer-copyright text-center bg-transparent">© 2020 Copyright:
					<a href="sebas.php"> Fabis</a>
				</div>
				<!-- Copyright -->
			</div>
			<div class="col-md-6 d-flex justify-content-end">

				<ul class="list-unstyled d-flex mb-0">
					<li>
						<a class="mr-3" role="button" href="https://www.facebook.com/fabis.ibarra.71/"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li>
						<a class="mr-3" role="button" href=""><i class="fab fa-twitter"></i></a>
					</li>
					<li>
						<a class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
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
<!-- Footer -->
</body>
</html>
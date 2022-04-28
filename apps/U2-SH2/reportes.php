
<?php 
include_once 'cnn.php';
require_once 'cdn.html';

 ?>
 <?php  
session_start();
if (!isset($_SESSION['email'])) {
  header('Location: index.php');
}elseif(isset($_SESSION['email'] )){
  include 'cnn.php';

  $sentencia = $cnnPDO->query("SELECT * FROM usuarios;");
  $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);


}else{
  echo "Error en el sistema";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Reportes</title>
		<link rel="icon" href="images/logo.png" />

</head>
<body>
	<!--Navbar -->
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient">

		<a class="navbar-brand" href="#"><img src="images/avatar.png"width= "60" height="60"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
		aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link" >Sistema Web de Control Escolar
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
			

		</ul>
	</div>


</nav>
<br>

<div class="container">

				<table class="table table-striped table-responsive-md btn-table">

					<thead>
						<TR><center><strong>
						Tabla Alumnos</center></strong></TR>
						<tr>
							<th>Matricula</th>
							<th>Nombre</th>
							<th>Carrera</th>
						</tr>
					</thead>

					<?php
					$sql = "SELECT * FROM alumnos ORDER BY matricula ASC"; 
					$query = $cnnPDO -> prepare($sql); 
					$query -> execute(); 
					$results = $query -> fetchAll(PDO::FETCH_OBJ); 

					if($query -> rowCount() > 0)   { 
						foreach($results as $result) { 
							  

							echo " 

							<tbody>
							<tr class='small'>
							<td> ".$result -> matricula." </td>
							<td> ".$result -> nombre." </td> 
							<td> ".$result -> carrera." </td>";





							

							}
						}
						?>
					</tbody>
				</table>
				</div>
<br>
				<div class="container">

				<table class="table table-bordered ">

					<thead>
						<TR><center><strong>
						Tabla Porfesor</strong></TR>
						<tr>
							<th>Numero del Emplaado</th>
							<th>Nombre y Apellido</th>
						</tr>
					</thead>

						<?php
					$sql = "SELECT * FROM profesores ORDER BY num_empleado ASC"; 
					$query = $cnnPDO -> prepare($sql); 
					$query -> execute(); 
					$results = $query -> fetchAll(PDO::FETCH_OBJ); 

					if($query -> rowCount() > 0)   { 
						foreach($results as $result) { 
							  

							echo " 

							<tbody>
							<tr class='small'>
							<td> ".$result -> num_empleado." </td>
							<td> ".$result -> nombre." </td>";

								}
							}

			?>

</center>
</div>


				

					</tbody>
				</table>
				<br>
				<div class="container">

				<table class="table table-bordered ">

					<thead>
						<TR><center><strong>
						Tabla Materias</strong></TR>
						<tr>
							<th>ID de la materias</th>
							<th>Nombre de la materias</th>
						</tr>
					</thead>

						<?php
					$sql = "SELECT * FROM materias ORDER BY id_materia ASC"; 
					$query = $cnnPDO -> prepare($sql); 
					$query -> execute(); 
					$results = $query -> fetchAll(PDO::FETCH_OBJ); 

					if($query -> rowCount() > 0)   { 
						foreach($results as $result) { 
							  

							echo " 

							<tbody>
							<tr class='small'>
							<td> ".$result -> id_materia." </td>
							<td> ".$result -> nombre_materia." </td>";

								}
							}

			?>

</center>
</div>


				

					</tbody>
				</table>
				
</body>
</html>
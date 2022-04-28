<!DOCTYPE html>
<html>
<?php $con = mysqli_connect('localhost', 'root','');
session_start();
 ?>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<title>Promyadmin</title>
</head>
<nav>
	
</nav>
<body style="background-color: black; color: white; overflow-x: hidden;">
	

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#"><img src="img/logo.png" width="20%"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>

		</div>
	</nav>
	<br>

	<div class="row">
		<div class="col-sm-2">
			<div class="container" style="font-size: 10pt;">

				<?php $dats = mysqli_query($con, "SHOW DATABASES;");
				$contador = 0;
				while ($databases = mysqli_fetch_array($dats)) {
					?>
					<form >
						<input type="text" value="<?php echo $databases['Database']; ?>" id="db<?php echo $contador; ?>" style="display: none;">
						<img src="img/db.png" width="10%"><a href="" onclick="enviar<?php echo $contador; ?>()" type="submit"><?php echo "+ " . $databases['Database']; ?></a><br>
						<script type="text/javascript">

							function enviar<?php echo $contador ?>(){
								var datas = "nombre=" + $("#db<?php echo $contador; ?>").val();
								$.ajax({
									type: 'post', 
									url: 'selected.php',
									data: datas,
									success: function (respuesta) {
										console.log(respuesta);
									},
									error:function(){
										alert("No se pudo conectar");
									}
								});
							}
						</script>
					</form>
					<?php 
					$contador = $contador + 1;
				}
				?>
				<form method="post" action="selected">
					<input type="text" id="dbd" value="cnbddpeqc" style="display: none;">
					<a href="" onclick="creardb()" >+ Crear nueva BD</a>
				</form>
				<script type="text/javascript">

					function creardb(){
						var datas = "nombre=" + $("#dbd").val();
						$.ajax({
							type: 'post', 
							url: 'selected.php',
							data: datas,
							success: function (respuesta) {
								console.log(respuesta);
							},
							error:function(){
								alert("No se pudo conectar");
							}
						});
					}
				</script>
			</div>	
		</div>	
		<div class="col-sm-10">
			<div class="container">
				<?php 
				if (isset($_SESSION['db'])) {
					if ($_SESSION['db'] == "cnbddpeqc") {
						echo "Crear nueva Base de datos";

						?>
						<div class="row">
							<div class="col-sm-5">
								<form action="crearnuevaBD.php" method="post"><br><br>
									<input type="text" name="ndb" placeholder="Nombre para su base de datos" class="form-control"> <br>
									<div style="text-align: right;">
										<input type="submit" name="Crear" value="Crear" class="btn btn-outline-light"> 
									</div>
								</form>
							
								
								<?php 
							}else{
								echo $_SESSION['db'] . "<br><br>";
								$db = $_SESSION['db'];
								$tab = mysqli_query($con, "SHOW TABLES FROM " . $db . ";");
								?>
								<div class="row">
									<div class="col-sm-5">
										<table class="table table-bordered">
											<?php 
											$subit = 0;
											while ($tablas = mysqli_fetch_array($tab)) {
												$col = "Tables_in_" . $db;
												?>

												<tr>
													<th>
														<a href="" onclick="ejecutando<?php echo $subit; ?>();"><?php echo $tablas[$col]; ?></a>
														<input type="text" id="tabla<?php echo $subit; ?>" value="<?php echo $tablas[$col]; ?>" style="display: none;">

													</th>
												</tr>
												<script type="text/javascript">

													function ejecutando<?php echo $subit ?>(){
														var datas = "nombre=" + $("#tabla<?php echo $subit; ?>").val();
														$.ajax({
															type: 'post', 
															url: 'mostabla.php',
															data: datas,
															success: function (respuesta) {
																
															},
															error:function(){
																alert("No se pudo conectar");
															}
														});
													}
												</script>
												<?php 
												$subit++;

											}

											?>
										</table>
										<button class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">Crear nueva</button><br><br>

										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: black;">
											<div class="modal-dialog" role="document" style="background-color: black;">
												<div class="modal-content" style="background-color: black;">
													<div class="modal-header" style="background-color: black;">
														<h5 class="modal-title" id="exampleModalLabel">Nombre de la tabla</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body" style="background-color: black;">
														<form action="" method="">
															<span>Nombre de la tabla</span>
															<input type="text" id="tabla" name="nombre" class="form-control">
													</div>
													<div class="modal-footer" style="background-color: black;">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button onclick="creartabla();" class="btn btn-primary">Save changes</button>
														</form>
													</div>
												</div>
											</div>
										</div>
										<script type="text/javascript">

													function creartabla(){
														var datas = "nombre=" + $("#tabla").val();
														$.ajax({
															type: 'post', 
															url: 'creartabla.php',
															data: datas,
															success: function (respuesta) {
																
															},
															error:function(){
																alert("No se pudo conectar");
															}
														});
													}
												</script>

									</div>
								
							<div class="col-sm-5">
								<?php if (isset($_SESSION['tabla'])) {
									# code...
								?>
								<table class="table table-bordered table-dark">
									<thead>
										<?php 
										$concont = mysqli_connect('localhost','root','', $_SESSION['db']);
										$cond = mysqli_query($concont, "DESCRIBE " . $_SESSION['tabla'] .";");
										if (mysqli_fetch_array($cond) == false) {}else{
											


											$primerdes = mysqli_query($concont, "DESCRIBE " . $_SESSION['tabla'] . ";");
											while ($theads = mysqli_fetch_array($primerdes)) {
												echo "<td>";
												echo $theads['Field'];
												echo "</td>";
											}
										
										 ?>
									</thead>
								<?php 
								
								$consultade = mysqli_query($concont, "SELECT * FROM " . $_SESSION['tabla'] . ";");
								while ($mosrar = mysqli_fetch_array($consultade)) {
									echo"<tr>";
									$describe = mysqli_query($concont, "DESCRIBE " . $_SESSION['tabla'] .";");
									while ($columnas = mysqli_fetch_array($describe)){
										echo "<td>" . $mosrar[$columnas['Field']] . "</td>";
									}
									echo "<tr>";
								}
							}

							?>
						</table>	
					<?php } ?>
				</div>

				<div class="col-sm-2" style="text-align: right;">
					<div class="container">
						<br>
						<button class="btn btn-success" style="width: 90px;"data-toggle="modal" data-target="#insert">
							Insertar
						</button><br><br>
						<button class="btn btn-danger"  style="width: 90px;" data-toggle="modal" data-target="#delete">
							Eliminar
						</button><br><br>
						<button class="btn btn-primary" style="width: 90px;" data-toggle="modal" data-target="#select">
							Consultar
						</button><br><br>
						<button class="btn btn-warning" style="width: 90px;" data-toggle="modal" data-target="#update">
							Actualizar
						</button>

					</div>

				</div>
				<?php 
			}

		}


		?>

	</div>

</div>
</div>
</div>
</body>
</html>

<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: black;">
	<div class="modal-dialog" role="document" style="background-color: black;">
		<div class="modal-content" style="background-color: black;">
			<div class="modal-header" style="background-color: black;">
				<h5 class="modal-title" id="exampleModalLabel">Insert</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: black;">
				<form action="insert.php" id="insertar" method="post">
					<span>Nombre</span>
					<input type="text" name="nombre" id="nombre" class="form-control">
					<span>Correo</span>
					<input type="text" id="correo" class="form-control" name="correo">
					<span>Telefono</span>
					<input type="number" id="telefono" class="form-control" name="telefono">
				</div>
				<div class="modal-footer" style="background-color: black;">
					
					<button type="submit" class="btn btn-primary">Save changes</button>
				</form>
			</div>
		</div>
	</div>
</div> 

<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: black;">
	<div class="modal-dialog" role="document" style="background-color: black;">
		<div class="modal-content" style="background-color: black;">
			<div class="modal-header" style="background-color: black;">
				<h5 class="modal-title" id="exampleModalLabel">Update</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: black;">
				<form action="update.php" id="update" method="post">
			
					<span>Selecciona la ID que quieres actulizar</span>
					<input type="text" name="id" id="id" class="form-control">
						<span>Nombre</span>
					<input type="text" name="nombre" id="nombre" class="form-control">
					<span>Correo</span>
					<input type="text" id="correo" class="form-control" name="correo">
					<span>Telefono</span>
					<input type="number" id="telefono" class="form-control" name="telefono">
				</div>
				<div class="modal-footer" style="background-color: black;">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</form>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: black;">
	<div class="modal-dialog" role="document" style="background-color: black;">
		<div class="modal-content" style="background-color: black;">
			<div class="modal-header" style="background-color: black;">
				<h5 class="modal-title" id="exampleModalLabel">Delete</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: black;">
							<form action="delete.php" id="delete" method="post">

					<span>Selecciona la ID que quieres eliminar</span>
					<input type="text" name="id" id="id" class="form-control">				</div>
				<div class="modal-footer" style="background-color: black;">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button  type="submit" class="btn btn-primary">Save changes</button>
				</form>
			</div>
		</div>
	</div>
</div>


</script>
<div class="modal fade" id="select" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: black;">
	<div class="modal-dialog" role="document" style="background-color: black;">
		<div class="modal-content" style="background-color: black;">
			<div class="modal-header" style="background-color: black;">
				<h5 class="modal-title" id="exampleModalLabel">Select</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: black;">
							<form action="select-php.php" id="select" method="post">
					<span>Selecciona una id</span> 
					<input type="text" id="id" name="id" class="form-control">

				</div>
				<div class="modal-footer" style="background-color: black;">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="buscar"class="btn btn-primary" >Save changes</button>
				</form>
			</div>
		</div>
	</div>
</div>



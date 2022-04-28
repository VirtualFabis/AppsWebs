<?php 

ob_start();

?>

<?php 

require_once 'cdn.html';
require_once 'cnn.php';

require_once 'conexion.php';


?>


<!DOCTYPE html>
<html>
<head>


	<title>Bienvenido</title>
	<link rel="icon" href="images/xd.png" />

</head>
<body>


	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#"><img src="BA.PNG" width="30" height="30" class="d-inline-block align-top" alt="">BankApp</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">INICIO <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="registro.php">Registro</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="saldito.php">Asignar Saldo</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Banorte.php">Banorte</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Santander.php">Santander</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Banamex.php">Banamex</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Eliminar Cuenta</a>
				</li>

			</ul>

		</div>
	</nav>




	<div class="container">
		<div class="row">

			<div class="col-md-5">

				<!--Section: Content-->

				<!--Body-->
				<form method="POST" >

					<div class="modal-body mb-1">
						<div class="md-form form-sm mb-5">
							<i class="fas fa-user prefix"></i>
							<input type="number" id="modalLRInput10"  name ="cuenta"  class="form-control form-control-sm validate">
							<label data-error="wrong" data-success="right" for="modalLRInput10">Numero de cuenta</label>
						</div>


						<div class="text-center mt-2">
							<button type="submit"  name="buscar" class="btn btn-info" > Buscar <i class="fas fa-sign-in ml-1"></i></button>
						</div>
					</div>

				</div>
			</div>
		</div>

	</section>

	<?php
	if (isset($_POST['buscar'])) 
	{

		$cuenta =$_POST['cuenta'];
		$sql = "SELECT * FROM banco  where cuenta='$cuenta'"; 
		$query = $cnnPDO -> prepare($sql); 
		$query -> execute(); 
		$results = $query -> fetchAll(PDO::FETCH_OBJ); 



		if($query -> rowCount() > 0)   { 

			foreach($results as $result) { 

				echo " 
				<div class='container'>



				<div class='col-sm-5'>

				<div class='card testimonial-card'>

				<div class='card-up indigo lighten-1'></div>


				<div class='avatar mx-auto white'>
				<img src='".$result -> foto."' class='rounded-circle'
				alt='woman avatar' width='200' height='200'>
				</div>

				<div class='card-body'>

				<h3 class='card-title'>".$result -> nombre."</h3>
				<p> 
				<h4>Numero de cuenta: ".$result -> cuenta."</h4>

				<h4>Email: ".$result -> email."</h4>
				<h4>Banco: ".$result -> banco."</h4>
				<h4>Saldo: $".$result -> saldo." pesos</h4>
				</p>

				</div>
				</div>
				</div>
				</div>

				</div>
				</div>
				</div>
				";

				?>
			</form>





<br>
			<form    method="post" enctype="multipart/form-data">

				<div class='container'>

					<div class='col-sm-5'>

						<div class="form-group">
							<label><h4>Depositar</h4></label>
							<input type="number" autocomplete="off" name="saldo" id="saldo" value="" class="form-control" placeholder="Ingrese la cantidad" data-validacion-tipo="requerido|min:3" />
						</div>


						<input type="hidden" name="n" value="<?php echo "" .$result-> cuenta. ""; ?>" />




						<div style="text-align: right;width:220px">
							<div class="text-right">
								<button class="btn btn-dark" type="submit" name="confirmar" id="confirmar"><h6>Confirmar</h6></button>
							</div>
						</div>
</div>
						</div>


					</form>

					<?php 
				}
			}

		}

		?>	

		<?php  
		if (isset($_POST['confirmar'])) 
		{

			$n=$_POST['n'];
			$saldo=$_POST['saldo'];
			$sql = "UPDATE banco SET saldo = saldo + '$saldo' where cuenta='$n' "; 
			$query = $cnnPDO -> prepare($sql); 
			$query -> execute(); 

		}

		?>

		<br>

	</body>
	</html>


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

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
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

	<!-- JQuery Validate library -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

	<!-- Libreria de sweetalert 2-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />

	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<title>Bienvenido</title>
	<link rel="icon" href="images/xd.png" />

</head>
<body>
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

	<nav class="mb-1 navbar navbar-expand-lg navbar-dark   bg-light">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
		aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link"  href="index.php"><i class="fas fa-users" ></i> Bienvenido  </strong>
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


<form id="frm-alumno" action="" method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-5">

				<div class="form-group">
					<label>Numero de cuenta</label>
					<input type="text" autocomplete="off" name="cuenta" id="numcuenta" value="" class="form-control" placeholder="Ingrese su numero de socio" data-validacion-tipo="requerido|min:3" />
				</div>


				<div style="text-align: right;width:220px">
					<div class="text-right">
						<button class="btn btn-danger" type="submit" name="buscar" id="buscar">Buscar</button>
					</div>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>

	<br>
	<?php
	if (isset($_POST['buscar'])) 
	{

		$cuenta =$_POST['cuenta'];
		$sql = "SELECT * FROM clientes  where cuenta='$cuenta'"; 
		$query = $cnnPDO -> prepare($sql); 
		$query -> execute(); 
		$results = $query -> fetchAll(PDO::FETCH_OBJ); 



		if($query -> rowCount() > 0)   { 

			foreach($results as $result) { 

				echo " 
				<div class='container'>
				<div class='columna'>
				<div class='row'>
				<div class='col-lg-4'>
				</div>
				<div class='col-lg-4 '>

				<div class='card testimonial-card'>

				<div class='card-up indigo lighten-1'></div>


				<div class='avatar mx-auto white'>
				<img src='".$result -> foto."' class='rounded-circle'
				alt='woman avatar' width='200' height='200'>
				</div>

				<div class='card-body'>

				<h4 class='card-title'><i class='fas fa-user-tie'></i> ".$result -> nombre."</h4>
				<p> 
				<i class='fas fa-fingerprint'></i> Numero de cuenta: ".$result -> cuenta."<br>

				<i class='far fa-envelope'></i> Email: ".$result -> email."<br>
				<i class='fas fa-university'></i>Banco: ".$result -> banco."<br>
				<i class='far fa-credit-card'></i> Ingresos: $".$result -> dinero."
				</p>


				";

				?>
			</form>






			<form    method="post" enctype="multipart/form-data">


				<div class="form-group">
					<label>Depositar</label>
					<input type="number" autocomplete="off" name="dinero" id="dinero" value="" class="form-control" placeholder="Ingrese la cantidad" data-validacion-tipo="requerido|min:3" />
				</div>

				
				<input type="hidden" name="n" value="<?php echo "" .$result-> cuenta. ""; ?>" />




				<div style="text-align: right;width:220px">
					<div class="text-right">
						<button class="btn btn-dark" type="submit" name="confirmar" id="confirmar">Confirmar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
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
				$dinero=$_POST['dinero'];
				$sql = "UPDATE clientes SET dinero = dinero + '$dinero' where cuenta='$n' "; 
				$query = $cnnPDO -> prepare($sql); 
				$query -> execute(); 

		$sql = "SELECT * FROM clientes  where cuenta='$n'"; 
		$query = $cnnPDO -> prepare($sql); 
		$query -> execute(); 
		$results = $query -> fetchAll(PDO::FETCH_OBJ); 



		if($query -> rowCount() > 0)   { 

			foreach($results as $result) { 

				echo " 
				<div class='container'>
				<div class='columna'>
				<div class='row'>
				<div class='col-lg-4'>
				</div>
				<div class='col-lg-4 '>

				<div class='card testimonial-card'>

				<div class='card-up indigo lighten-1'></div>


				<div class='avatar mx-auto white'>
				<img src='".$result -> foto."' class='rounded-circle'
				alt='woman avatar' width='200' height='200'>
				</div>

				<div class='card-body'>

				<h4 class='card-title'><i class='fas fa-user-tie'></i> ".$result -> nombre."</h4>
				<p> 
				<i class='fas fa-fingerprint'></i> Numero de cuenta: ".$result -> cuenta."<br>

				<i class='far fa-envelope'></i> Email: ".$result -> email."<br>
				<i class='fas fa-university'></i>Banco: ".$result -> banco."<br>
				<i class='far fa-credit-card'></i> Ingresos: $".$result -> dinero."
				</p>


				";

}}

			}?>

<br>

</body>
</html>


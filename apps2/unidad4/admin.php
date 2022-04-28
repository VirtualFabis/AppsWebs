<?php

require_once 'php/conexion1.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<link rel="icon" href="images/logo.png" />
</head>
<body>
	<!-- MDB 4.19.0 -->


	<!-- CSS -->

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

	<!-- JavaScript -->

	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Subir imagenes con PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--<style type="text/css">
    *{ font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif}
    .main{ margin:auto; border:1px solid #7C7A7A; width:60%; text-align:left; padding:30px; background:#85c587}
    input[type=submit]{ background:#6ca16e; width:100%;
      padding:5px 15px; 
      background:#ccc; 
      cursor:pointer;
      font-size:16px;

    }
    input[type=text]{  width:40%;
      padding:5px 15px; height:25px;
      font-size:16px;

    }
    .form-control {
     padding: 0px 0px;
   }
</style> -->

<!-- MDB 4.19.0 -->
</head>
<!--Navbar-->
<nav class="navbar navbar-dark indigo">
	<span class="navbar-text white-text">
		<h1>Bienvenido al modo administador</h1>
	</span>
</nav>
<body style="background-color:#0494fc  ;">

	<!-- Navbar brand -->
	<center> 
		<a class=""><font color="#080808"><h1></h1></a></font>

		<!-- Collapse button -->

	</button>

	<!-- Collapsible content -->
	<div class="collapse navbar-collapse" id="basicExampleNav">

		<br>
		<div class="container">
			<center>
				<h1>Subir un nuevo juego</h1>
				<div class="panel panel-primary">
					<div class="panel-body">

						<form name="MiForm" id="MiForm" method="post" action="cargar.php" enctype="multipart/form-data">



							<h4 class="text-center">Seleccione imagen del juego </h4>
							<div class="form-group">
								<label class="col-sm-2 control-label">Archivos</label>
								<div class="col-sm-8">
									<input type="file" class="form-control" id="image" name="image" multiple>
								</div>
								<input type="button" name="submit" class="btn btn-primary"  value="Ver" onclick = "location='juegos1.php'"/>
								<button name="submit" class="btn btn-success">Subir juego</button>
							</form>
						</section>
						<br>
						<br>
							

					</div> 
				</div>
			</div>
			<div class="container-fluid">
				<center>
					<img src="images/ajustes.png" width="400" height="150">
				</body>
				</html>
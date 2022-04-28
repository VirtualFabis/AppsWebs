<?php 
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
	<title>Escolar</title>
	<link rel="icon" href="images/logo.png" />



 <style type="text/css">
 	
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
.gradient-custom {
  /* fallback for old browsers */
  background: #6a11cb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to left, rgba(106, 17, 203, 0.75), rgba(37, 117, 252, 0.75));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to left, rgba(106, 17, 203, 0.75), rgba(37, 117, 252, 0.75))
}
 </style>
</head>
<body>
	<!--Navbar -->
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark  gradient-custom">

		<a class="navbar-brand" href="#"><img src="images/avatar.png"width= "60" height="60"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
		aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link" >Bienvenido <?php 

          echo " <h5> <i class='far fa-user-circle'></i>  ",  $_SESSION['nombre'],"</h5> "  
          ?>
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

				
				<form method="POST" action="cerrar.php">
 
        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Cerrar sesion</button> 

      </form>
				</a>
			</li>			
			

		</ul>
	</div>


</nav>
<br>


<div class="container">
	<div class="row">
		<div class="col-md">
			<div class="card border border-secondary">
				<center><img width="150px"  height="150px"  
				src="images/xd.png" 
				/></center>
				<div class="card-body">
					<h5 class="card-title">Alumnos </h5>
					<a href="alumno.php" class="btn purple-gradient">Comenzar</a>

				</div>
			</div>		
		</div>
		<div class="col-md">
			<div class="card border border-success">
				<center><img width="200px"  height="150px" 
				src="images/pro.png" 
				/></center>

				<div class="card-body">
					<h5 class="card-title">Profesores </h5>
					<a href="profesor.php" class="btn aqua-gradient">Comenzar</a>

				</div>
			</div>		
		</div>
		<div class="col-md">
			<div class="card border border-info">
				<center><img width="170px"  height="150px" 
				src="images/mat.png" 
				/></center>
				<div class="card-body">
					<h5 class="card-title">Materias </h5>
					<a href="materias.php" class="btn blue-gradient">Comenzar</a>

				</div>
			</div>		
		</div>
		<div class="col-md">
			<div class="card border border-secondary">
				<center><img width="170px"  height="150px" 
				src="images/do.png" 
				/></center>
				<div class="card-body">
					<h5 class="card-title">Reportes </h5>
					<a href="reportes.php" class="btn purple-gradient">Comenzar</a>

				</div>
			</div>		
		</div>
	</div>
</div>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="card border border-warning">
				<center><img width="170px"  height="150px" 
				src="images/diploma.png" 
				/></center>
				<div class="card-body">
					<h5 class="card-title">Materia-Profesor </h5>
					<a href="materia-profesor.php" class="btn peach-gradient">Comenzar</a>

				</div>
			</div>		
		</div>
		<div class="col-md-3">
			<div class="card border border-primary">
				<center><img width="170px"  height="150px" 
				src="images/comentario.png" 
				/></center>

				<div class="card-body">
					<h5 class="card-title">Alumnos-Materias</h5>
					<a href="alumnos-profesor.php" class="btn blue-gradient">Comenzar</a>

				</div>
			</div>		
		</div>
			</div>
			</div>		
		</div>
			</div>
			</div>		
		</div>
	<br>

<footer class="page-footer font-small gradient-custom  py-3">

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

<?php
ob_start() ;
?>
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

<meta charset="utf-8">
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
 </style>
</head>
<body>
	<!--Navbar -->
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark  purple-gradient">

		<a class="navbar-brand" href="#"><img src="images/xd.png"width= "60" height="60"></a>
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
       <a href="pdf.php"> <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" >Generar FDF</button> </a>

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
<div class="container col-sm-8">

 <form class="login" method="post">
  <?php
  $sql = "SELECT * FROM clases"; 
  $query = $cnnPDO -> prepare($sql); 
  $query -> execute(); 
  $results = $query -> fetchAll(PDO::FETCH_OBJ); 

  if($query -> rowCount() > 0)   { 
    foreach($results as $result) { 

      echo " 
      <div class='media border p-3'>
      <img src='images/avatar.png' alt='John Doe' class='mr-3 mt-3 rounded-circle' style='width:60px;'>
      <div class='media-body'>
        <h5>El alumno:<strong> ".$result -> alumno."</strong> </h5>
        <h5> Se le asigno la Materia: <strong> ".$result -> materias."</strong> Con el Maestro <strong>".$result -> profesor."</strong></h5>
      </div>
    </div>
<br>

      ";


    }
  }
  ?>
  </form>



  <!-- Default form subscription -->


      </div>
    </div>

<footer class="page-footer font-small purple-gradient py-3">

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


<?php
ob_end_flush();
?>

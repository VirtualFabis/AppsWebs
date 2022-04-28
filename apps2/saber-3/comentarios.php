<?php 
include("cdn.html");

include("php/conexion1.php");



?>
<!DOCTYPE html>
<html>
<head>
	<title>Comentarios</title>
 <link rel="icon" href="images/logo.png" />
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
  <section>
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient ">

    <a class="navbar-brand" href="#"><img src="images/logo.png"width= "50"height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">
          <span class="sr-only">(current)</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Comentarios</a>
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

      <li>
        <input class="form-control" type="search" placeholder="Search" aria-label="Search"> </li>
        <li><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Buscar <i class="fas fa-search"></i></button> </li>
      </ul>
    </div>
  </nav>
</section>
<section>
  <?php
  $sql="SELECT * from uwu";
  $registro=mysqli_query($cnx,$sql);
  while($campo=mysqli_fetch_array($registro))
  {
    ?>

    <div class="media border p-3">
      <img src="images/avatar.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
      <div class="media-body">
        <h5><?php echo $campo['nombre'];?> <small><i>Posted on <?php echo $campo['date'];?></i></small></h5>
        <p><?php echo $campo['comentarios'];?></p>
      </div>
    </div>



    <?php
  }
  ?>
  </section>
</body>
</html>
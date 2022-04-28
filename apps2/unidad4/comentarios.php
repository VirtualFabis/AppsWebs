<?php 
include("php/conexion1.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Comentarios</title>
	  <link rel="icon" href="images/logo.png" />
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

</head>
<body>
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient ">

    <a class="navbar-brand" href="#"><img src="images/logo.png"width= "50"height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">EA
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


<table class="table table-striped table-responsive-md btn-table">

					<thead>
						<tr>
							<th>Nombre</th>
							<th>Email</th>
							<th>Comentarios</th>
						</tr>
					</thead>
					<?php
					$sql="SELECT * from comentarios";
					$registro=mysqli_query($cnx,$sql);
					while($campo=mysqli_fetch_array($registro))
					{
						?>
						<tbody>
							<tr class="small">
								<td><?php echo $campo['nombre'];?></td>
								<td><?php echo $campo['email'];?></td>
								<td><?php echo $campo['comentarios'];?></td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>

</body>
</html>
<link rel="icon" type="image/jpg" href="img/www.jpg">
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

<?php 
require 'cnn.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Banamex</title>
</head>
 
  <style> .bg-nav{                             
	background-color: #424242  ;
</style>

<link rel="icon" type="image/jpg" href="img/logobanamex.png">

  <style type="text/css">
    .columna {
      width:33%;
      float:left;
    }

    @media (max-width: 500px) {

      .columna {
        width:auto;
        float:none;
      }

    }
  </style>
 <body style="background-color:#28DDE0;">
</body>

<body>

	<body>

		<!--Navbar -->
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
		<a class="navbar-brand" href="#"><img src="img/banamex.jpg" width="130"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
		aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
		<ul class="navbar-nav ml-auto">

			<div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">

      	
       <li class="nav-item">
        <a class="nav-link" href="index.php">|Regresar|</a>
      </li>
  
				
			</ul>
		</div>
	</nav>
	<!--/.Navbar -->

<br>


 <?php
              $sql = "SELECT * FROM clientes where banco = 'Banamex'"; 
  $query = $cnnPDO -> prepare($sql); 
  $query -> execute(); 
  $results = $query -> fetchAll(PDO::FETCH_OBJ); 

  if($query -> rowCount() > 0)   { 
    foreach($results as $result) { 


        echo " 
        <div class='container'>
        <div class='columna'>
        <div class='row'>
        
        <div class='col-lg-10'>

        <div class='card testimonial-card'>

        <div class='card-up indigo lighten-1'></div>


        <div class='avatar mx-auto white'>
        <img src='".$result -> foto."' class='rounded-circle'
        alt='woman avatar' width='200' height='200'>
        </div>

        <div class='card-body'>

        <h3 class='card-title'> ".$result -> nombre."</h3>
        <p> 
        Numero de cuenta: ".$result -> cuenta."<br>
      Email: ".$result -> email."
     Banco: ".$result -> banco." ||
      Saldo: $".$result -> dinero."
        </p>
</div>

</div>
</div>
</div></div>
</div>
</div>



        ";

       ?>

                  <?php
                }
                

              }
              ?>



</body>
</html>
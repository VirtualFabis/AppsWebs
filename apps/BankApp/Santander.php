
<?php 
require 'cdn.html';
require 'cnn.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="BA.PNG">
<head>
  


<title>BankApp-BANORTE</title>
<head>
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
</head>


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

      <body>
              <?php
              $sql = "SELECT * FROM banco where banco = 'Santander'"; 
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
         <h4>Numero de cuenta: ".$result -> cuenta."<h4>

       <h4>Email: ".$result -> email."<h4>
     <h4> Banco: ".$result -> banco."<h4>
       <h4>Saldo: $".$result -> saldo."<h4>
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


<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JavaScript -->


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<?php
ob_start() ;
?>
<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>


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
  <title>Comentarios</title>
   <link rel="icon" href="images/vendo.png" />
</head>

<style> .bg-nav{                             
background-color: #6D1E7A;
 </style>
<link rel="icon" type="image/jpg" href="images/images.jpg">
<body>

<section>
  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-nav">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <a class="navbar-brand" href="comentarios.php"><strong>Comentarios</strong></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
     
           <a class="navbar-brand" href="index.php"><strong>Regresar</strong></a>
          
          <span class="sr-only">(current)</span>

      
      </li>
    </ul>
  </div>
    </div>
  </li>
</ul>
</div>
</nav>
</section>

<div class="container col-sm-4">
  <!-- Default form subscription -->
    <form method="POST" action="com.php">

   
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Hacer un comentario</h4>
        <br><br>

        
          
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" id="defaultForm-email" class="form-control validate" name="usuario">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Usuario</label>
        </div>

        <div class="md-form">
          <i class="fas fa-envelope prefix grey-text"></i>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4" name="comentario"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Comentario</label>
        </div>
        <center><h6></h6></center>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button  type="submit" class="btn btn-secondary"  name="registrar">Enviar</button>
      </div>
    </div>
  </div>
</div>
</form>
<br><br>

<div class="container col-sm-8">

 <form class="login" method="post">
  <?php
  $sql = "SELECT * FROM comentario"; 
  $query = $cnnPDO -> prepare($sql); 
  $query -> execute(); 
  $results = $query -> fetchAll(PDO::FETCH_OBJ); 

  if($query -> rowCount() > 0)   { 
    foreach($results as $result) { 

      echo " 
      <div class='media border p-3'>
      <img src='images/avatar.png' alt='John Doe' class='mr-3 mt-3 rounded-circle' style='width:60px;'>
      <div class='media-body'>
        <h5> ".$result -> usuario." <small><i>Posted on  ".$result -> fecha."</i></small></h5>
        <p> ".$result -> comentario."</p>
      </div>
    </div>


      ";


    }
  }
  ?>
  </form>



  <!-- Default form subscription -->


      </div>
    </div>


</body>
</html>
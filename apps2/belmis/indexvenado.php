 <?php
include("php/conexion1.php");

?>

<?php

if (isset($_POST['registrar'])) 
{
  if (!empty($_POST['usuario']) && !empty($_POST['comentario']))
  {
    mysqli_query($cnx,"INSERT into comentario (usuario,comentario) values
      ( '$_POST[usuario]',
      '$_POST[comentario]')");


  }
}
?>

 <link rel="icon" href="images/logo.png" />


<html>
<head>
	<title>Venado Records</title>
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
<style> .bg-nav{                             
background-color: #6D1E7A;
 </style>



<body>
  
<section>
  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-nav">
    <a class="navbar-brand" href="#"><img src="images/deer.jpg"width= "50"height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav mr-auto">
    
    <!--/Dropdown primary-->
    <li>

      <!-- Modal -->
      <div class="text-center">
        <a href="index.php" class="btn btn-outline-info waves-effect ml-auto " >Inicia sesion y Registrate</a>
      </div>
    </li>
    
              
          

            </div>
          </div>
        </div>
      </div>
    </form>
    <div class="text-center">
        <a href="comentarios.php" class="btn btn-outline-info waves-effect ml-auto " >Envia tus comentarios</a>
      </div>
  </li>
</ul>
<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
  <ul class="navbar-nav ml-auto">  
   

    <div>
      </button></a>
    </div>
  </li>
</ul>
</div>
</nav>
</section>


<section>

 <//body background="images/cine.jpg">
<video class="video-fluid" autoplay loop muted>
        <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
      </video>
      <div class="mask rgba-white-slight"></div>
    </div>
    <div class="card-body text-center mb-3">
       <h1 style="color:   #000000 "></h1>
     </div>
     <div class="card-body text-center mb-3">
       <h6 style="color:   #000000 "></h6>

       <div class="container">
    <div class="row">
      <div class="col-sm 3">
        <!-- Card -->
        <div class="card">

          <!-- Card image -->
          <img class="card-img-top" src="images/.jpg" alt="">

          <!-- Card content -->
  <div class="card-body elegant-color white-text rounded-bottom">

            <!-- Title -->

            <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
              data-wow-delay="0.3s"><strong>Bienvenido a Venado Records</strong></h1>   

              <br>
<h4 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
              data-wow-delay="0.3s"><strong>Información sobre nosotros</strong></h4>            <!-- Text --> 
          <br><br>
            <!-- Button -->
            <h5> Somos una página de peliculas independiente que busca distribuir los trailers de las mejores peliculas que se han creado, esto con el fin de tener una plataforma en la cual podamos discutir las peliculas con verdaderos fans de películas</h5>

          </div>

        </div>
        <!-- Card -->
      </div>
      
  </section>

     
                

      
       

      </div>



   
 
 </div>
</section>
<section>
  <br>
  
    <br>
    <br>
   
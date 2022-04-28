<?php
include("php/conexion1.php");

?>

<?php
if (isset($_POST['registrar'])) 
{
  if (!empty($_POST['nombre'])  && !empty($_POST['email']) && !empty($_POST['comentarios']))
  {
    mysqli_query($cnx,"INSERT into comentarios values
      ( '$_POST[nombre]',
      '$_POST[email]',
      '$_POST[comentarios]')");


  }
}
?>
<html>
<head>
	<title>Bienvenido a EA</title>
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
<style type="text/css">
  body{

  }
  section{
    margin-top: -15px;
  }
</style>
<body>
  <section>	
<form class="login" method="post">
   <!--Navbar -->
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
        <a class="nav-link" href="#">GamePass</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mundo videojuegos</a>
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
      <li class="nav-item">
        <a class="nav-link" href="#"> Videojuegos Mexico</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-satellite"></i>Por todo Mexico</a>
      </li>
      <li>
        <input class="form-control" type="search" placeholder="Search" aria-label="Search"> </li>
        <li><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Buscar <i class="fas fa-search"></i></button> </li>
      </ul>
    </div>
  </nav>
</section>
<section>
  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"><img src="images/5G.png"width= "50"height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav mr-auto">
    <!--Dropdown primary-->
    <div class="dropdown">

      <!--Trigger-->
      <a class="btn  btn-outline-info waves-effect dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">Menu</a>


      <!--Menu-->
      <div class="dropdown-menu dropdown-primary">
        <a class="dropdown-item" href="eaaccess.php"><i  class="fas fa-golf-ball"></i>¿Quien es Early access?</a>
        <a class="dropdown-item" href="contratos.php"><i class="fas fa-file"></i> Derechos y contratos</a>
        <a class="dropdown-item" href="comentarios.php"><i class="far fa-file-alt"></i> Ver comentarios</a>

      </div>
    </div>
    <!--/Dropdown primary-->
    <li>

      <!-- Modal -->
      <div class="text-center">
        <a href="index-secion.php" class="btn btn-outline-info waves-effect ml-auto " >Inicia sesion y Registrate</a>
      </div>
    </li>
    <li>
      <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Envia tus comentarios</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
            <div class="modal-body mx-3">
              <div class="md-form">
                <i class="fas fa-user prefix "></i>
                <input type="text"  name="nombre" id="form34" class="form-control validate">
                <label   data-error="wrong"   data-success="right" for="form34">Nombre</label>
              </div>

              <div class="md-form">
                <i class="fas fa-envelope prefix "></i>
                <input type="email" name="email" id="form29" class="form-control validate">
                <label  data-error="wrong" data-success="right" for="form29">Email</label>
              </div>

              <div class="md-form">
                <i class="fas fa-comment prefix "></i>
                <input type="text" name="comentarios" id="form30" class="form-control validate">
                <label  data-error="wrong" data-success="right" for="form8">Comentarios</label>
              </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="submit"  class="btn btn-unique aqua-gradient" name="registrar" >Enviar <i class="fas fa-paper-plane-o ml-1"></i></button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <div class="text-center">
      <a href="" class="btn btn-outline-info waves-effect mb-4" data-toggle="modal" data-target="#modalContactForm">Envia tus comentarios</a>
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
  <!-- Jumbotron -->
  <div class="jumbotron p-0">
    <div class="view overlay rounded-top">
      <img src="images/mundo.png"width= "1343"height="400">
      <div class="mask rgba-white-slight"></div>
    </div>
    <div class="card-body text-center mb-3">
      <h3 class="card-title h3 my-4"><strong>Bienvenido al EA
       <br>
     El mejor servicio de Streaming de videojuegos en el mearcado EA .</strong></h3>
   </div>
 </div>
</section>
<section>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <!-- Card -->
        <div class="card">

          <!-- Card image -->
          <img class="card-img-top" src="images/telcel.png" alt="Card image cap">

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title" align="center"><a>GTA V</a></h4>
            <!-- Text --> <br>
            <p class="card-text" align="center">Grand Theft Auto V es un videojuego de acción-aventura de mundo abierto distribuido por Rockstar Games. <br>  <br></p>
            <!-- Button -->
            <center><a href="#" class="btn btn-primary"align="center">Probar</a></center>

          </div>

        </div>
        <!-- Card -->
      </div>
      <div class="col-sm">
        <!-- Card -->
        <div class="card">

          <!-- Card image -->

          <img class="card-img-top" src="images/eventos.png" alt="Card image cap"> 

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title" align="center"><a>Rocket league</a></h4>
            <br>
            <!-- Text -->
            <p class="card-text"align="center">Rocket League es un videojuego que combina el fútbol con los vehículos. Fue desarrollado por Psyonix y lanzado el 7 de julio del 2015. <br> <br></p>
            <!-- Button -->
            <center><a href="#" class="btn btn-primary"align="center">Probar</a></center>

          </div>

        </div>
        <!-- Card -->
      </div>
      <div class="col-sm">
        <!-- Card -->
        <div class="card">

          <!-- Card image -->
          <img class="card-img-top" src="images/prensa.png" alt="Card image cap">

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title"align="center">Call of duty
              <a>
              </a></h4>
              <!-- Text -->
              <p class="card-text"align="center">Call of Duty es una serie de videojuegos de disparos en primera persona, de estilo bélico distribuida por Activision. </p>
              <!-- Button -->
              <center> <a href="#" class="btn btn-primary"align="center">Probar</a></center>

            </div>

          </div>
          <!-- Card -->
        </div>
      </div>
    </div>
  </section>
  <section>
    <br>
    <br>
    <h1 align="center" style="color: #11E1EE"> Información </h1>
  </section>
  <section>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <!-- Card image -->
            <a href="#">
              <center>  <i class="fas fa-tools  fa-5x cyan-text pr-3 " ></i></center>
              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->

                <h4 class="card-title" align="center" style="color: #11E1EE">Desbloqueo de juegos</h4><br>
                <!-- Text -->

              </div>
            </a>
          </div>
        </div>
        <div class="col-sm">
         <div class="card">
          <!-- Card image --><a href="#">
            <center>  <i class="far fa-file-alt fa-5x cyan-text pr-3 "></i></center>

            <!-- Card content -->
            <div class="card-body">

              <!-- Title -->
              <h4 class="card-title"align="center"style="color: #11E1EE">Carta de derechos de los usuarios</h4><br>
              <!-- Text -->
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm">
       <div class="card">
        <!-- Card image --><a href="#">
          <center>  <i class="fas fa-file-alt  fa-5x cyan-text pr-3 "></i></center>

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title"align="center"style="color: #11E1EE">Aplicaciones para programar</h4> <br>
            <!-- Text -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm">
     <div class="card">
      <!-- Card image --><a href="#">
        <center> <i class="fas fa-book-medical  fa-5x cyan-text pr-3 "></i></center>

        <!-- Card content -->
        <div class="card-body">

          <!-- Title -->
          <h4 class="card-title"align="center"style="color: #11E1EE">Pago mensual</h4><br> <br>
          <!-- Text -->
        </div>

      </div>
    </div>
  </div>
</div>

<br>
<div class="container">
  <div class="row">
    <div class="col-sm">
     <div class="card">
      <!-- Card image --><a href="#">

        <center>  <i class="fas fa-satellite-dish fa-5x cyan-text pr-3"></i></center>

        <!-- Card content -->
        <div class="card-body">

          <!-- Title -->
          <h4 class="card-title"align="center"style="color: #11E1EE">Fibra optica</h4><br>
          <!-- Text -->
        </div>
      </a>
    </div>
  </div>
  <div class="col-sm">
   <div class="card">
    <!-- Card image --><a href="#">
      <center>  <i class="fas fa-journal-whills fa-5x cyan-text pr-3"></i></center>

      <!-- Card content -->
      <div class="card-body">

        <!-- Title -->
        <h4 class="card-title"align="center"style="color: #11E1EE">Politica de Uso Justo</h4>
        <!-- Text -->
      </div>
    </a>
  </div>

</div>
<div class="col-sm">
 <div class="card">
  <!-- Card image --><a href="#">
    <center> <i class="fas fa-book-dead  fa-5x cyan-text pr-3"></i></center>

    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title"align="center" style="color: #11E1EE">Politica Sin Contrato</h4>
      <!-- Text -->
    </div>
  </a>
</div>
</div>
<div class="col-sm">
 <div class="card">
  <!-- Card image --><a href="#">
    <center>  <i class="fas fa-globe-americas fa-5x cyan-text pr-3"></i></center>

    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title"align="center" style="color: #11E1EE">Nos importa los videojuegos</h4>
      <!-- Text -->
    </div>
  </a>
</div>
</div>
</div>
</div>
<br>


<div class="container">
  <div class="row">
    <div class="col-sm-3">
     <div class="card">
      <!-- Card image --><a href="#">
        <center> <i class="fas fa-shield-alt fa-5x cyan-text pr-3"></i></center>

        <!-- Card content -->
        <div class="card-body">

          <!-- Title -->
          <h4 class="card-title"align="center"style="color: #11E1EE">Recomendaciones de seguridad</h4>
          <!-- Text -->
        </div>
      </a>
    </div>
  </div>
  <div class="col-sm-3">
   <div class="card">
    <!-- Card image --><a href="#">
      <center> <i class="fas fa-book fa-5x cyan-text pr-3"></i></center>

      <!-- Card content -->
      <div class="card-body">

        <!-- Title -->
        <h4 class="card-title"align="center" style="color: #11E1EE">Contrato</h4><br>
        <!-- Text -->
      </div>
    </a>
  </div>
</div>
<div class="col-sm-3">
 <div class="card">
  <!-- Card image --><a href="#">
    <center>  <i class="fab fa-accessible-icon  fa-5x cyan-text pr-3"></i></center>

    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title"align="center"style="color: #11E1EE">Accesibilidad</h4><br>
      <!-- Text -->
    </div>
  </a>
</div>
</div>
</div>
</div>
</section>
</body>
</html>
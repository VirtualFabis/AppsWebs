<?php 

ob_start();

?>
<?php 

require_once 'cdn.html';

?>
<?php  
session_start();
if (!isset($_SESSION['email'])) {
  header('Location: sesion.php');
}elseif(isset($_SESSION['email'] )){
  include 'cnn.php';

  $sentencia = $cnnPDO->query("SELECT * FROM user;");
  $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);


}else{
  echo "Error en el sistema";
}



?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
  
  <title>Settings</title>
 <link rel="icon" href="images/logo.png" />

</head>
<body>

  <style type="text/css">


    @media screen (max-width:1024px) and (min-width: 600px){

} 
    
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




  <nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient">

   <a class="navbar-brand" href="#"><img src="images/logo.png"width= "60" height="60"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
   aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
   <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
      <a class="nav-link" ><i class="fas fa-users"></i> Smmart Safe Home  <?php 

      echo "   <strong>Bienvenido ",  $_SESSION['nombre']," "  
      ?>   </strong>
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
 <a class="nav-link waves-effect waves-light">
  <i class="fab fa-facebook"></i>
</a>
</li>
<li><a href="cerrar.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Cerrar sesion</button> </a></li>



</ul>
</div>
</nav>


<div class="container my-5 p-5 z-depth-1">

  <center><strong><h2>Configuracion del dispositivo</h2></strong> 
    <br>
    <div class="row">
      <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
          Reiniciar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Dispositivo</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Estás a punto de reiniciar tu dispositivo
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <a href=""><button type="button" class="btn btn-danger">Reiniciar</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#centralModalSm">
        Apagar
      </button>

      <!-- Central Modal Small -->
      <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-lg" role="document">


        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title w-100" id="myModalLabel">Dispositivo</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Estás a punto de apagar tu dispositivo de forma manual
          </div>
          <div class="modal-footer">

            <a href="settings.php">Apagar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Central Modal Small -->
  </div>

  <div class="col-md">
    <!-- Side Modal Top Right -->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#sideModalTR">
      Estado
    </button>

    <!-- To change the direction of the modal animation change .right class -->
    <div class="modal fade right" id="sideModalTR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Add class .modal-side and then add class .modal-top-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-side modal-top-right" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">Curso disponible</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Estás a punto de ver el estado del dispositivo desde la aplicación
        </div>
        <div class="modal-footer">

          <a href="inicio de settings.php">Ver</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Side Modal Top Right -->
</div>

</div>
<br>
<div class="row">
  <div class="col-md">
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
    Información
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">

  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Dispositivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Este dispositivo lo creamos con el fin de hacer sentir seguros a las personas cuando no se encuentren en su casa, trabajo u otra cosa, también les ayuda a monitorearla a distancia para cuando no puedan estar en su recidencia
      </div>
      <div class="modal-footer">

       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
     </div>
   </div>
 </div>
</div>
</div>

<div class="col-md">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalPopovers">
    Versión
  </button>

  <div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalPopoversLabel">Dispositivo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          La versión del dispositivo es la 1.0.0.0
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md">
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Soporte
  </button>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Dispositivo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Cualquier duda o pregunta puedes contactarte con el siguiente número: 
        844 464 7362, te resolveremos todas nuestras dudas.
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>

</div>


  </center>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>

<footer class="page-footer font-small aqua-gradient py-3">

  <!-- Footer Elements -->
  <div class="container">

    <div class="row">
      <div class="col-md-6 d-flex justify-content-start">
        <!-- Copyright -->
        <div class="footer-copyright text-center bg-transparent">© 2020 Copyright:
          <a href="#"> Fabis</a>
        </div>
        <!-- Copyright -->
      </div>


    </div>
    <!-- Footer Elements -->

  </footer>

</body>
</html>
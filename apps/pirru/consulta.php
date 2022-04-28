<?php
  include("conexion.php");
  #require_once('php/conexion.php');
?>
<html>
<head>
    <title>Usuarios Registrados</title>

    <link rel="icon" href="img/logo.png" />

    <meta charset="utf-8" />



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

    <!-- JQuery Validate library -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

    <!-- Libreria de sweetalert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

</head>
<body>
     <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
    <a class="navbar-brand" href="#"><img src="img/www.jpg" width="100"></a>
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
        <a class="nav-link" href="registro.php">|Registro|</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">|Asignar Saldo|</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="banorte.php">|Banorte|</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="santander.php">|Santander|</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="banamex.php">|Banamex|</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#">|Eliminar cuenta|</a>
      </li>
  
        
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->
<br><br><br><br>


<div class="container">
    <div class="row">
        <?php
                        $sql="SELECT * from datos_socios";
                        $registro=mysqli_query($cnx,$sql);
                        while($consulta=mysqli_fetch_array($registro))
                            {
                            ?>
                            <div class="col-sm-4">
                                <div class="card  text-dark" style="width: 19rem;">
    <center><img src="https://images.vexels.com/media/users/3/135251/isolated/preview/ab893f9074d536e3e940d61f0fc62b39-los-usuarios-firman-en-rojo-by-vexels.png" width="300"></center>
                                        <div class="card-body">
        <center><h4 class="card-title"><?php echo $consulta['nsocio']; echo " ";?><?php echo $consulta['nombre'];?></h4></center>
                                                <hr>
                                            </center>
                                            <center>
                                                <p class="card-text" style="text-align: justify;">
                                             
                                                <br><b><h5></b><?php echo $consulta['ciudad'];?></h5> <hr>
                                                <br><b></b><?php echo $consulta['email'];?> <hr>
                                                <br><b></b><?php echo $consulta['edad'];?> <hr>
                                                <br><b></b><?php echo $consulta['contrasena'];?>
                                             
                                                </p></center></div> 
    
</div><br><br>
                            </div>
                            <?php
                            }
                        
                        ?>
        
    </div>
</div>

</body>
</html>
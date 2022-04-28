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
     <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link"  href="https://sweetalert2.github.io/#configuration">SweetAlert</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Nuevo Registro</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Mi App</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="consulta.php">Ver Registros</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<br><br><br><br>


<div class="container">
    <div class="row">
        <?php
                        $sql="SELECT * from datos";
                        $registro=mysqli_query($cnx,$sql);
                        while($consulta=mysqli_fetch_array($registro))
                            {
                            ?>
                            <div class="col-sm-4">
                                <div class="card  text-dark" style="width: 19rem;">
    <center><img src="https://images.vexels.com/media/users/3/135251/isolated/preview/ab893f9074d536e3e940d61f0fc62b39-los-usuarios-firman-en-rojo-by-vexels.png" width="300"></center>
                                        <div class="card-body">
        <center><h4 class="card-title"><?php echo $consulta['nombre']; echo " ";?><?php echo $consulta['apellidos'];?></h4></center>
                                                <hr>
                                            </center>
                                            <center>
                                                <p class="card-text" style="text-align: justify;">
                                             
                                                <br><b><h5></b><?php echo $consulta['email'];?></h5> <hr>
                                                <br><b>Género: </b><?php echo $consulta['genero'];?> <hr>
                                                <br><b>Fecha de Nacimiento: </b><?php echo $consulta['FechaNacimiento'];?> <hr>
                                                <br><b>Contraseña: </b><?php echo $consulta['contrasena'];?>
                                             
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
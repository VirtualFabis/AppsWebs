
<!-- Códigos de CONEXION -->
<?php
include("conexion.php");


?>


<?php error_reporting(E_ALL & ~E_NOTICE); session_start(); 
$host = "localhost"; 
$username = "id14901891_natalianeri";
 $password = "Pedazodeayer_05";
  $database = "id14901891_db_burocredito";
   $message = ""; 
   
   try  { 
   	$connect = new PDO("mysql:host=$host; dbname=$database", $username, $password); $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
   	if(isset($_POST["login"])) {
   	 if(empty($_POST["nsocio"]) || empty($_POST["contrasena"])) { $message = '<h1>Asegurate de llenar todos los campos</h1>'; } 
   	 else { $query = "SELECT * FROM datos2 WHERE nsocio = :nsocio AND contrasena = :contrasena"; $statement = $connect->prepare($query); $statement->execute( array( 'nsocio'     =>     $_POST["nsocio"], 'contrasena'     =>     $_POST["contrasena"] ) ); $count = $statement->rowCount(); 
   	 if($count > 0) { $_SESSION["nsocio"] = $_POST["nsocio"]; header("location:vista_usuario.php"); } 
   	 else { $message = '<label>Los datos ingresados no son correctos.</label>'; } } } } catch(PDOException $error) { $message = $error->getMessage(); } if($_POST['contrasena'] == 'admin1' AND $_POST['nsocio'] == 'admin'){ header("location:admin.php"); } ?>


<html lang="es">
<head>
	<title>Registro</title>
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


  <header>

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
            <a class="nav-link" aria-current="page" href="https://sweetalert2.github.io/#configuration">SweetAlert</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Nuevo Registro</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Mi App</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consulta.php">Ver Registros</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <br><br><br>

 <!--  <h3 class="page-header text-white bg-info">
    Nuevo Registro</h3>
  </header> -->

  <br>
  <div class="container"></h1>


    <div class="row">
     <div class="col-2">
      <!-- Columna sin mostrar informacion -->
    </div>

    <div class="col-8">

      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="" />

        <div class="form-group">
          <label>Socio</label>
          <input type="text" autocomplete="off" name="nsocio" id="nsocio2" value="" class="form-control" placeholder="Ingrese su numero de socio" data-validacion-tipo="requerido|min:3" />
        </div>

        <div class="form-group">
          <label>Contraseña</label>
          <input type="password"autocomplete="off" name="contrasena" id="contrasena2" value="" class="form-control" placeholder="Ingrese su Contraseña" data-validacion-tipo="requerido|email" />
        </div>



        <hr />

        <div class="text-right">
          <button class="btn btn-success" type="submit" name="login">Guardar</button>
        </div>
      </form>

    </div>        
    <div class="col-3">

    </div>
  </div>

</body>
</html>

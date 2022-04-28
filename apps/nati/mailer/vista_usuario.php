
<!-- Códigos de CONEXION -->
<?php
include("conexion.php");


?>

<?php
    session_start();
    ob_start();

    $nsocio=$_SESSION['nsocio'];


?>
<?php
if (!$_SESSION['nsocio'] ) {
    header('location: index.php');
}
?>

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
             <li class="nav-item">
            <a class="nav-link" href="logout.php">Cerrar sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




        <div class="container">

                <div class="login_part_text_iner">
                    <h3>Actualiza tus datos modificandolos en el formulario.</h3>
                  <br> <br><br><br><br><br><br><br>
                  <?php
        $sql="SELECT * from datos2";
                  $registro=mysqli_query($cnx,$sql);
                  while($campo=mysqli_fetch_array($registro))
                  {
                    if ($campo['nsocio']==$_SESSION['nsocio'])
                    {
                      ?>
                      <h4 style="color:red">Tu nombre es:&nbsp;&nbsp;</h4><p><?php echo $campo['nombre'] ?></p>
                      <h4 style="color:yellow">Tu ciudad es:&nbsp;&nbsp;</h4><p> <?php echo $campo['ciudad'] ?></p>
                      <h4  style="color:blue">Tu edad es:&nbsp;&nbsp;</h4><p> <?php echo $campo['edad'];?></p>
                      <h4 style="color:green">Tu contraseña es:&nbsp;&nbsp; </h4><p><?php echo $campo['contrasena'];?></p>
                                                      <h4 style="color:red">Tu numero de socio es:&nbsp;&nbsp;</h4><p><?php echo $campo['nsocio'] ?></p>
      
              </div>
                    <?php
                      }
                    }
                    ?>
                    



</body>
</header>

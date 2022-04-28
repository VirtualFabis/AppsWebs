<?php
    session_start();
    ob_start();

    $nsocio=$_SESSION['nsocio'];


?>
<?php
if (!$_SESSION['nsocio'] ) {
    header('location: banorte.php');
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Iniciar sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="" tabindex="-1" aria-disabled="true"
            ></a
          >
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Cerrar sesión</a>
          </li>
        </li>
      </ul>
    </div>
  </div>
</nav>




        <div class="container">

                    <h3>Bienvenido Socio</h3>
                  <br>

                    
<center>

       <?php
                 
include("conexion.php");
        $sql="SELECT * from datos2";
                  $registro=mysqli_query($cnx,$sql);
                  while($campo=mysqli_fetch_array($registro))
                  {
                    if ($campo['nsocio']==$_SESSION['nsocio'])
                    {
                      ?>
<div class="card" style="width: 500px height:500px ">
  <div class="card-body">
       <h4 style="color:black">Tu nombre es:&nbsp;&nbsp;</h4><p><?php echo $campo['nombre'] ?></p>
                      <h4 style="color:black">Tu ciudad es:&nbsp;&nbsp;</h4><p> <?php echo $campo['ciudad'] ?></p>
                      
                      
                                                      <h4 style="color:black">Tu numero de socio es:&nbsp;&nbsp;</h4><p><?php echo $campo['nsocio'] ?></p>
                                                      <div class="container">

          <div class="row">


            <div class="col-md-8">
              <br><br><br>    
              
               
                  
              
            
          
                <?php
                $sql="SELECT * from tabla2";
                $registro=mysqli_query($cnx,$sql);
                while($campo=mysqli_fetch_array($registro))
                {

                  ?>
                  
                    
                    <h4 style="color:black">Numero de socio:&nbsp;&nbsp;</h4><p> <?php echo $campo['numero'] ?></p>
                    <h4 style="color:black">Fecha de ingreso:&nbsp;&nbsp;</h4><p> <?php echo $campo['fecha'] ?></p>
                   
                  
                  
                  <?php
                }
                ?>
             

            </div>  
          </div>

          <div class="row">
            <div class="col-md-8">

              <p align="center">
            </div>
          </div>
        </div>

      </div><br>
      
    </p>
  </div>
</div>

<?php
                      }
                    }
                    ?>
                    

</center>



</body>
</header>
  <?php
  ob_end_flush();
  ?>
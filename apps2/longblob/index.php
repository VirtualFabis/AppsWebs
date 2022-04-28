<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="image/agenda.png">
  <meta charset="utf-8">
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <style type="text/css">

    <link rel="stylesheet" href="../assets/plugins/SweetAlert/dist/sweetalert2.min.css">
    <script src="../assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>

<style>
body{
      
    }
    html {
      overflow: hidden;
    }
  }
  section{
    margin-top: -50px;
  }
</style>
</head>


  
<body >
  <section>
  <div class="main">
    <div class="panel panel-primary">
      <div class="panel-body">

        <form name="MiForm" id="MiForm" method="post" action="cargar.php" enctype="multipart/form-data">
          <!--Navbar-->
         <nav class="mb-1 navbar navbar-expand-lg navbar-dark  blue-gradient ">

            <!-- Navbar brand -->
            <a class="navbar-brand" href="#"> <h5>Cargar y Almacenar imagen en MySQL PHP</h5></a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                <a class="nav-link" >Seleccione imagen a cargar
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ver.php" >  Ver imagenes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" >  <input type="file" class="form-control" id="image" name="image" multiple></a>
              </li>
              <li class="nav-item">
                <a id="alert-target" > <button name="submit" class="btn aqua-gradient" >Cargar Imagen</button></a>
              </li>
            </ul>
            <!-- Links -->
          </div>
          <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->    
    </form>
    </section>
    <section>
  <!-- Jumbotron -->
  <div class="jumbotron p-0">
    <div class="view overlay ">
      <img src="image/uwu.png"width= "1360"height="585">
        <div class="mask rgba-white-slight"></div>
    </div>
  </section>
</body>
</html>
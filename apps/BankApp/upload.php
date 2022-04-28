<link rel="shortcut icon" href="logo.JPG">
<title>SWEETMINT</title>

<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        /* Conectar a una base de datos de MySQL Local */
        $db_host = 'mysql:dbname=pruebas2;host=localhost';
        $usuario = 'root';
        $contrasena = '';

        try {
            $cnnPDO = new PDO($db_host, $usuario, $contrasena);
        } catch (PDOException $e) {

            echo "<br><br><center>
            <div class='card text-white bg-danger mb-3' style='max-width: 50rem;'>
            <div class='card-header'><h3>Error de Conexión</h3></div>
            <div class='card-body'>
            <h4 class='card-title'>Ha surgido un error y no se puede conectar a la base de datos!</h4>
            <h5 class='card-title'>Detalle:</h5>
            <p class='card-text text-white'>". $e->getMessage()."</p>
            </div>
            </div>
            ";
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $cnnPDO->query("INSERT into telcel (imagen,creado) VALUES ('$imgContent', '$dataTime')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SWEETMINT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html"> INICIO<span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="mostrar.php"> VER IMAGENES</a>
      </li>

    </ul>
  </div>
</nav>
 <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url(menta.PNG);
      height: 600px;
    ">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
        <font color="white">  <h1 class="mb-3">SUBIR IMAGEN</h1></font>
        <font color="white">  <h4 class="mb-3">Gisela Mariel de León Hernández</h4>
        </a>
            <div class="card">
<h5 class="card-header"><font color="black">¡TU IMAGEN SE SUBIO CON EXITO!</font></h5>
  <div class="card-body">

<a href="mostrar.php" class="btn btn-primary">REGRESA</a>
        <a href="mostrar.php" class="btn btn-primary">MIRA TU IMAGEN</a>
    </form>
</center>

  </div>

</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>




<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JavaScript -->


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
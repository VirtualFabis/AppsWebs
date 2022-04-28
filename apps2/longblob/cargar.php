
<?php
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
        //Credenciales Mysql
        $Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = 'db_agenda';
        
        //Crear conexion con la abse de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);
        

        // Cerciorar la conexion
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into images_tabla (image, fecha) VALUES ('$imgContenido', now())");
        // COndicional para verificar la subida del fichero
        if($insertar){
            echo "<div class='alert alert-success' role='alert'>
            La imagen se subio correctamente   <a  href='ver.php' >   Ver imagenes</a>
            ", " <div class='jumbotron p-0'>
            <div class='view overlay'>
            <img src='image/owo.png'width= '1360'height='600'>
            <div class='mask rgba-white-slight'></div>";
        }else{
           echo "<div class='alert alert-danger' role='alert'>
           Ah fallado en subir la imagen   
           ", " <div class='jumbotron p-0'>
           <div class='view overlay'>
           <img src='image/owo.png'width= '1360'height='600'>
           <div class='mask rgba-white-slight'></div>";
       } 
        // Sie el usuario no selecciona ninguna imagen
   }else{
       echo "<div class='alert alert-danger' role='alert'>
       selecciona una imagen profavor 
       ", " <div class='jumbotron p-0'>
       <div class='view overlay'>
       <img src='image/owo.png'width= '1360'height='600'>
       <div class='mask rgba-white-slight'></div>";
   }
}
?>


<!DOCTYPE html>
<html>
<head>
      <link rel="icon" href="image/agenda.png">

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
<body>



</body>
</html>

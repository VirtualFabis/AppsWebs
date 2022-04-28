<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.19.1.min.css?ver=4.19.1" rel="stylesheet">

  
	<script src="jquery-3.2.1.min.js"></script>
	<script src="alertifyjs/alertify.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Encripta y Desencripta tus contraseñas</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
       
        
      </div>
    </div>
  </div>
  <form method="POST" action="cerrar.php">

        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Cerrar sesion</button> 

      </form>
</nav>
<body class="bg-info">
<div class="container">  
<div style="background-color: #bdbdbd" class="row m-0 bg-400 justify-content-center align-items-center vh-100">
<div class="col-sm-6 ">
<form class="" method="post">
    
    <div class="form-outline mb-4">
    <div class="mb-3">
    <input class="form-control form-control-lg" name="enc" type="text" placeholder="ingresa texto" autocomplete="off">
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary mb-2"name="send">Encryptar</button>
    
    
    <button type="submit" class="btn btn-danger mb-2"name="sen">Desencrytar</button>
    </div> </div>
</form>


<h1>  <textarea class="form-control" cols='80' rows='4' id="codigo" readonly>
<?php
if(isset($_POST['send'])){
    include 'SED.php';
  $txt=$_POST['enc'];
  $txt1=SED::encryption($txt);
  echo $txt1;
}else {
   echo "";
}
?> 
<?php
if(isset($_POST['sen'])){
   include 'SED.php';
  $txt=$_POST['enc'];
  $txt2=SED::decryption($txt);
  echo $txt2;
}else {
   echo "";
}
?> 

</textarea></h1><br>
<button type="button" id="copyClip"  class="btn btn-secondary mb-2"data-clipboard-target="#codigo">Copiar texto</button>
<script src="clipboard.min.js"></script>
<button class="btn btn-dark mb-2" onclick="location.href = 'https://meetcompany.000webhostapp.com/new/DekoEnc/';">Actualizar pagina</button>
</div></div></div>
</body>
</html>

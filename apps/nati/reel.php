<?php 
require_once 'cdn.html';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reel</title>

	<style>
.grid-container {
  display: grid;
  grid-template-columns: auto;
  grid-gap: 50px;
  
  padding: 10px;
}

.grid-container > div {
  
  text-align: center;
  
}
</style>

	</head>

<nav class="navbar navbar-expand-lg navbar black fixed-top" style="opacity: 0.8">

<div class="container">
    <a class="navbar-brand" href="index.php">
      <img
        src="img/logoc.jpg"
        height="65"
        alt=""
        loading="lazy"
      />
    </a>
</div>  

  <a class="navbar-brand" style="color: white; font-family: Century Gothic; font-size: 25px; "	 href="index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" style="color: white; font-family: Century Gothic; font-size: 25px; " href="index.php">Regresar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #ad9162; font-family: Century Gothic; font-size: 25px; " href=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #ad9162; font-family: Century Gothic; font-size: 25px; " href=""></a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
</nav>

<body background="img/fondo2.jpeg" style="background-repeat: no-repeat; background-position: center; background-size:cover; background-attachment: fixed;">

<br><br><br><br><br>
<center>
	<p style="font-size: 35px; width:68%; color: #ffc824; font-family: Arial;">
    <b><b>Aquí podrás ver nuestras producciones tanto de cine como publicitarias hechas para nuestros clientes.</b></b>
</p>
	<div class="grid-container" style="width:85%">
	  <!--div 1-->
	  <div>
	  	
	  	<iframe style="z-index:2;" width="920" height="500" src="https://www.youtube.com/embed/k6dllwc1nk0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  </div>

<!--div 1-->
    <div>
      
      <iframe style="z-index:2;" width="920" height="500" src="https://www.youtube.com/embed/H4bmtAoWhNw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

<!--div 1-->
    <div>

	  <iframe style="z-index:2;" width="920" height="500" src="https://www.youtube.com/embed/6J1enJgwRyU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	 </div>

<!--div 1-->
    <div>
   <iframe style="z-index:2;" width="920" height="500" src="https://www.youtube.com/embed/KaDaNX0ZLvw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 </div>


	</div>	
</center>

</body>
</html>
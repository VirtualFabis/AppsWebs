<?php 
require_once 'cdn.html';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>

<style>
.grid-container {
  display: grid;
  grid-template-columns: auto ;
  grid-gap: 10px;
  
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(75, 75, 75, .5);
  border: 1px solid black;
  text-align: center;
  font-size: 30px;
}
</style>

<style>
.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.button4 {border-radius: 12px;}

</style>


</head>

<nav class="navbar navbar-expand-lg navbar black fixed-top" style="opacity: 0.7">

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

  <a class="navbar-brand" style="color: #000000; font-family: Century Gothic; font-size: 25px; "	 href="index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" style="color: white; font-family: Century Gothic; font-size: 25px; " href="#portafolio">Portafolio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white; font-family: Century Gothic; font-size: 25px; " href="#noticias">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white; font-family: Century Gothic; font-size: 25px; " href="#contacto">Contacto</a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
</nav>

<body background="img/form.jpeg" style="background-repeat: no-repeat; background-position: center; background-size:cover; background-attachment: fixed;">

<center>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
    <p style="font-size:70px; color:  #f0ae34 ; font-family: impact;">
      Chilaquiles  Casa Productora
    </p>
<section class="page-section" id="portafolio">
<br><br><br>
  <font color="white">
    

    <br><br><br><br><br><br><br><br><br><br><br><br>
	<img src="img/fondonegro.jpg" width="90%" style="opacity: 0.5;" >

   <p style="font-size:55px; color:  #f0ae34 ; font-family: Century Gothic; z-index: 2; position:relative; top: -700px">
    <br>
      <b><b>LO <font color="white">CH</font>IDO EMPIEZA CON <br> "<font color="white">CH</font>" DE <font color="white">CH</font>ILAQUILES</b></b>
  </p>
   <section class="page-section" id="portafolio">
<br><br><br>
  <div class="container">
    <p align="left">
      <img src="img/slide2.png" style="position: relative; top: -650px; z-index: 1; width: 30%;">
    </p>
    <p align="center">
      <img src="img/sesion4.jpg" style="position: relative; top: -850px; z-index: 1; width: 30%;">
    </p>
    <p align="right">
      <img src="img/you.png" style="position: relative; top: -1080px; z-index: 1; width: 30%;">
    </p>
  </div>
</center>

<a href="" button type="button " class="button button4" style="background-color:  #f0ae34; ; font-family: Verdana; font-size: 18px; z-index: 1; position: relative; top: -1050px; left: 150px">Diseño gráfico</button></a>
<a href="diseño.php" button type="button" class="button button4" style="background-color:  #f0ae34; ; font-family: Verdana; font-size: 18px; position: relative; top: -1050px; left: 420px">Fotografía</button></a>
<a href="reel.php" button type="button" class="button button4" style="background-color: #f0ae34 ; ; font-family: Verdana; font-size: 18px; position: relative; top: -1050px; left: 720px"> REEL</button></a>



<center>
<div class="grid-container" style="width: 90%; position: relative; top: -800px">

  <div >
   <section class="page-section" id="noticias">

    <font color="#f0ae34" face="impact" style="font-size:60px">
      Noticias <br><br>
    </font>

      <img src="img/noticia1.jpg" style="position: relative; left: -300px; top:px"> 
  <p align="center" style="font-family: Century Gothic; color: white; position:relative; top:; left:-300px "> 3 de junio de 2020 </p>
  <p align="center" style="font-family:Verdana; color: white; font-size: 20px; position:relative; top:; left:-300"> 
    <a href="https://eldiariodecoahuila.com.mx/2020/06/03/los-suenos-se-cumplen/" target="_blank" style="color: gold;"> <b><b>Los sueños se cumplen<br>
Antonio Valdés platica con EL<br>
DIARIO de su cortometraje<br>
 ‘Hay un monstruo en la habitación’</b></b> </a> </p>
  <img src="img/noticia2.jpg" style="position: relative; left:300px ; top:-450px">

   <p align="center" style="font-family: Century Gothic; color: white; position:relative; top:-450; left:300 ;"> 14 de Diciembre de 2020 </p>
  <p align="center" style="font-family:Verdana; color: white; font-size: 20px; position:relative; top:-450; left:300 ;"> 
    <a href="https://vanguardia.com.mx/articulo/en-saltillo-lanzan-campana-para-que-ninas-y-ninos-con-leucemia-tengan-una-navidad-llena-de" target="_blank" style="color: gold;"> <b><b>En Saltillo, lanzan campaña<br>
     para que niñas y niños con<br>
      leucemia tengan una ‘Navidad<br>
       llena de amor’ </a> </p>
  </div>
</div>

<section class="page-section" id="contacto">
<div class="container">
 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center" style="color:#f0ae34; font-family:Century Gothic; font-size:50px"><b><b>Contáctanos</h3>
            <div class="titleHR"><span></span></div>

            <form role="form" name="ajax-form" id="ajax-form" action="php/contact.php" method="post" class="form-main">
              <div class="col-xs-12">
                <div class="row">            
                  <div class="form-group col-xs-6">
                    <label for="name2" style="color: Black  ; font-family:Century Gothic; font-size:30px">Nombre</label>
                    <input class="form-control" id="name2" name="name" onblur="if(this.value == '') this.value='Name'" onfocus="if(this.value == 'Name') this.value=''" type="text" value="Nombre">
                    <div class="error" id="err-name" style="display: none;"></div>
                  </div>
                  <div class="form-group col-xs-6">
                    <label for="email2" style="color: Black  ; font-family:Century Gothic; font-size:30px">Email</label>
                    <input class="form-control" id="email2" name="email" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';" value="E-mail">
                    <div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div> 
                  </div>
                </div>
                <div class="row">            
                  <div class="form-group col-xs-12">
                    <label for="message2" style="color: Black  ; font-family:Century Gothic; font-size:30px"  >Mensaje</label>
                    <textarea class="form-control" id="message2" name="message" onblur="if(this.value == '') this.value='Message'" onfocus="if(this.value == 'Message') this.value=''">Escribe tu mensaje aquí:</textarea>
                    <div class="error" id="err-message" style="display: none;">Please enter message</div>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <p class="text-center con_sub_text" style="color:transparent;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren.</p>
                  </div>
                </div>
                <div class="row">            
                  <div class="col-xs-12 text-center">
                    <div id="ajaxsuccess" style="color:transparent;">E-mail was successfully sent.</div>
                    <div class="error" id="err-form" style="display: none;" style="color:transparent;">There was a problem validating the form please check!</div>
                    <div class="error" id="err-timedout" style="color:transparent;">The connection to the server timed out!</div>
                    <div class="error" id="err-state"></div>
                    <button type="submit" class="button button4" id="send" style="background-color: #f0ae34;">Enviar mensaje</button>
                  </div>
                </div>
              </div>  
            </form>
          </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
      </div> <!-- container -->
    </section>
    <!-- End CONTACT -->
         
</div>





</body>
</html>
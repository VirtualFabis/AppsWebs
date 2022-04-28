<?
require_once 'cdn.html';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fotografía</title>

<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  background-color:;
  padding: 10px;
  color: black;
}

.grid-container > div {
  background-color:;
  
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
<nav class="navbar navbar-expand-lg navbar black fixed-top" style="opacity:0.7">

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
        <a class="nav-link" style="color: #ad9162; font-family: Century Gothic; font-size: 25px; " href="noticias.php"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #ad9162; font-family: Century Gothic; font-size: 25px; " href="contacto.php"></a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
</nav>

<body background="img/fondo1.jpeg" style="background-repeat: no-repeat; background-position: center; background-size: cover; background-attachment: fixed">
<br><br><br><br>
<center>
  
    <div class="grid-container" style="width: 75%;" >

      <!-- Div1-->
      <div>
        
                <div class="container">
          <!-- Trigger the modal with a button -->
          <img src = "img/sesion1.jpg" type = "button"   data-toggle="modal" data-target="#myModal">

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  
                </div>
                
                <div class="modal-body">
                
                  
                  
                      <img src="img/sesion1.jpg" ></p>
                     
                </div>
                <div class="modal-footer">
                  
                  <button type="button" class="button button4" data-dismiss="modal" style="background-color: #DAA520; ">Cerrar</button>
                
                </div>
              </div>
              
            </div>
          </div>
          
        </div>

      </div>

      <!--Div 2-->
      <div>
        
          <div class="container">
          <!-- Trigger the modal with a button -->
          <img src = "img/sesion5.jpg" type = "button"   data-toggle="modal" data-target="#myModal2">

          <!-- Modal -->
          <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  
                </div>
                
                <div class="modal-body">
                
                  
                  
                      <img src="img/sesion5.jpg">
                     
                </div>
                <div class="modal-footer">
                  <button type="button" class="button button4" data-dismiss="modal" style="background-color: #DAA520;">Cerrar</button>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>

      </div>



      <!--Div 3-->
      <div>
        
            <div class="container">
          <!-- Trigger the modal with a button -->
          <img src = "img/sesion6.jpg" type = "button"   data-toggle="modal" data-target="#myModal3">

          <!-- Modal -->
          <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  
                </div>
                
                <div class="modal-body">
                
                  
                  
                      <img src="img/sesion6.jpg" ></p>
                     
                </div>
                <div class="modal-footer">
                  <button type="button" class="button button4" data-dismiss="modal" style="background-color: #DAA520;">Cerrar</button>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>

      </div>

      <!--Div 4-->  
      <div>
        
          <div class="container">
          <!-- Trigger the modal with a button -->
          <img src = "img/sesion7.jpg" type = "button"   data-toggle="modal" data-target="#myModal4">

          <!-- Modal -->
          <div class="modal fade" id="myModal4" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  
                </div>
                
                <div class="modal-body">
                
                  
                  
                      <img src="img/sesion7.jpg" ></p>
                     
                </div>
                <div class="modal-footer">
                  <button type="button" class="button button4" data-dismiss="modal" style="background-color: #DAA520;">Cerrar</button>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>

      </div>

      <!--Div 5-->
      <div>
        
          <div class="container">
          <!-- Trigger the modal with a button -->
          <img src = "img/sesion8.jpg" type = "button"   data-toggle="modal" data-target="#myModal5">

          <!-- Modal -->
          <div class="modal fade" id="myModal5" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  
                </div>
                
                <div class="modal-body">
                
                  
                  
                      <img src="img/sesion8.jpg" ></p>
                     
                </div>
                <div class="modal-footer">
                  <button type="button" class="button button4" data-dismiss="modal" style="background-color: #DAA520;">Cerrar</button>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>

      </div>

      <!--Div 6-->
      <div>
        
          <div class="container">
          <!-- Trigger the modal with a button -->
          <img src = "img/sesion9.jpg" type = "button"   data-toggle="modal" data-target="#myModal6">

          <!-- Modal -->
          <div class="modal fade" id="myModal6" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  
                </div>
                
                <div class="modal-body">
                
                  
                  
                      <img src="img/sesion9.jpg" ></p>
                     
                </div>
                <div class="modal-footer">
                  <button type="button" class="button button4" data-dismiss="modal" style="background-color: #DAA520;">Cerrar</button>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>

      </div>


          <!-- Div1-->
      <div>
        
                <div class="container">
          <!-- Trigger the modal with a button -->
          <a href="1/index.html"><img src = "img/13.jpeg" type = "button"   width="320px" height="500px"></a>

          <!-- Modal -->
         
              </div>
              
            </div>

                 <div>
        
                <div class="container">
         <a href="2/index.html"> <img src = "img/11.jpeg" type = "button"   width="320px" height="500px"></a>

          <!-- Modal -->
         
              </div>
              


          </div>
          
             <div>
        
                <div class="container">
          <!-- Trigger the modal with a button -->
          <a href="3/index.html"><img src = "img/12.jpeg" type = "button"   width="320px" height="500px"></a>

          <!-- Modal -->
         
              </div>
              

      
    </div>



  </div>  
</center>



</body>
</html>


<!-- CDN  MDB 4.19.1 -->

<!-- CSS -->

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
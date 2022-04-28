<?php 

require_once 'cdn.html';
include("php/conexion1.php");


?>

<!DOCTYPE html>
<html>
<head>
  <title>Sobre mi</title>

  <style type="text/css">
    body{

    }
    section{
      margin-top: -14px;
    }
  </style>
</head>
<body>
  <section>
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient ">

      <a class="navbar-brand" href="#"><img src="images/logo.png"width= "50"height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="#">
            <span class="sr-only">(current)</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Sobre el diseñador</a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-facebook"></i>
          </a>
        </li>

        <li>
          <input class="form-control" type="search" placeholder="Search" aria-label="Search"> </li>
          <li><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Buscar <i class="fas fa-search"></i></button> </li>
        </ul>
      </div>
    </nav>
  </section>
  <div class="container mt-5 ">

    <!--Section: Content-->
    <section class="text-center dark-grey-text">

      <!-- Section heading -->
      <h3 class="font-weight-bold mb-4 pb-2">Informacion sobre el diseñador</h3>

      <div class="wrapper-carousel-fix">
        <!-- Carousel Wrapper -->
        <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
        data-interval="false">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <!--First slide-->
          <div class="carousel-item active">
            <div class="testimonial">
              <!--Avatar-->
              <div class="avatar mx-auto mb-4">
                <img src="images/yo.png" class="rounded-circle img-fluid" width="173" height="150" 
                alt="First sample avatar image">
              </div>
              <!--Content-->
              <p>
                <i class="fas fa-quote-left"></i> 
                <i>Universidad Tecnologica de Coahuila</i><br>
                <i>Alumno: Fabian Ibarra Carrizales</i><br>
                <I>Maestro: David Lopez Belmares</I><br>
                <I>Materia: Aplicaciones web orientada a servicios</I><br>
                <I>Especialidad: Desarrollo de software multiplataforma</I><br>
                <I>Tecnologías empleadas: Mdbootstrap y Boostrap 4</I>   <i class="fas fa-quote-right"></i> 

              </p>

              <!--Review-->
              <i class="fas fa-star blue-text"> </i>
              <i class="fas fa-star blue-text"> </i>
              <i class="fas fa-star blue-text"> </i>
              <i class="fas fa-star blue-text"> </i>
              <i class="fas fa-star-half-alt blue-text"> </i>
              <p></p>
              
            
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 </div>
</div>

<br>
<br>
<br>

</section>

<footer class="page-footer font-small aqua-gradient py-3">

  <!-- Footer Elements -->
  <div class="container">

    <div class="row">
      <div class="col-md-6 d-flex justify-content-start">
        <!-- Copyright -->
        <div class="footer-copyright text-center bg-transparent">© 2020 Copyright:
          <a href="#"> Fabis</a>
        </div>
        <!-- Copyright -->
      </div>
      <div class="col-md-6 d-flex justify-content-end">

        <ul class="list-unstyled d-flex mb-0">
          <li>
            <a class="mr-3" role="button" href="https://www.facebook.com/fabis.ibarra.71/"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a class="mr-3" role="button" href=""><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a class="" role="button"><i class="fab fa-youtube"></i></a>
          </li>
        </ul>
      </div>
    </div>

  </div>
  <!-- Footer Elements -->

</footer>
<!-- Footer -->

</body>
</html>
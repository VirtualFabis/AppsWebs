<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio</title>

  <style>

 .select-css {
  display: block;
  font-size: 16px;
  font-family: sans-serif;
  font-weight: 700;
  color: #444;
  line-height: 1.3;
  padding: .6em 1.4em .5em .8em;
  width: 100%;
  max-width: 100%; /* useful when width is set to anything other than 100% */
  box-sizing: border-box;
  margin: 0;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  border-radius: .5em;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  background-color: #fff;
  /* note: bg image below uses 2 urls. The first is an svg data uri for the arrow icon, and the second is the gradient. 
    for the icon, if you want to change the color, be sure to use `%23` instead of `#`, since it's a url. You can also swap in a different svg icon or an external image reference
    
  */
  background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
    linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
  background-repeat: no-repeat, repeat;
  /* arrow icon position (1em from the right, 50% vertical) , then gradient position*/
  background-position: right .7em top 50%, 0 0;
  /* icon size, then gradient */
  background-size: .65em auto, 100%;
}
/* Hide arrow icon in IE browsers */
.select-css::-ms-expand {
  display: none;
}
/* Hover style */
.select-css:hover {
  border-color: #888;
}
/* Focus style */
.select-css:focus {
  border-color: #aaa;
  /* It'd be nice to use -webkit-focus-ring-color here but it doesn't work on box-shadow */
  box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
  box-shadow: 0 0 0 3px -moz-mac-focusring;
  color: #222; 
  outline: none;
}

/* Set options to normal weight */
.select-css option {
  font-weight:normal;
}

/* Support for rtl text, explicit support for Arabic and Hebrew */
*[dir="rtl"] .select-css, :root:lang(ar) .select-css, :root:lang(iw) .select-css {
  background-position: left .7em top 50%, 0 0;
  padding: .6em .8em .5em 1.4em;
}



</style>

</head>
<body>
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark  black">

    <a class="navbar-brand" href="#"><img src="images/logo.png"width= "160" height="70"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" >
          <span class="sr-only">(current)</span>
        </a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto nav-flex-icons">

      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
         <b><p class="fw-bold" style="color: white;">GIMNASIOS</p></b>

       </a>
     </li>
     <li class="nav-item">
      <a class="nav-link waves-effect waves-light">
       <b><p class="fw-bold" style="color: white;">TU ESPACIO</p></b>

     </a>
   </li>
   <li class="nav-item">
    <a class="nav-link waves-effect waves-light">
     <b><p class="fw-bold" style="color: w<b>hite;">BLOG</p></b>

   </a>
 </li>
 <li class="nav-item">
  <a class="nav-link waves-effect waves-light">
   <b><p class="fw-bold" style="color: white;">PROMOCIONES</p></b>

 </a>
</li>
<li class="nav-item">
  <a class="nav-link waves-effect waves-light">
   <b><p class="fw-bold" style="color: white;">SMART FIT GO</p></b>

 </a>
</li>
<li class="nav-item">
  <a class="nav-link waves-effect waves-light"  data-toggle="modal" data-target="#select">
   <i class="fas fa-align-justify fa-lg"></i>
 </a>
</li>
</ul>
</div>
</nav>

       <form method="POST" action="res.php">

  <div class="modal fade" id="select" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog"  >
                  <div class="modal-content" >
                    <div class="modal-header" >
                      <h5 class="modal-title" id="exampleModalLabel">¡Registrate!</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" >

                        <span>Registrar</span>
                        <!--Panel 8-->

                        <!--Body-->
                          <!-- nombre -->
                          <div class="md-form input-with-post-icon">
                            <i class="fas fa-user input-prefix"></i>
                            <input type="text" id="nombre" class="form-control" name="nombre" autofocus >
                            <label for="nombre">Nombre</label>
                          </div>

                          <!-- Email -->
                          <div class="md-form input-with-post-icon">
                            <i class="fas fa-at input-prefix"></i>
                            <input type="email" id="email" class="form-control" name="email" >
                            <label for="email">Email</label>
                          </div>


 <div class="md-form input-with-post-icon">
                          <select name="ciudad" class="select-css" >
              <option value="Saltillo"><i class="fas fa-desktop"></i>Saltillo</option>
              <option value="Monterrey" ><i class="fas fa-tasks"></i>Monterrey</option>
              <option value="Arteaga"><i class="fas fa-hand-holding-usd"></i>Arteaga</option>
              <option value="Parras"><i class="far fa-object-ungroup"></i>Parras</option>
              <option value="Hidalgo"><i class="fas fa-chart-line"></i>Hidalgo</option>
              <option value="Sinaloa"><i class="fas fa-calendar-check"></i>Sinaloa</option>
                            <option value="Sabinas"><i class="fas fa-calendar-check"></i>Sabinas</option>
              <option value="Torreon"><i class="fas fa-calendar-check"></i>Torreon</option>
              <option value="Piedras Negras"><i class="fas fa-calendar-check"></i>Piedras Negras</option>
              <option value="Ramos Arizpe"><i class="fas fa-calendar-check"></i>Ramos Arizpe</option>


            </select>
   </div>



                          <!-- Celular -->
                          <div class="md-form input-with-post-icon">
                            <i class="fas fa-mobile-alt input-prefix"></i>
                            <input type="number" id="celular" class="form-control" name="celular" >
                            <label for="celul">Celular</label>
                          </div>


                          <div class="md-form input-with-post-icon">
                          <select name="plan" class="select-css" >
              <option value="Plan Black"><i class="fas fa-desktop"></i>Plan Black</option>
              <option value="Plan Smart" ><i class="fas fa-tasks"></i>Plan Smart</option>
            </select>
   </div>

                          <div class="md-form input-with-post-icon">

        <input  type="date" name="fecha"class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" />
</div>


                          <!-- Password -->
                          <div class="md-form input-with-post-icon">
                            <i class="fas fa-unlock input-prefix"></i>
                            <input type="password" id="clave" class="form-control" name="clave" >
                            <label for="password">Calve de registro</label>
                          </div>

                    
                  <div class="modal-footer" >
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button  name="enviar" id="enviar" type="submit" class="btn btn-primary " >Enviar</button>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
              
</form>
<div class="view overlay">
  <img class="card-img-top" src="images/img.png"
  alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>



<div class=" my-11 p-5 z-depth-10 unique-color-dark">


  <!--Section: Content-->
  <section class="text-center white-text">


    <center><h2><strong>ELIGE <a style="color: orange;"> TU PLAN</a>
    </h2><h4>Entrena con nosotros eligiendo u n plan. Todos incluyen las áreas de cardio, peso integrado, peso libre, funcional, vestidores y más...
    </h4></center>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">

          <!-- Card -->
          <div class="card card-cascade">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header black">

              <!-- Title --><br>
              <center><h2 class="card-header-title mb-3" style="color: white;">PLAN</h2><h1 class="card-header-title mb-3" style="color: orange;">
              BLACK</h1></center>

            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center ">

             <h2 style="color: black" style="background-color: black;">
              DESDE
              $ 499.00

            </h2>
            <!-- Text --><br><br>
            <h5 style="color: black">
              Entrena en cualquiera de nuestras unidades en América Latina
            </h5>



            <br>
            <hr>
            <h2 style="color: black">
              BENEFICIOS

            </h2>
            <h5 style="color: black"><br>
              <n>Area de peso libre y peso integrado<br><br>

                Sillones de masaje<br><br>

                Acceso ilimitado<br><br>

                Acceso a otras unidades de la cadena<br><br>

                Playera exclusiva<br><br>

                Invitar un amigo<br><br>

              Cabina de colágeno</n><br><br>


            </h5>

            <button class="btn btn-red btn-mg my-2 my-sm-0 ml-3" type="submit">INCRIBETE AHORA</button>

          </div>

        </div>
        <!-- Card -->    </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-3">

          <!-- Card -->
          <div class="card card-cascade">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header orange">

              <!-- Title --><br>
              <center><h2 class="card-header-title mb-3" style="color: white;">PLAN</h2><h1 class="card-header-title mb-3" style="color: black;">
              SMART</h1></center>

            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center ">

             <h2 style="color: black" style="background-color: orange;">
              DESDE
              $ 299.00

            </h2>
            <!-- Text --><br><br>
            <h5 style="color: black">
              Entrena cuando quieras en una sola unidad

            </h5>



            <br>
            <hr>
            <h2 style="color: black">
              BENEFICIOS

            </h2>
            <h5 style="color: black"><br>
              <n>Area de peso libre y peso integrado<br><br>

                Acceso ilimitado<br><br>

                Sin cargo de cancelación<br><br>


<br><br>
<br><br>
<br><br>
<br><br>
<br>

              </h5>

              <button class="btn btn-red btn-mg my-2 my-sm-0 ml-3" type="submit">INCRIBETE AHORA</button>
            </div>
          </div>
            </div>
          </div>
            </div>
          </div>
            </div>
          </div>

          </section>

<br>
          <center><h2><strong>¡Conocé tu <a style="color: orange;">nueva Smart Fit!</a>
    </h2><h4>Entrenamiento online, nutricionistas vía videollamada, ¡además de más de 900 unidades en Latinoamérica!

    </h4>

  <div class="container">
      <div class="row">
     <div class="col-sm">
<br>
<br><br>
<br>
<br><br><br>
<br><br>
<h4><strong>Una experiencia completa
para que cuides tu salud donde quieras.</h4>   
        </div>
        <div class="col-sm">

  <img src="images/smart.png"
  alt="Card image cap" width="600px" height="500px">
</div>
</center>
        </body>
        </html>
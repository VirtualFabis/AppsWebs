<?php 

ob_start();

?>
<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Clave</title>
</head>
<body>
	<section>	

		<!--Navbar -->
		<nav class="mb-1 navbar navbar-expand-lg navbar-dark  peach-gradient">

			<a class="navbar-brand" href="#"><img src="images/logo.png"width= "150" height="70"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
			aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
			
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
				<li class="nav-item">
				</li>

			</ul>
		</div>
	</nav>
</section>
	<?php 
 
//contraseña a utilizar
$clave = "842491";
 
//comprobamos si se ha pasado la contraseña al formulario
if (isset($_POST['clave'])) {
 //si la contraseña es erronea mandamos al formulario de nuevo
 if ($_POST['clave'] != $clave) { 
  echo '
  <form name="form" method="post" action="">
 
<div class="container my-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text p-5">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-5 mb-4 mb-md-0">

        <div class="view">
          <img src="https://mdbootstrap.com/img/illustrations/undraw_Group_chat_unwm.svg" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-7 mb-lg-0 mb-4">

        <!-- Form -->

          <!-- Section heading -->
          <h3 class="font-weight-bold my-3">Clave Incorrecta</h3>
          
          <p class="text-muted mb-4 pb-2">El contenido de esta pagina esta protegido necesitas una clave para entrar a esta pagina web.</p>
 
          <div class="input-group">
            <input type="password" class="form-control" placeholder="Enter your Key" aria-label="Enter your Key" name="clave" 
              aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-md btn-peach-gradient  rounded-right m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" value="login" id="button-addon2">Entrar</button>
            </div>
          </div>
         
          
        </form>
        <!-- Form -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
    
  </section>
  <!--Section: Content-->

 </form>
  ';
 }
 //accedemos al panel privado
 else{
  //inciamos sesion
  session_start();
 
  //mostramos contenido protegido
 		header('Location: usuarios.php');

 
  //enalce para cerrrar sesion

 
  //si pasamos 'logout' por get cerramos la sesion
  if (isset($_GET['logout'])) {
   if($_GET['logout']==1) session_destroy();
  }   
 }
}
//al no pasar contraseña enviamos al formulario de inicio
else{
 echo '
 <form name="form" method="post" action="">
 
<div class="container my-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text p-5">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-5 mb-4 mb-md-0">

        <div class="view">
          <img src="https://mdbootstrap.com/img/illustrations/undraw_Group_chat_unwm.svg" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-7 mb-lg-0 mb-4">

        <!-- Form -->

          <!-- Section heading -->
          <h3 class="font-weight-bold my-3">Ingresa la Clave</h3>
          
          <p class="text-muted mb-4 pb-2">El contenido de esta pagina esta protegido necesitas una clave para entrar a esta pagina web.</p>
 
          <div class="input-group">
            <input type="password" class="form-control" placeholder="Enter your Key" aria-label="Enter your Key" name="clave" 
              aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-md btn-peach-gradient  rounded-right m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" value="login" id="button-addon2">Entrar</button>
            </div>
          </div>
         
          
        </form>
        <!-- Form -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
    
  </section>
  <!--Section: Content-->

 </form>
 ';
}
?>



</div>

</body>
</html>
<?php
ob_end_flush();
?>
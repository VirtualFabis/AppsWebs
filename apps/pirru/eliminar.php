
<?php 

ob_start();

?>

<?php 

require_once 'cdn.html';
require_once 'cnn.php';

require_once 'conexion.php';


?>


<?php 
require_once 'cnn.php';

//se verifica si se presiona el botón llamado validar
if (isset($_POST['eliminar']))
{
  //se guarda en las variables$us y $ps
  $password=$_POST['password'];
  
  //Query de consulta
  $query = $cnnPDO->prepare('DELETE from clientes WHERE password =:password');

  //Manejo de parámetros
  $query->bindParam(':password', $password);

  //Execución del query
  $query->execute(); 

  

}

?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
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

	<!-- JQuery Validate library -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

	<!-- Libreria de sweetalert 2-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />

	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<title>Saldo</title>
	<link rel="icon" href="img/icono.png">

</head>
<body>
	<style type="text/css">
		@media screen (max-width:1024px) and (min-width: 600px){

		}

		html {
			min-height: 100%;
			position: relative;
		}
		body {
			margin: 0;
			margin-bottom: 40px;
		}
		footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 50px;

		}

	
	</style>
<nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
    <a class="navbar-brand" href="#"><img src="img/www.jpg" width="130"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">

      <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">

  <li class="nav-item">
        <li class="nav-item">
        <a class="nav-link" href="index.php">||Regresar||</a>
      </li>
        
      </div>
  </nav>


  <form method="post" action="">
 
<div class="container">
    <div class="row">
      <div class="col-3">
        <!-- Columna sin mostrar informacion -->
      </div>

      <div class="col-6">
       <div class="card">

 <h5 class="card-header black-text text-center py-4 white-text" style="background-color: #FFAD00">
          <strong>Si deseas eliminar tu cuenta, ingresa tu contaseña</strong>

        </h5>
        <!--Card content-->
        <div class="card-body px-lg-5">


        <!--Body-->
        <form method="POST" >

          <div class="modal-body mb-1">
            <div class="md-form form-sm mb-5">
             <i class="fas fa-unlock prefix"></i>
              <input type="password" id="modalLRInput10"  name ="password"  class="form-control form-control-sm validate">
              <label data-error="wrong" data-success="right" for="modalLRInput10">Ingresa tu contaseña</label>
            </div>


            <div class="text-center mt-2">
              <button type="submit"  name="eliminar" class="btn btn-danger" > Eliminar <i class="fas fa-sign-in ml-1"></i></button>
            </div>
          </div>
  </div>

        </div>
      </div>
    </div>
        </div>
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







<br>

</body>
</html>


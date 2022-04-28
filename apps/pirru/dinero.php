<?php 

ob_start();

?>

<?php 

require_once 'cdn.html';
require_once 'cnn.php';

require_once 'conexion.php';


?>


<!DOCTYPE html>
<html>
<head>


	<title>Bienvenido</title>
	<link rel="icon" href="images/xd.png" />

</head>
<body>


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




	<div class="container">
    <div class="row">
      <div class="col-3">
        <!-- Columna sin mostrar informacion -->
      </div>

      <div class="col-6">
       <div class="card">

 <h5 class="card-header black-text text-center py-4 white-text" style="background-color: #FFAD00">
          <strong>Registrar Nuevo Perfil</strong>

        </h5>
        <!--Card content-->
        <div class="card-body px-lg-5">


				<!--Body-->
				<form method="POST" >

					<div class="modal-body mb-1">
						<div class="md-form form-sm mb-5">
							<i class="fas fa-user prefix"></i>
							<input type="number" id="modalLRInput10"  name ="cuenta"  class="form-control form-control-sm validate">
							<label data-error="wrong" data-success="right" for="modalLRInput10">Numero de cuenta</label>
						</div>


						<div class="text-center mt-2">
							<button type="submit"  name="buscar" class="btn btn-info" > Buscar <i class="fas fa-sign-in ml-1"></i></button>
						</div>
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
	<?php
	if (isset($_POST['buscar'])) 
	{

		$cuenta =$_POST['cuenta'];
		$sql = "SELECT * FROM clientes  where cuenta='$cuenta'"; 
		$query = $cnnPDO -> prepare($sql); 
		$query -> execute(); 
		$results = $query -> fetchAll(PDO::FETCH_OBJ); 



		if($query -> rowCount() > 0)   { 

			foreach($results as $result) { 

				echo " 
				
	<div class='container'>
    <div class='row'>
      <div class='col-3'>
        <!-- Columna sin mostrar informacion -->
      </div>

      <div class='col-6'>
       <div class='card'>

 <h5 class='card-header black-text text-center py-4 white-text' style='background-color: #FFAD00'>
          <strong>Datos del usuario</strong>

        </h5>
        <!--Card content-->

				<div class='card testimonial-card'>

				<div class='card-up indigo lighten-1'></div>


				<div class='avatar mx-auto white'>
				<img src='".$result -> foto."' class='rounded-circle'
				alt='woman avatar' width='200' height='200'>
				</div>

				<div class='card-body'>

				<h3 class='card-title'>".$result -> nombre."</h3>
				<p> 
				<h4>Numero de cuenta: ".$result -> cuenta."</h4>

				<h4>Email: ".$result -> email."</h4>
				<h4>Banco: ".$result -> banco."</h4>
				<h4>Saldo: $".$result -> dinero." Pesos</h4>
				</p>

			
				";

				?>
			</form>





<br>
			<form    method="post" enctype="multipart/form-data">

				<div class='container'>

					<div class='col-sm-5'>

						<div class="form-group">
							<label><h4>Depositar</h4></label>
							<input type="number" autocomplete="off" name="dinero" id="dinero" value="" class="form-control" placeholder="Cantidad" data-validacion-tipo="requerido|min:3" />
						</div>


						<input type="hidden" name="n" value="<?php echo "" .$result-> cuenta. ""; ?>" />




								<button class="btn btn-dark" type="submit" name="confirmar" id="confirmar">Confirmar</button>
						
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

					<?php 
				}
			}

		}

		?>	

		<?php  
		if (isset($_POST['confirmar'])) 
		{

			$n=$_POST['n'];
			$dinero=$_POST['dinero'];
			$sql = "UPDATE clientes SET dinero = dinero + '$dinero' where cuenta='$n' "; 
			$query = $cnnPDO -> prepare($sql); 
			$query -> execute(); 

			

		}

		?>

		<br>

	</body>
	</html>


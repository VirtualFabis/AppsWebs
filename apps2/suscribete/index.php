<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>


/
<?php
     //Valida que el usuario hizo clik en el Boton 
if (isset($_POST['registrar'])) 
{
    //Trae datos del formulario
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$celular=$_POST['celular'];
	$ingreso=$_POST['ingreso'];
	$password=$_POST['password'];

        //Validar que las cajas no esten vacias
	if (!empty($nombre) && !empty($email) && !empty($celular) && !empty($ingreso) && !empty($password))
	{
              //Insertar datos en la tabla de la db  
		$sql=$cnnPDO->prepare("INSERT INTO inicio
			(nombre, email, celular, ingreso, password) VALUES (:nombre, :email, :celular, :ingreso, :password)");

              //Asignar las variables a los campos de la tabla
		$sql->bindParam(':nombre',$nombre);
		$sql->bindParam(':email',$email);
		$sql->bindParam(':celular',$celular);
		$sql->bindParam(':ingreso',$ingreso);
		$sql->bindParam(':password',$password);

              //Ejecutar la variable $sql
		$sql->execute();
		unset($sql);
		unset($cnnPDO);
	}
           // header("location:index.php"); 
}
?>


<!-- Códigos de BUSQUEDA -->
<?php 

//se verifica si se presiona el botón llamado validar
if (isset($_POST['buscar']))
{
	//se guarda en las variables$us y $ps
	$email=$_POST['email'];
	
	//Query de consulta
	$query = $cnnPDO->prepare('SELECT * from inicio WHERE email =:email');

	//Manejo de parámetros
	$query->bindParam(':email', $email);

	//Execución del query
	$query->execute(); 
	$count=$query->rowCount();

	//Asigna los datos del registro a la variable $campo
	$campo = $query->fetch();
	
}

?>
<!-- Códigos de ACTUALIZAR -->
<?php
     //Valida que el usuario hizo clik en el Boton 
if (isset($_POST['actualizar'])) 
{
    //Trae datos del formulario
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$celular=$_POST['celular'];
	$ingreso=$_POST['ingreso'];
	$password=$_POST['password'];

        //Validar que las cajas no esten vacias
	if (!empty($nombre) && !empty($email) && !empty($celular) && !empty($ingreso) && !empty($password))
	{
               //Actualizamod los datos en la tabla de la db  
		$sql = $cnnPDO->prepare(
			'UPDATE inicio SET nombre = :nombre, email = :email, celular = :celular, ingreso = :ingreso, password = :password WHERE email = :email'
		);

              //Asignar las variables a los campos de la tabla
		$sql->bindParam(':nombre',$nombre);
		$sql->bindParam(':email',$email);
		$sql->bindParam(':celular',$celular);
		$sql->bindParam(':ingreso',$ingreso);
		$sql->bindParam(':password',$password);

              //Ejecutar la variable $sql
		$sql->execute();
		unset($sql);
		unset($cnnPDO);
	}
           // header("location:index.php"); 
}
?>
<!-- Códigos de ELIMINAR -->

<?php 

//se verifica si se presiona el botón llamado validar
if (isset($_POST['eliminar']))
{
	//se guarda en las variables$us y $ps
	$email=$_POST['email'];
	
	//Query de consulta
	$query = $cnnPDO->prepare('DELETE from inicio WHERE email =:email');

	//Manejo de parámetros
	$query->bindParam(':email', $email);

	//Execución del query
	$query->execute(); 
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Suscribete!</title>
	<!-- icono de la pagina -->
	
	<style type="text/css">
		body{
		}
		
		p{
			text-align: center;
		}

	</style>
</head>
<body>


	
	<div class="container ">

		
		<div class="col-sm-7">
			<div class="card">

				<h5 class="card-header info-color white-text text-center py-4">


					<strong>Ingrase tus datos</strong>
				</h5> 

				<!--Card content-->
				<div class="card-body px-lg-3 pt-0">
					<br>


					<!-- Form -->
					<form class="login" method="post">

						<div class="md-form">
							<i class="fas fa-user prefix"></i>
							<input type="text" id="inputValidationEx" class="form-control validate" name = "nombre" value="<?php if (isset($_POST['buscar'])) echo $campo['nombre']?>">

							<label for="inputValidationEx" data-error="wrong" data-success="right">Nombre </label>
						</div>

						<!-- Material input -->
						<div class="md-form">
							<i class="fas fa-envelope prefix"></i>
							<input type="email" id="inputValidationEx" class="form-control validate" name = "email" value="<?php if (isset($_POST['buscar'])) echo $campo['email']?>">
							<label for="inputValidationEx" data-error="wrong" data-success="right">Correo</label>
						</div>


						<!-- Material input -->
						<div class="md-form">
							<i class="fas fa-mobile prefix  ml-10" aria-hidden="true"></i>
							<input type="text" id="inputValidationEx" class="form-control validate" name = "celular" value="<?php if (isset($_POST['buscar'])) echo $campo['celular']?>">
							<label for="inputValidationEx" data-error="wrong" data-success="right">Celular</label>
						</div>

						<div class="md-form">
							<i class="fas fa-angry prefix"></i>
							<input type="text" id="inputValidationEx" class="form-control validate" name = "ingreso" value="<?php if (isset($_POST['buscar'])) echo $campo['ingreso']?>">
							<label for="inputValidationEx" data-error="wrong" data-success="right">Ingreso Mensual</label>
						</div>

						<div class="md-form form-sm mb-4">
							<i class="fas fa-lock prefix"></i>
							<input type="password" id="modalLRInput14" name="password" class="form-control form-control-sm validate" value="<?php if (isset($_POST['buscar'])) echo $campo['password']?>">

							<label data-error="wrong" data-success="right" for="modalLRInput14">Contraseña</label>
						</div>


						<center>


							<button type="submit"class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"  name="registrar">Registrate</button>
							<!-- Register -->

							<button type="submit"class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"  name="buscar">buscar</button>

							<button type="submit"class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"  name="actualizar">actualizar</button>
							<button type="submit"class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"  name="eliminar">eliminar</button>

						</form>
						<!-- Form -->

					</div>

				</div>
				<!-- Material form login -->
			</div>
		</div></center>

	</body>
	</html>
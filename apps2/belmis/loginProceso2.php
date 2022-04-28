<?php
ob_start() ;
?>
<?php 
session_start();
include_once 'cnn.php';

$email = $_POST['email'];
$contrasena = $_POST['password'];
$sentencia = $cnnPDO->prepare('select * from xd where 
	password = ? and email = ?;');
$sentencia->execute([$contrasena,$email]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);


 $xd = $cnnPDO->prepare('select * from tarjeta;');
$xd->execute();
$datos2 = $sentencia->fetch(PDO::FETCH_OBJ);



if ($datos === FALSE) {

$message = "Error! Verifica  tu  Usuario o Contraseña";
			echo "<script type='text/javascript' >alert('$message');
				 window.location.href = 'sesion.php';
			</script>";

}


elseif($sentencia->rowCount() == 1){
	$_SESSION['email'] = $datos->email;
	$_SESSION['password'] = $datos->password;
		$_SESSION['nombre'] = $datos->nombre;
		$_SESSION['celular'] = $datos->celular;
	
	header('Location: subir.php');

}


?>
<?php
ob_end_flush();
?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="icon" href="images/vendo.png" />
      <title>ERROR</title>

</head>
<body>

</body>
</html>
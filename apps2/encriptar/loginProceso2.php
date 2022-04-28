<?php
ob_start() ;
?>
<?php 
session_start();
include_once 'cnn.php';

$email = $_POST['email'];
$contrasena = $_POST['password'];
$sentencia = $cnnPDO->prepare('select nombre,email,celular,aes_decrypt(password,AES) from uwu2 where 
	email = ? and password = ?;');
$sentencia->execute([$email]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);





if ($datos === FALSE) {

$message = "Error! Verifica  tu  Usuario o Contraseña";
			echo "<script type='text/javascript' >alert('$message');
				 window.location.href = 'sesion.php';
			</script>";

}


elseif($sentencia->rowCount() == 1){
	$_SESSION['email'] = $datos->email;
		$_SESSION['nombre'] = $datos->nombre;
		$_SESSION['celular'] = $datos->celular;


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
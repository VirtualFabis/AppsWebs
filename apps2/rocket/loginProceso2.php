<?php
ob_start() ;
?>
<?php 
session_start();
include_once 'cnn.php';
$contrasena = $_POST['password'];
	$email=$_SESSION['email'];
$sentencia = $cnnPDO->prepare('select * from xd where 
	password = ? and email = ?;');
$sentencia->execute([$contrasena,$email]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);



if ($datos === FALSE) {
	header('Location: contraseña.php');


}
elseif($sentencia->rowCount() == 1){
	$_SESSION['password'] = $datos->password;
		$_SESSION['nombre'] = $datos->nombre;
		$_SESSION['celular'] = $datos->celular;
		$_SESSION['ingreso'] = $datos->ingreso;

	header('Location: principal.php');
}
?>
<?php
ob_end_flush();
?>
<?php
ob_start() ;
?>
<?php 
session_start();
include_once 'cnn.php';
$usuario = $_POST['email'];

$sentencia = $cnnPDO->prepare('select * from xd where 
	email = ? ;');
$sentencia->execute([$usuario]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);


if ($datos === FALSE) {

	$message = "Error! Verifica  tu  email";
	header('Location: datos.php');
}elseif($sentencia->rowCount() == 1){
	$_SESSION['email'] = $datos->email;
	header('Location: contraseña.php');
}
?>
<?php
ob_end_flush();
?>
<?php
ob_start();
?>
<?php 
session_start();
include_once 'db.php';

?>

?>
<?php
if (isset($_POST['enviar']))
{

//  $emailcontacto = "Tu email";
	$emailcontacto = $_POST['email'];
// asunto del email
	$asunto = "¡Gracias por suscribirte a mi sitio!";
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$cabeceras .= 'From: '.$_POST['email'].'\r\n';
// Cuerpo del mensaje
	$mensaje = ' Nombre  : '.$_POST['nombre'].' <br>  
	apellidos   : '.$_POST['apellidos'].' <br>
	genero : '.$_POST['genero'].' <br>

	';
    // Utilizamos la funcion mail de php para enviar el correo

	(mail($emailcontacto, $asunto, $mensaje, $cabeceras));
}
?>
<?php

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['email'];
$genero = $_POST['genero'];
$fecha = $_POST['fecha'];
$psw = $_POST['contrasena'];



        //Validar que las cajas no esten vacias
$sql=$cnnPDO->prepare("INSERT INTO registros
	(nombre, apellidos, correo, genero, fecha, psw) VALUES (:nombre, :apellidos, :correo, :genero, :fecha, :psw)");

$sql->bindParam(':nombre', $nombre);
$sql->bindParam(':apellidos', $apellidos);
$sql->bindParam(':correo', $correo);
$sql->bindParam(':genero', $genero);
$sql->bindParam(':fecha', $fecha);
$sql->bindParam(':psw', $psw);

              //Ejecutar la variable $sql

$sql->execute();
unset($sql);
unset($cnnPDO);

header('Location: index.php');






?>
<?php
ob_start() ;
?>
<?php 
session_start();
include_once 'cnn.php';

?>
<?php  
session_start();
if (!isset($_SESSION['email'])) {
	header('Location: sesion.php');
	
}elseif(isset($_SESSION['email'] )){
	include 'cnn.php';

	$sentencia = $cnnPDO->query("SELECT * FROM user;");
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
	$number=$_SESSION['celular'];

}
else{
	echo "Error en el sistema";
}



?>

<?php

    //Trae datos del formulario
$id=$_POST['id'];
$fecha=$_POST['fecha'];

$sql=$cnnPDO->prepare("INSERT INTO actividad
	(id, fecha) VALUES (:id, :fecha)");

              //Asignar las variables a los campos de la tabla
$sql->bindParam(':id',$id);
$sql->bindParam(':fecha',$fecha);


              //Ejecutar la variable $sql
$sql->execute();
unset($sql);
unset($cnnPDO);



?>


<?php 

define ('WB_TOKEN', '1dc8dd439daa16070dbf63b6d6dd279f606fbf45ebd49');

define ('WB_FROM', '14067705922');


function sendMessageCurl($to, $msg){
	
	$to = filter_var($to, FILTER_SANITIZE_NUMBER_INT);

	if (empty($to)) return false;

	$msg = urlencode($msg);

	$custom_uid = "unique-" . time() ;

	$url = "https://www.waboxapp.com/api/send/chat?token=" . WB_TOKEN . "&uid=" . WB_FROM . "&custom_uid=" . $custom_uid . "&to=" . $to . "&text=" . $msg;

	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$result = curl_exec($curl);
	curl_close($curl);

	if ($result) return json_decode($result);

	return false;

}

function sendImageCurl($to, $url_image, $caption = '', $description = ''){
	
	$to = filter_var($to, FILTER_SANITIZE_NUMBER_INT);

	if (empty($to)) return false;

	$url_image = urlencode($url_image);
	$caption = urlencode($caption);
	$description = urlencode($description);
	

	$custom_uid = "unique-" . time() ;

	$url = "https://www.waboxapp.com/api/send/image?token=" . WB_TOKEN . "&uid=" . WB_FROM . "&custom_uid=" . $custom_uid . "&to=" . $to . "&url=" . $url_image."&caption=".$caption."&description=".$description;

	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$result = curl_exec($curl);
	curl_close($curl);

	if ($result) return json_decode($result);

	return false;

}


$msg = 'Actividad reciente en tu dispositivo ';

$msg.='Verifa si eres tu!!';

//change 59312345678 to a phone number destination
$result = sendMessageCurl($number,$msg);


print_r($result);





?>
<?php 
header('Location: sebas.php');


?>

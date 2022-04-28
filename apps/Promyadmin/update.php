<?php 
session_start();
$db = $_SESSION['db'];
$tabla = $_SESSION['tabla'];
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telef = $_POST['telefono'];

$con = mysqli_connect('localhost','root','', $db);
$procedure= "CALL update_" . $tabla . " ('$id','$nombre','$correo', '$telef');";
mysqli_query($con, $procedure);
echo $procedure;
 ?>
 <script type="text/javascript">
 	alert("<?php echo $procedure; ?>");
 	window.location="./";
 </script>
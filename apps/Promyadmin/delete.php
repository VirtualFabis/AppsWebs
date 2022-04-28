<?php 
session_start();
$db = $_SESSION['db'];
$tabla = $_SESSION['tabla'];
$id = $_POST['id'];


$con = mysqli_connect('localhost','root','', $db);
$procedure= "CALL delete_" . $tabla . " ('$id');";


mysqli_query($con, $procedure);
echo $procedure;
 ?>
 <script type="text/javascript">
 	alert("<?php echo $procedure; ?>");
 	window.location="./";
 </script>
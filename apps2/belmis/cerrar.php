<?php 
ob_start();
 ?>


<?php  
	session_start();
	session_destroy();
	header('Location:sesion.php');
?>
<?php
ob_end_flush();
?>
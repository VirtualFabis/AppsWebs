<?php 
foreach ($_POST as $post) {
	echo $post;
}
session_start();
session_destroy();
session_start();

if ($_POST['nombre'] == "cnbddpeqc") {
	$_SESSION['db'] = "cnbddpeqc";
}else{
	
	$_SESSION['db'] = $_POST['nombre'];
}

?>
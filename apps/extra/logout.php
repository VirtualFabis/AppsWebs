<?php
session_start();
session_destroy();
unset($_SESSION['nsocio']);
header("location:index.php");
?>
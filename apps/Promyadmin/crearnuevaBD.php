<?php 
$con = mysqli_connect('localhost', 'root', '');
$db = $_POST['ndb'];
$sql = "CREATE DATABASE " . $db . ";";
echo $sql;
mysqli_query($con, $sql);
 ?>
 <script type="text/javascript">
 	window.location="./";
 </script>

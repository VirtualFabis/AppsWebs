<?php 
$con = mysqli_connect('localhost', 'root', '');


$datas = mysqli_query($con, "SHOW DATABASES;");
while($muestra = mysqli_fetch_array($datas)){
print $muestra['Database'] . "<br>";
}	
 ?>

<?php

$cnx = mysqli_connect("localhost","root","","fabis") or die("Error De Conexion");

$reiniciar=$_POST['reiniciar'];



$sql = "INSERT into movimiento
(reiniciar) values ('$reiniciar')";
echo mysqli_query($cnx,$sql);

?>
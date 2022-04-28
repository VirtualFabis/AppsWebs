<?php

$cnx = mysqli_connect("localhost","root","","fabis") or die("Error De Conexion");

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$password=$_POST['password'];


$encriptacionSHA1 = sha1($password);

$sql = "INSERT into user
(nombre, email, celular, password) values ('$nombre','$email','$celular','$encriptacionSHA1')";
echo mysqli_query($cnx,$sql);

?>
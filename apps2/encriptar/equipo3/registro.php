<?php


//CONEXION REMOTA

$cnx =mysqli_connect("localhost","id13773725_lizandreagarcia","AndreaLizbet1$","id13773725_db_web") or die("Error");
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$password = mysqli_real_escape_string($cnx, $_POST["password"]);
$password = md5($password);

$sql = "INSERT into ajax_usuario
(nombre, email, celular, password) values ('$nombre','$email','$celular','$password')";
echo mysqli_query($cnx,$sql);

?>
<?php 
session_start();
$bd= $_SESSION['db'];
$nombreta = $_POST['nombre'];
$con = mysqli_connect('localhost','root','',$bd);
$sql = "CREATE TABLE " . $nombreta ." (id int(2) AUTO_INCREMENT, nombre varchar(140), correo varchar(25),  telefono varchar(13), PRIMARY KEY (id));";

$insertar = "CREATE PROCEDURE insert_" . $nombreta . " (IN _nombre varchar(140), _correo varchar(25), _telefono varchar(13))
BEGIN INSERT INTO " . $nombreta . " (nombre, correo, telefono) VALUES (_nombre, _correo, _telefono); END;";

$select = "CREATE PROCEDURE select_" . $nombreta . " (IN _valor varchar(50))
BEGIN SELECT * FROM " . $nombreta . " WHERE id = _valor; END;";

$update = "CREATE PROCEDURE update_" . $nombreta . " (IN _id int(2), _nombre varchar(140), _correo varchar(25),  _telefono varchar(13))
BEGIN UPDATE " . $nombreta . " SET nombre = _nombre, correo = _correo, telefono = _telefono WHERE id = _id; END;";

$delete = "CREATE PROCEDURE delete_" . $nombreta . " (IN _id int(2))
BEGIN DELETE FROM " . $nombreta . " WHERE id = _id; END;";
mysqli_query($con, $sql);
mysqli_query($con, $insertar);
mysqli_query($con, $select);
mysqli_query($con, $update);
mysqli_query($con, $delete);



 ?>
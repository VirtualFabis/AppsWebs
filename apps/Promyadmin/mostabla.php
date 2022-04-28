<?php 

session_start();
$_SESSION['tabla'] = $_POST['nombre'];

$con =mysqli_connect('localhost','root','',$_SESSION['db']);
$campo = mysqli_query($con, "DESCRIBE " . $_SESSION['tabla'] . ";");


$insertar = "CREATE PROCEDURE insertar_" . $_SESSION['tabla'] . " (IN ";

while ($campos = mysqli_fetch_array($campo)) {
	$insertar .= "_" . $campos['Field'] . " " . $campos['Type'] . ", ";
}
$insertar .= ") BEGIN INSERT INTO " . $_SESSION['tabla'] . " (";

$campo = mysqli_query($con, "DESCRIBE " . $_SESSION['tabla'] . ";");
while ($campos = mysqli_fetch_array($campo)) {
	$insertar .= $campos['Field'] . ", ";
}
$insertar .= ") VALUES (";

$campo = mysqli_query($con, "DESCRIBE " . $_SESSION['tabla'] . ";");
while ($campos = mysqli_fetch_array($campo)) {
	$insertar .= "_" . $campos['Field'] . ", ";
}

$insertar.=");
END;";
mysqli_query($con, $insertar);
echo $insertar;




$consulta = "";

$update = "";

$delete = "";
 ?>
 <script type="text/javascript">
 	alert("<?php echo $insertar; ?>");
 </script>
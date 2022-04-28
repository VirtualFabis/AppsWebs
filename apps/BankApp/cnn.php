
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<?php

$db_host = 'mysql:dbname=fabis;host=localhost';
$usuario = 'root';
$contrasena = '';

/* Conectar a una base de datos de MySQL Host Utc */
//$db_host = 'mysql:dbname=id14598070_gisela;host=localhost';
//$usuario = 'id14598070_mariel';
//$contrasena = 'v0ea\km3SN0OvYT';
try {
 $cnnPDO = new PDO($db_host, $usuario, $contrasena);
} catch (PDOException $e) {

  echo "<div class='alert alert-danger'>
       //     <strong><h4>Ha surgido un error y no se puede conectar a la base de datos!</strong><br><br> Detalle:<br>." . $e->getMessage()."
       //  </div>";
      
}

?>

<?php
ob_start() ;
?>
<?php 
session_start();
include_once 'cnn.php';

?>
<?php

    //Trae datos del formulario
  $num_empleado=$_POST['num_empleado'];
  $nombre=$_POST['nombre'];


        //Validar que las cajas no esten vacias
  if (!empty($num_empleado) && !empty($nombre))
  {
              //Insertar datos en la tabla de la db  
    $sql=$cnnPDO->prepare("INSERT INTO profesores
      (num_empleado, nombre) VALUES (:num_empleado, :nombre)");

              //Asignar las variables a los campos de la tabla
    $sql->bindParam(':num_empleado',$num_empleado);
    $sql->bindParam(':nombre',$nombre);

              //Ejecutar la variable $sql
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
              
header('Location: profesor.php');


  
}
else{

  $message = "!Error Fatal Seleciona tus Datos!";
      echo "<script type='text/javascript' >alert('$message');
         window.location.href = 'profesor.php';
      </script>";
}
?>
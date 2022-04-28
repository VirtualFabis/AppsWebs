<?php
ob_start() ;
?>
<?php 
session_start();
include_once 'cnn.php';

?>
<?php

    //Trae datos del formulario
  $matricula=$_POST['matricula'];
  $nombre=$_POST['nombre'];
  $carrera=$_POST['carrera'];


        //Validar que las cajas no esten vacias
  if (!empty($matricula) && !empty($nombre) && !empty($carrera))
  {
              //Insertar datos en la tabla de la db  
    $sql=$cnnPDO->prepare("INSERT INTO alumnos
      (matricula, nombre, carrera) VALUES (:matricula, :nombre, :carrera)");

              //Asignar las variables a los campos de la tabla
    $sql->bindParam(':matricula',$matricula);
    $sql->bindParam(':nombre',$nombre);
      $sql->bindParam(':carrera',$carrera);
              //Ejecutar la variable $sql
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
              
header('Location: alumno.php');


  
}
else{

  $message = "!Error Fatal Seleciona tus Datos!";
      echo "<script type='text/javascript' >alert('$message');
         window.location.href = 'alumno.php';
      </script>";
}
?>
<?php
ob_start() ;
?>
<?php 
session_start();
include_once 'cnn.php';

?>
<?php

    //Trae datos del formulario
  $id_materia=$_POST['id_materia'];
  $nombre_materia=$_POST['nombre_materia'];


        //Validar que las cajas no esten vacias
  if (!empty($id_materia) && !empty($nombre_materia))
  {
              //Insertar datos en la tabla de la db  
    $sql=$cnnPDO->prepare("INSERT INTO materias
      (id_materia, nombre_materia) VALUES (:id_materia, :nombre_materia)");

              //Asignar las variables a los campos de la tabla
    $sql->bindParam(':id_materia',$id_materia);
    $sql->bindParam(':nombre_materia',$nombre_materia);


              //Ejecutar la variable $sql
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
              
header('Location: materias.php');


  
}
else{

  $message = "!Error Fatal Seleciona tus Datos!";
      echo "<script type='text/javascript' >alert('$message');
         window.location.href = 'materias.php';
      </script>";
}
?>
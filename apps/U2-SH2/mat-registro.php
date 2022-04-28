<?php
ob_start() ;
?>
<?php 
session_start();
include_once 'cnn.php';

?>
<?php

    //Trae datos del formulario
  $alumno=$_POST['alumno'];
  $profesor=$_POST['profesor']; 
   $materias=$_POST['materias'];

        //Validar que las cajas no esten vacias
  if (!empty($alumno) && !empty($profesor)  && !empty($materias))
  {
              
    $sql=$cnnPDO->prepare("INSERT INTO clases
      (alumno, profesor, materias) VALUES (:alumno, :profesor, :materias)");

              //Asignar las variables a los campos de la tabla
    $sql->bindParam(':alumno',$alumno);
    $sql->bindParam(':profesor',$profesor);
     $sql->bindParam(':materias',$materias);

              //Ejecutar la variable $sql
    
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
              
              
header('Location: materia-profesor.php');


  
}

else{

  $message = "!Error Fatal Seleciona tus Datos!";
      echo "<script type='text/javascript' >alert('$message');
         window.location.href = 'materia-profesor.php';
      </script>";
}
?>
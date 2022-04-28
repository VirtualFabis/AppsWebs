<?php
ob_start() ;
?>
<?php 
session_start();
include_once 'cnn.php';

?>
<?php

    //Trae datos del formulario
  $hora1=$_POST['hora1'];
  $hora2=$_POST['hora2']; 

        //Validar que las cajas no esten vacias
  if (!empty($hora1) && !empty($hora2))
  {
              
    $sql=$cnnPDO->prepare("INSERT INTO hora
      (hora1, hora2) VALUES (:hora1, :hora2)");

              //Asignar las variab1es a los campos de la tabla
    $sql->bindParam(':hora1',$hora1);
    $sql->bindParam(':hora2',$hora2);

              //Ejecutar la variable $sql
    
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
              
              
header('Location: ad.php');


  
}

else{

  $message = "!Error Fatal Seleciona las horas!";
      echo "<script type='text/javascript' >alert('$message');
         window.location.href = 'ad.php';
      </script>";
}
?>
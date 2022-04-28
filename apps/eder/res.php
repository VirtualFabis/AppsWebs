<?php
ob_start() ;
?>
<?php 
session_start();
include_once 'cnn.php';

?>
<?php

    //Trae datos del formulario
  $nombre=$_POST['nombre'];
  $email=$_POST['email'];
   $ciudad=$_POST['ciudad'];
  $celular=$_POST['celular'];
   $plan=$_POST['plan'];
  $fecha=$_POST['fecha'];
  $clave=$_POST['clave'];

        //Validar que las cajas no esten vacias
  if (!empty($nombre) && !empty($email)&& !empty($ciudad)&& !empty($celular)&& !empty($plan)&& !empty($fecha)&& !empty($clave))
  {
              //Insertar datos en la tabla de la db  
    $sql=$cnnPDO->prepare("INSERT INTO eder
      (nombre, email, ciudad, celular ,plan, fecha, clave) VALUES (:nombre, :email, :ciudad, :celular , :plan, :fecha, :clave) ");
              //Asignar las variables a los campos de la tabla
    $sql->bindParam(':nombre',$nombre);
    $sql->bindParam(':email',$email);
 $sql->bindParam(':ciudad',$ciudad);
    $sql->bindParam(':celular',$celular);
 $sql->bindParam(':plan',$plan);
    $sql->bindParam(':fecha',$fecha);
        $sql->bindParam(':clave',$clave);


              //Ejecutar la variable $sql
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
              
header('Location: index.php');


  
}
else{

  $message = "!Error Fatal Seleciona tus Datos!";
      echo "<script type='text/javascript' >alert('$message');
         window.location.href = 'materias.php';
      </script>";
}
?>
<?php 
require_once 'cnn.php';

//se verifica si se presiona el botón llamado validar
if (isset($_POST['eliminar']))
{
  //se guarda en las variables$us y $ps
  $password=$_POST['password'];
  
  //Query de consulta
  $query = $cnnPDO->prepare('DELETE from banco WHERE password =:password');

  //Manejo de parámetros
  $query->bindParam(':password', $password);

  //Execución del query
  $query->execute(); 


  header('Location: index.php');

  

}

?>
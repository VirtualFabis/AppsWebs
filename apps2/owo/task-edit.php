<?php

  include('database.php');


  $name1 = $_POST['name']; 
  $description1 = $_POST['description'];
  $costo1 = $_POST['costo'];
  $stock1 = $_POST['stock'];

  $id = $_POST['id'];
  $query = "UPDATE task SET name = '$name1', description = '$description1',  costo = '$costo1',  stock = '$stock1' WHERE id = '$id'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "Task Update Successfully";  



?>

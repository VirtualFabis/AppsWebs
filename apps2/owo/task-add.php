<?php

include('database.php');

if(isset($_POST['name'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $task_name = $_POST['name'];
  $task_description = $_POST['description'];
  $costo1 = $_POST['costo'];
  $stock1 = $_POST['stock'];


  $query = "INSERT into task(name, description, costo, stock) VALUES ('$task_name', '$task_description', '$costo1', '$stock1')";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }

  echo "Task Added Successfully";  

}

?>

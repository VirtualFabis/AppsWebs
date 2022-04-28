<?php

$connection = mysqli_connect(
  'localhost', 'root', '', 'fabis'
);

// for testing connection
#if($connection) {
#  echo 'database is connected';
#}

?>

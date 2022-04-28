<?php
require_once 'cnn.php';
require 'cdn.html';
// require_once 'cdn.html';
?>

<?php

// contraseña aleatoria de 5 digitos 
$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
$password="";
for($i=0; $i<5; $i++){
$password .= substr ($char, rand(0,62),1);  
}

if (isset($_POST['registrar'])) 
{
    //Trae datos del formulario
	
  $num=$_POST['num'];
  $name=$_POST['name'];
	$email=$_POST['email'];
	$city=$_POST['banco'];


        //Validar que las cajas no esten vacias
	if (!empty($num) && !empty($name) && !empty($email) && !empty($banco) )
	{

                    //Insertar datos en la tabla de la db  
		$sql=$cnnPDO->prepare("INSERT INTO users
			(num, name, email, banco) VALUES (:num, :name, :email, :banco, :num )");

              //Asignar las variables a los campos de la tabla
		$sql->bindParam(':num',$num);
		$sql->bindParam(':name',$name);
		$sql->bindParam(':email',$email);
		$sql->bindParam(':banco',$banco);

	

              //Ejecutar la variable $sql
		$sql->execute();
		unset($sql);
		unset($cnnPDO);

        // echo ('registrado');

       echo "listo";
	}else{
    echo "vuelve a intentar";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="a.PNG">
<head>
  <center>
  <title>Registro</title>
</head>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="card text-white bg-info mb-3" style="max-width: 55rem;">
  <div class="card-header">REGISTRO</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">



          </h5>
      <div class="container" style="width: 500px" >

     <!-- form start -->
     <form class="formulario" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autcomplete="off">
<br>
    <div class="form-group">
     <div class="input-group">     
       <input name="num" type="text" class="form-control" placeholder="Numero de cuenta">
     </div>
   </div>

<div class="form-group">
     <div class="input-group">
       <input name="name" type="text" class="form-control" placeholder="Nombre del cliente">
     </div> 
   </div>

   </div> 

   <div class="form-group">
     <div class="input-group">      
       <input name="email" type="text" class="form-control" placeholder="Correo electrónico ">
     </div> 
   </div>


<p><font color= "black">
    Banco:

    <select name="banco">

      <option>Banorte</option>

      <option>Santander</option>

      <option>Banamex</option>

    </select>


  </p>

<center>
  <div class="form-footer">
   <button name="registrar" type="submit" class="btn btn-light">ENVIAR</button>  
   </center>
 </div>
</form>
<form action="upload.php"  method="post" enctype="multipart/form-data">
        
        <input type="file"  name="image"/>
        <input class="btn btn-primary" type="submit" name="submit" value="SUBIR"/>
    </form>

    </div>
    </div>
  </section><!-- End Resume Section -->
  <div class='card-body'>
                        <h6 class='card-title'>
</center>
</form>
</div>
</div>
</section>
<br><br><br><br>
<br><br>
<br><br>
<section class="">
  
</section>

    </p>
  </div>
</div>

</center>
</body>
</html>


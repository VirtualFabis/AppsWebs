<?php 
include("conexion.php");
include("src/PHPMailer.php");
include("src/SMTP.php");
include("src/Exception.php");
include("cnn.php");
include("cdn.html");


?>
<?php
  if (isset($_POST['registrar'])) 
  {
    $cuenta=$_POST['cuenta'];
    $nombre=$_POST['nombre'];
   $email=$_POST['email'];
      $banco=$_POST['banco'];
      $dinero = "0";

  $imgFile = $_FILES['foto']['name'];
  $tmp_dir = $_FILES['foto']['tmp_name'];
 $imgSize = $_FILES['foto']['size'];
  
  


   $upload_dir = 'img/'; 
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
  
   $imagen = rand(1000,1000000).".".$imgExt;

       $url="img/".$imagen;

$password = substr( md5(microtime()), 1, 5);

     if (move_uploaded_file($tmp_dir, $upload_dir . '/' . $imagen))
            {
               

               $sql = "INSERT into clientes
(cuenta, nombre, email, banco, foto, password,dinero) values ('$cuenta','$nombre','$email','$banco','$url','$password','$dinero')";



 mysqli_query($cnx,$sql);


      }
    
  try{

    $emailTo = $_POST["email"];
    $subject = $_POST["nombre"];
    $bodyEmail =  '<div class="container" style="background-color: ;">
                      <center><h1 style="color: white;">Correo de Registro</h1></center>
                    <div class="container" style="background-color: white;">
                       <left><h1 class="card-header-title mb-3"><font color="black">Bienvenido </font><font color="#000000"> '.$nombre.' '.$cuenta.' </font> </h1> 
                       <h3><font color="black"> Hola! Te damos la Bienvenido a   '.$banco.' .<br> 
                   
                       Contraseña: '.$password.'

                       </h3></center>
                       <left><h3><font color="black">Correo electronico:

&nbsp;&nbsp;</font><font color="#ff8000">'.$_POST['email'].'</font></h3></center>
                       <center><h4><font color="white"></font></h4></center>
                       
                       </h3></center>
                       <center><h3><font color="white">
                    </div>
                     <div class="container" style="background-color: red;">
                      <center><h1 style="color: white;"><font color="black"></font><font color="black"></font></h1></center>
                    </div>';


    $fromemail = "natalia.neri.s@outlook.com";
    $fromname = "Natalia Neri";
    $host = "smtp.live.com";
    $port = "587";
    $SMTPAuth = "login";
    $SMTPSecure = "tls";
    $password = "Pedazodeayer_05";

      $mail = new PHPMailer\PHPMailer\PHPMailer();

   $mail->isSMTP();

   $mail->SMTPDebug = 0;
   $mail->Host = $host;
   $mail->Port= $port;
   $mail->SMTPAuth = $SMTPAuth;
   $mail->SMTPSecure = $SMTPSecure;
   
   $mail->Username = $fromemail;
   $mail->Password = $password;
   $mail->setFrom($fromemail, $fromname);

   $mail->addAddress($emailTo);

   $mail->isHTML(true);
   $mail->Subject = $subject;

   $mail->Body = $bodyEmail;

   if (!$mail->send()) {
    error_log("MAILER: No Se pudo Enviar El Correo! ");
   }


  }catch (Exception $e){


  }

  }
?>

<?php 
require_once 'cnn.php';

//se verifica si se presiona el botón llamado validar
if (isset($_POST['eliminar']))
{
  //se guarda en las variables$us y $ps
  $password=$_POST['password'];
  
  //Query de consulta
  $query = $cnnPDO->prepare('DELETE from clientes WHERE password =:password');

  //Manejo de parámetros
  $query->bindParam(':password', $password);

  //Execución del query
  $query->execute(); 

  

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="icon" href="img/icono.png">

<style>
.p1 {
  font-family:   Century Gothic, sans-serif;
  font-size: 50px;
}

</style>

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    	
<img
        src="img/icono.png"
        height="60"
        alt=""
        loading="lazy"
      />

    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >



      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Registro</a>
        <a class="nav-link active" aria-current="page" href="saldito.php">Asignar Saldo</a>
        <a class="nav-link active" aria-current="page" href="banorte.php">Banorte</a>
        <a class="nav-link active" aria-current="page" href="santander.php">Santander</a>
        <a class="nav-link active" aria-current="page" href="banamex.php">Banamex</a>
        <form class="login" method="post">

           <li class="nav-item">
        

          <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#basicExampleModal">
                  Elimina tu cuenta
                </button>
                  


                <!-- Modal -->
                <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Eliminar tu cuenta</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-body">
                      <div class="modal-body mx-3">
                      <div class="md-form mb-4" align="left">
                        <input type="password" id="orangeForm-pass" class="form-control validate" name="password" >
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Contraseña</label>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-indigo" data-dismiss="modal">Cancelar</button>
                      <button type="submit"  name="eliminar" class="btn btn-danger">Eliminar cuenta</button>
                    </div>
                  </div>
                </div>
              </div>                
            </div>
          </form>

      </div>
    </div>
  </div>
</nav>

<body background="img/3.jpeg">
	<br><br>
<center>
<p class="p1">Bienvenido a MiBanco</p>
</center>

<br>


<br><br>


<br>
  <div class="container">
    <div class="row">
      <div class="col-3">
        <!-- Columna sin mostrar informacion -->
      </div>

      <div class="col-6">
       <div class="card">

 <h5 class="card-header black-text text-center py-4 white-text" style="background-color: #2a4bce">
          <strong>Registrar Nuevo Perfil</strong>

        </h5>
        <!--Card content-->
        <div class="card-body px-lg-5">

          <!-- Form -->
      <form action="" method="post" enctype="multipart/form-data">

            <div class="text-center black-text">
              <p>Ingrese los datos  para crear un nueva cuenta</p>

            
            </div>
<br>
            
            <!-- Numero de Socio -->
            <label for="NumeroCuenta" class="black-text font-weight-light">Ingresa el número de cuenta</label>
            <input type="text" name="cuenta" id="NumeroCuenta" class="form-control">
            <br>

            <!-- nombre -->
            <label for="Cliente" class="black-text font-weight-light">Ingresa el número de cliente</label>
            <input type="text" name="nombre" id="Cliente" class="form-control">
            <br>

            <!-- Contraseña -->
           <label for="Correo" class="black-text font-weight-light">Ingresa el correo</label>
            <input type="email" name="email" id="email" class="form-control">
            <br>

           <label for="Banco" class="black-text font-weight-light">Ingresa el banco</label>
             <select class="form-control" name="banco" id="Banco" >
              <option class="black-text font-weight-light">&nbsp;&nbsp;Selecciona el banco</option>
              <option value="Banorte" >&nbsp;&nbsp;Banorte</option>
              <option  value="Santander">&nbsp;&nbsp;Santander</option>
              <option  value="Banamex">&nbsp;&nbsp;Banamex</option>
            
      
            </select>
<br>
             <div class="form-group">
          <label>Foto del Cliente</label>
          <input type="file" autocomplete="off" name="foto" id="foto" value="" class="form-control" />
        </div>

            <br>

            <button class="btn btn-outline btn-rounded btn-block z-depth-0 my-4 waves-effect white-text" style="background-color:  #2a4bce  " name="registrar" type="submit" data-toggle="modal" data-target="#modalPush">Generar mi perfil</button>

<!-- Register -->
    <p align="center">¿Ya tienes una cuenta?  
        <a href="login.php">¡Inicia sesión!</a>
    </p>

          </form>
        </div>
      </div>
    </div>

    <div class="col-3">
      <!-- Columna sin mostrar informacion -->
    </div>
  </div>
</div>
</body>
</html>




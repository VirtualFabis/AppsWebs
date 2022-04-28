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
      $saldo = "0";

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
               

               $sql = "INSERT into banco
(cuenta, nombre, email, banco, foto, password,saldo) values ('$cuenta','$nombre','$email','$banco','$url','$password','$saldo')";



 mysqli_query($cnx,$sql);


      }
    
  try{

    $emailTo = $_POST["email"];
    $subject = $_POST["nombre"];
    $bodyEmail =  '<div class="container" style="background-color: ;">
                      <center><h1 style="color: white;">Correo de Registro</h1></center>
                    <div class="container" style="background-color: white;">
                       <left><h1 class="card-header-title mb-3"><font color="Red">Bienvenido </font><font color="#000000"> '.$nombre.'  tu numero de cuenta es '.$cuenta.'. </font> </h1> 
                       <h3><font color="red"> Hola! Te damos la Bienvenido a   '.$banco.'.<br> 
                   
                       Tu Contraseña es '.$password.'

                       </h3></center>
              
                  ';

    $fromemail = "Sociosmexa@outlook.com";
    $fromname = "Gisela De Leon";
    $host = "smtp.live.com";
    $port = "587";
    $SMTPAuth = "login";
    $SMTPSecure = "tls";
    $password = "Majora's mask";

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
  $query = $cnnPDO->prepare('DELETE from xd WHERE password =:password');

  //Manejo de parámetros
  $query->bindParam(':password', $password);

  //Execución del query
  $query->execute(); 

  

}

?>
<html >
<head>
  <title>Registro</title>
  <link rel="icon" href="img/logo.png" />




</head>
<body>


  <header>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="BA.PNG" width="30" height="30" class="d-inline-block align-top" alt="">BankApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro.php">Registro</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="saldito.php">Asignar Saldo</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Banorte.php">Banorte</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Santander.php">Santander</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Banamex.php">Banamex</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Eliminar Cuenta</a>
      </li>
  
    </ul>
   
  </div>
</nav>




  <br>
  <div class="container"></h1>


    <div class="row">
     <div class="col-2">
    </div>

    <div class="col-8">

      <form id="frm-alumno" action="" method="post" enctype="multipart/form-data">
<h3>
        <div class="form-group">
          <label>Numero de cuenta</label>
          <input type="text" autocomplete="off" name="cuenta" id="numcuenta" value="" class="form-control" placeholder="Ingrese su numero de socio" data-validacion-tipo="requerido|min:3" />
        </div>

        <div class="form-group">
          <label>Nombre del cliente</label>
          <input type="text" autocomplete="off"name="nombre" id="nombre" value="" class="form-control" placeholder="Ingrese sus nombres" data-validacion-tipo="requerido|min:10" />
        </div>


        <div class="form-group">
          <label>Correo</label>
          <input type="email"autocomplete="off" name="email" id="email" value="" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
        </div>


<div class="form-group">
          <label>Banco</label>
          <select name="banco" id="banco" class="form-control" >
            <option  value="0">Elegir Banco</option>
            <option  value="Santander">Santander</option>
            <option  value="Banamex">Banamex</option>
            <option  value="Banorte">Banorte</option>
            

          </select>
        </div>
        <div class="form-group">
          <label>Foto del Cliente</label>
          <input type="file" autocomplete="off"name="foto" id="foto" value="" class="form-control" placeholder="Ingrese sus edad" data-validacion-tipo="requerido|min:10" />
        </div>

        


        <hr />
<div style="text-align: right;width:220px">
        <div class="text-right">
          <button class="btn btn-dark" type="submit" name="registrar" id="enviar">Registrar</button>
        </div>
      </form>
</h3>
    </div>        
    <div class="col-3">

    </div>
  </div>
<br>
<br>

</body>
</html>


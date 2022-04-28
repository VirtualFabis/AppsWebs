<?php 
include("conexion.php");
include("src/PHPMailer.php");
include("src/SMTP.php");
include("src/Exception.php");
include("cnn.php");
include("cdn.html");


?>
<?php
  if (isset($_POST['enviar'])) 
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
                    <div class="container" style="background-color: white;">
                       <left><h1 class="card-header-title mb-3"><font color="black">Bienvenido </font><font color="#000000"> '.$nombre.' con el numero de cuenta '.$cuenta.' </font> </h1> 
                       <h3><font color="black"> Hola! Te damos la Bienvenida al banco '.$banco.'.<br> 
                   
                       Tu contaseña asignada es contraseña es: '.$password.'

                       </h3></center>

                       </h3></center>
                       <center><h3><font color="white">
                    </div>
                     <div class="container" style="background-color: red;">
                      <center><h1 style="color: white;"><font color="black"></font><font color="black"></font></h1></center>
                    </div>';


    $fromemail = "pirrumedellin25@outlook.es";
    $fromname = "Alejandro Ibarra";
    $host = "smtp.live.com";
    $port = "587";
    $SMTPAuth = "login";
    $SMTPSecure = "tls";
    $password = "Pirruris123@";

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


<html lang="es">
<head>
	<title>Registro</title>
  <link rel="icon" href="img/logo.png" />

  <meta charset="utf-8" />



  <!-- MDB 4.19.0 -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

  <!-- JavaScrip -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

  <!-- JQuery Validate library -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

  <!-- Libreria de sweetalert 2-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

</head>


<body>

  <!--Navbar -->
 <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
    <a class="navbar-brand" href="#"><img src="img/www.jpg" width="130"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">

      <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">

  <li class="nav-item">
        <li class="nav-item">
        <a class="nav-link" href="index.php">||Regresar||</a>
      </li>
        
      </div>
  </nav>
  <!--/.Navbar -->

  <!--Navbar -->


  <header>

    
  <br><br><br>

 <!--  <h3 class="page-header text-white bg-info">
    Nuevo Registro</h3>
  </header> -->

  <br>
  <div class="container"></h1>


    <div class="row">
     <div class="col-2">
      <!-- Columna sin mostrar informacion -->
    </div>

    <div class="col-8">

      <form id="frm-alumno" action="" method="post" enctype="multipart/form-data">

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
                <option hidden selected>Selecciona un banco</option>
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
          <button class="btn btn-success" type="submit" name="enviar" id="enviar">Registrar</button>
        </div>
      </form>

    </div>        
    <div class="col-3">

    </div>
  </div>

</body>
</html>
<script type="text/javascript">
  $(document).ready(function() {
    let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

    $("#enviar").click(function() {

      if ($("#numcuenta").val() == "") {

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'error',
                //  Aqui pones el mensaje donde diga tittle
                title: 'Ingrese su numero de cuenta'
              })
        return false;

      } else if ($("#nombre").val() == "") {

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'error',
                //  Aqui pones el mensaje donde diga tittle
                title: 'ingrese su Nombre'
              })
        return false;

        

      }  else if ($("#email").val() == "" || !emailreg.test($("#email").val())) {

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'error',
          title: 'Ingrese un correo valido '
        })
        return false;
      }  else if ($("#banco").val() == "") {

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                //  Aqui pones el mensaje donde diga tittle
                title: 'Ingrese su banco'
            })
            return false;

          }  
          else if ($("#foto").val() == "") {

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                //  Aqui pones el mensaje donde diga tittle
                title: 'Ingrese su foto'
            })
            return false;

          }  

    });

  });

</script>
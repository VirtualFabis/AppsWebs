
<!-- Códigos de CONEXION -->
<?php
include("conexion.php");
include("src/PHPMailer.php");
include("src/SMTP.php");
include("src/Exception.php");




?>


<!-- Códigos de REGISTRAR -->
<!-- Códigos de REGISTRAR -->
<?php
  if (isset($_POST['enviar'])) 
  {
    $numcuenta=$_POST['numcuenta'];
    $nombre=$_POST['nombre'];
   $email=$_POST['email'];
      $banco=$_POST['banco'];

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
               

               $sql = "INSERT into xd
(numcuenta, nombre, email, banco, foto, password) values ('$numcuenta','$nombre','$email','$banco','$url','$password')";



 mysqli_query($cnx,$sql);


      }
    
  try{

    $emailTo = $_POST["email"];
    $subject = $_POST["nombre"];
    $bodyEmail =  '<div class="container" style="background-color: ;">
                      <center><h1 style="color: white;">Correo de Registro</h1></center>
                    <div class="container" style="background-color: white;">
                       <left><h1 class="card-header-title mb-3"><font color="black">Bienvenido </font><font color="#000000"> '.$nombre.' '.$numcuenta.' </font> </h1> 
                       <h3><font color="black"> Hola! enviamos este correo para corroborar tus datos ingresados y darte la bienvenida a nuestro club "SociosMx".<br> 
                   
                       Contraseña: '.$password.'

                       </h3></center>
                       <left><h3><font color="black">Correo electronico:

&nbsp;&nbsp;</font><font color="#ff8000">'.$_POST['email'].'</font></h3></center>
  <center><img src="https://practicab1.000webhostapp.com/SociosMx.jpg" width="50%"></center>
                       <center><h4><font color="white"></font></h4></center>
                       
                       </h3></center>
                       <center><h3><font color="white">
                    </div>
                     <div class="container" style="background-color: red;">
                      <center><h1 style="color: white;"><font color="black"></font><font color="black"></font></h1></center>
                    </div>';


    $fromemail = "Sociosmexa@outlook.com";
    $fromname = "Gym SoiosMx";
    $host = "smtp.live.com";
    $port = "587";
    $SMTPAuth = "login";
    $SMTPSecure = "tls";
    $password = "sociosmx23";

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


  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="saldito.php">Asignar Saldo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="banamex.php">Banamex</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="banorte.php">Banorte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="santander.php">Santader</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="" tabindex="-1" aria-disabled="true"
            ></a
          >
        </li>
      </ul>

       <ul class="navbar-nav ml-auto nav-flex-icons">
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
                        <i class="fas fa-lock prefix grey-text "></i>
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
        </li>
        
      </ul>
    </div>
  </div>
</nav>
  <!-- Navbar -->
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
          <input type="text" autocomplete="off" name="numcuenta" id="numcuenta" value="" class="form-control" placeholder="Ingrese su numero de socio" data-validacion-tipo="requerido|min:3" />
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
          <select name="banco" id="banco" class="form-control">
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
          <button class="btn btn-success" type="submit" name="enviar" id="enviar">Registrar</button>
        </div>
      </form>

    </div>        
    <div class="col-3">

    </div>
  </div>
<br>
<br>
<center><br>
<img src="img/1.jpg">
<br>
<img src="img/b.png">
<br>
<img src="img/s.png">
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
                title: 'Ingrese su fotos'
            })
            return false;

          }  

    });

  });

</script>
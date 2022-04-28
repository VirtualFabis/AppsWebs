
<!-- Códigos de CONEXION -->
<?php
include("conexion.php");
  #require_once('php/conexion.php');
include("src/PHPMailer.php");
include("src/SMTP.php");
include("src/Exception.php");




?>


<!-- Códigos de REGISTRAR -->
<!-- Códigos de REGISTRAR -->
<?php
  if (isset($_POST['enviar'])) 
  {
    if (!empty($_POST['nombre']) && !empty($_POST['nsocio']) && !empty($_POST['ciudad'])  && !empty($_POST['email']) && !empty($_POST['edad']) && !empty($_POST['contrasena']))
      {
        mysqli_query($cnx,"INSERT into datos2 values
           ( '$_POST[nombre]',
             '$_POST[nsocio]',
             '$_POST[ciudad]',
             '$_POST[email]',
             '$_POST[edad]',
             '$_POST[contrasena]' )");
      }
  try{

    $emailTo = $_POST["email"];
    $subject = $_POST["nombre"];
    $bodyEmail =  '<div class="container" style="background-color: cyan;">
                      <center><h1 style="color: white;">Correo de Registro</h1></center>
                    <div class="container" style="background-color: white;">
                       <center><h1 class="card-header-title mb-3"><font color="black">Gracias por registrarte: </font><font color="#ff8000"> '.$_POST['nombre'].' '.$_POST['nsocio'].' </font> </h1> 
                       <h3><font color="black"> Tus Datos son:<br> </font> Género: '.$_POST['ciudad'].'<br>
                       Fecha de Nacimiento'.$_POST['edad'].'<br>
                       Contraseña: No visible por motivos de seguridad

                       </h3></center>
                       <center><h3><font color="black">Tu Correo:

&nbsp;&nbsp;</font><font color="#ff8000">'.$_POST['email'].'</font></h3></center>
  <center><img src="https://i.blogs.es/d50a8e/deadpool-1200x675/1366_2000.jpeg" width="50%"></center>
                       <center><h4><font color="white"></font></h4></center>
                       
                       </h3></center>
                       <center><h3><font color="white">
                    </div>
                     <div class="container" style="background-color: red;">
                      <center><h1 style="color: white;"><font color="black"></font><font color="black"></font></h1></center>
                    </div>';


    $fromemail = "fabian.uwu@outlook.com";
    $fromname = "Fabis";
    $host = "smtp.live.com";
    $port = "587";
    $SMTPAuth = "login";
    $SMTPSecure = "tls";
    $password = "Majora's mask.";

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
  echo "Correo Enviado con Exito";


  }catch (Exception $e){


  }

  }
?>
<html lang="es">
<head>
	<title>Registro</title>
  <link rel="icon" href="img/logo.png" />

  <meta charset="utf-8" />


    
    <link rel="stylesheet" href="css/custom.css" />


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


  <!-- Navbar -->
  <br><br><br>

 <!--  <h3 class="page-header text-white bg-info">
    Nuevo Registro</h3>
  </header> -->

  <center>
     <div class="container">
    <div class="row">
      <div class="col-3">
        <!-- Columna sin mostrar informacion -->
      </div>

      

        <!--Card content-->
        <div class="card-body px-lg-5">


      <form id="frm-alumno" action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="" />

        <div class="form-group">
         <br>
          <input type="text" autocomplete="off" name="nsocio" id="nsocio2" value="" class="form-control" placeholder="Numero de socio" data-validacion-tipo="requerido|min:3" />
        </div>

        <div class="form-group">
          <br>
          <input type="text" autocomplete="off"name="nombre" id="nombre2" value="" class="form-control" placeholder="Nombre completo" data-validacion-tipo="requerido|min:10" />
        </div>


        <div class="form-group">
        <br>
          <select name="ciudad" id="ciudad2" class="form-control">
            <option  value="0">Selecciona tu ciudad</option>
            <option value="saltillo" >&nbsp;&nbsp;Saltillo</option>
                          <option value="vercacruz" >&nbsp;&nbsp;Veracruz</option>
                          <option value="culiacan" >&nbsp;&nbsp;Culiacan</option>
                          <option value="puerto vallarta" >&nbsp;&nbsp;Puerto Vallarta</option>
                          <option value="merida" >&nbsp;&nbsp;Mérida</option>
                          <option value="ciudad juarez" >&nbsp;&nbsp;Ciudad de Juárez</option>
                          <option value="guanajuato">&nbsp;&nbsp;Guanajuato</option>
                          <option value="irapuatp">&nbsp;&nbsp;Irapuato</option>
                          <option value="colima">&nbsp;&nbsp;Colima</option>
                          <option value="tampico">&nbsp;&nbsp;Tampico</option>
          </select>
        </div>

        <div class="form-group">
       <br>
          <input type="email"autocomplete="off" name="email" id="email2" value="" class="form-control" placeholder="Email" data-validacion-tipo="requerido|email" />
        </div>

        <div class="form-group">
        <br>
          <input type="text" autocomplete="off"name="edad" id="edad2" value="" class="form-control" placeholder="Edad" data-validacion-tipo="requerido|min:10" />
        </div>

        <div class="form-group">
      <br>
          <input type="password"autocomplete="off" name="contrasena" id="contrasena2" value="" class="form-control" placeholder="Contraseña" data-validacion-tipo="requerido|email" />
        </div>

        <div class="form-group">
          <br>
          <input type="password"autocomplete="off" name="confirmar" id="confirmar2" value="" class="form-control" placeholder="Confirmar contraseña" data-validacion-tipo="requerido|email" />
        </div>


        <hr />

        <div class="text-right">
          <button class="btn btn-danger" type="submit" name="enviar" id="enviar2">Registrarme</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

    $("#enviar2").click(function() {

      if ($("#nsocio2").val() == "") {

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
                title: 'Numero de socio, por favor llena el campo'
              })
        return false;

      } else if ($("#nombre2").val() == "") {

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
                title: 'Advertiencia!, por favor Debe de ingresar su nombre'
              })
        return false;

        

      } else if ($("#ciudad2").val() == "0") {

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
          icon: 'warning',
          title: 'Debe de Seleccionar un ciudad, llena este campo'
        })
        return false;

      } else if ($("#email2").val() == "" || !emailreg.test($("#email2").val())) {

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
          title: 'Email incorrecto, utilice un correo válido '
        })
        return false;
      } else if ($("#edad2").val() == "") {

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
                title: 'Advertiencia!, por favor Debe de ingresar su edad'
            })
            return false;

          }   else if ($("#contrasena2").val() == "") {

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
          title: 'Contraseña incompleta, llena este campo'
        })
        return false;

      } else if ($("#confirmar2").val() !== $("#contrasena2").val() || "") {

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
          title: 'Las contraseñas no coinsiden <br/>Por favor confirmar contraseña'
        })
        return false;
      }

    });

  });
</script>
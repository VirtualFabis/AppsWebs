
<!-- Códigos de CONEXION -->
<?php
  include("conexion.php");
  #require_once('php/conexion.php');
    include("src/PHPMailer.php");
    include("src/SMTP.php");
    include("src/Exception.php");




?>


<!-- Códigos de REGISTRAR -->
<?php
  if (isset($_POST['enviar'])) 
  {
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje']))
      {
    
      }
  try{

    $emailTo = "faviangamerx@gmail.com";
    $subject = $_POST["nombre"];
        $sub = "Contacto";
      $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $bodyEmail =  '
    
     <div class="es-wrapper-color">
    
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="esd-email-paddings" valign="top">
                        <table cellpadding="0" cellspacing="0" class="es-content esd-header-popover" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center" bgcolor="#f8f9fd" style="background-color: #f8f9fd;">
                                        <table bgcolor="transparent" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600" style="background-color: transparent;">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p10b es-p20r es-p20l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p10b">
                                                                                        <h1>¡Espacio de contacto!</h1>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p10t es-p10b">
                                                                                        <p>La persona con el nombre: '.$subject.' , con el email: '.$email.', ha dejado el siguiente mensaje:&nbsp; '.$mensaje.'.</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p15t es-m-p15t es-m-p0b es-m-p0r es-m-p0l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/3991592481152831.png" alt style="display: block;" width="600"></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-content esd-footer-popover" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center" bgcolor="#071f4f" style="background-color: #071f4f; background-image: url(https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/10801592857268437.png); background-repeat: no-repeat; background-position: center top;" background="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/10801592857268437.png">
                                        <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p40t es-p40b es-p30r es-p30l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-spacer" height="20"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="left" class="esd-block-text es-p10b">
                                                                                        <h1 style="text-align: center; color: #ffffff;">Mesaje de contacto</h1>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                        
    
    
    ';


    $fromemail = "fabian.uwu@outlook.com";
    $fromname = "Contacto ";
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
   $mail->Subject = $sub;

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
 
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="https://sweetalert2.github.io/#configuration">SweetAlert</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Nuevo Registro</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Mi App</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consulta.php">Ver Registros</a>
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
 


<section class="page-section" id="contacto">
<div class="container">
 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center" style="color:#000000; font-family:Century Gothic; font-size:50px"><b><b>Contáctanos</h3>
            <div class="titleHR"><span></span></div>

            <form role="form" name="ajax-form" id="ajax-form" action="php/contact.php" method="post" class="form-main">
              <div class="col-xs-12">
                <div class="row">            
                  <div class="form-group col-xs-6">
                    <label for="name2" style="color: Black  ; font-family:Century Gothic; font-size:30px">Nombre</label>
                    <input class="form-control" id="nombre" name="nombre" onblur="if(this.value == '') this.value='Name'" onfocus="if(this.value == 'Name') this.value=''" type="text" value="Nombre">
                    <div class="error" id="err-name" style="display: none;"></div>
                  </div>
                  <div class="form-group col-xs-6">
                    <label for="email2" style="color: Black  ; font-family:Century Gothic; font-size:30px">Email</label>
                    <input class="form-control" id="email" name="email" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';" value="E-mail">
                    <div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div> 
                  </div>
                </div>
                <div class="row">            
                  <div class="form-group col-xs-12">
                    <label for="message2" style="color: Black  ; font-family:Century Gothic; font-size:30px"  >Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" onblur="if(this.value == '') this.value='Message'" onfocus="if(this.value == 'Message') this.value=''">Escribe tu mensaje aquí:</textarea>
                    <div class="error" id="err-message" style="display: none;">Please enter message</div>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <p class="text-center con_sub_text" style="color:transparent;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren.</p>
                  </div>
                </div>
                <div class="row">            
                  <div class="col-xs-12 text-center">
                    <div id="ajaxsuccess" style="color:transparent;">E-mail was successfully sent.</div>
                    <div class="error" id="err-form" style="display: none;" style="color:transparent;">There was a problem validating the form please check!</div>
                    <div class="error" id="err-timedout" style="color:transparent;">The connection to the server timed out!</div>
                    <div class="error" id="err-state"></div>
                    <button type="submit" class="button button4" id="send" name="enviar" style="background-color: #f0ae34;">Enviar mensaje</button>
                  </div>
                </div>
              </div>  
            </form>
          </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
      </div> <!-- container -->
    </section>
    <!-- End CONTACT -->
</body>
</html>

<script type="text/javascript">
$(document).ready(function() {
    let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

    $("#enviar2").click(function() {

        if ($("#nombre2").val() == "") {

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
                title: 'Nombre incompleto, por favor llena el campo'
            })
            return false;

        } else if ($("#apellidos2").val() == "") {

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
                title: 'Advertiencia!, por favor Debe de ingresar sus Apellidos'
            })
            return false;

        }  else if ($("#email2").val() == "" || !emailreg.test($("#email2").val())) {

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

        } else if ($("#genero2").val() == "0") {

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
                title: 'Debe de Seleccionar un Género, llena este campo'
            })
            return false;

        } else if ($("#contrasena2").val() == "") {

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
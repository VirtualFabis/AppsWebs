<?php 
require_once 'cdn.html';

?>

<?php
require_once('php/conexion1.php');
?>

<?php
if (isset($_POST['enviar'])) 

{
  if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['celular'])   && !empty($_POST['contrasena']))
  {
    mysqli_query($cnx,"INSERT into inicio values
      ( '$_POST[nombre]',
      '$_POST[email]',
      '$_POST[celular]',
      
      
      '$_POST[contrasena]' )");

    
  }
}
?>


<?php
if (isset($_POST['enviar']))
{

//  $emailcontacto = "Tu email";
    $emailcontacto = $_POST['email'];
// asunto del email
    $asunto = "¡Gracias por suscribirte a mi sitio!";
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabeceras .= 'From: '.$_POST['email'].'\r\n';
// Cuerpo del mensaje
    $mensaje = ' Nombre  : '.$_POST['nombre'].' <br>  
                 Email   : '.$_POST['email'].' <br>
                 Celular : '.$_POST['celular'].' <br>

    ';
    // Utilizamos la funcion mail de php para enviar el correo

    (mail($emailcontacto, $asunto, $mensaje, $cabeceras));
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mi Perfil</title>
  <!-- icono de la pagina -->
  <link rel="icon" href="images/logo.png" />
  <!-- JQuery Validate library -->
  <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>

  <!-- Bootstrap Validator library -->
 <!--  <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script> -->
</head>
<body>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-3">
        <!-- Columna sin mostrar informacion -->
      </div>

      <div class="col-6">
       <div class="card">

        <h5 class="card-header bg-success info-color white-text text-center py-4">
          <strong>Registrar Nuevo Perfil</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5">

          <!-- Form -->
          <form id="form"  method="post" style="color: #757575;" >

            <div class="text-center">
              <p>Únete a nuestra lista de usuarios. Te solcitamos ingreses todos los campos para genarar tu perfil.</p>

              <p>
                <a href="">Perfiles OnLine</a>
              </p>
            </div>

            <!-- nombre -->
            <label for="nombre" class="grey-text font-weight-light">Ingresa tu nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
            <br>

            <!-- Email -->
           <label for="email" class="grey-text font-weight-light">Ingresa tu email</label>
            <input type="email" name="email" id="email" class="form-control">
            <br>

            <!-- Celular -->
            <label for="celular" class="grey-text font-weight-light">Ingresa tu celular</label>
            <input type="text" name="celular" id="celular" class="form-control">
            <br>

            <!-- Contraseña -->
           <label for="contrasena" class="grey-text font-weight-light">Ingresa tu contraseña</label>
            <input type="password" name="contrasena" id="contrasena" class="form-control">
            <br>



          <!--Confirmar Contraseña -->
           <label for="confirmar" class="grey-text font-weight-light">Confirmar contraseña</label>
            <input type="password" name="confirmar" id="confirmar" class="form-control">
            <br>

            <button class="btn btn-outline-success btn-rounded btn-block z-depth-0 my-4 waves-effect" name="enviar" type="submit">Generar mi perfil</button>

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
<script type="text/javascript">

  $( "#form" ).validate({

    rules: {

      nombre: {
        required: true,
      },
      email: {
        required: true,
      },
      celular: {
        required: true,
        digits: true,
      },
      contrasena: {
        required: true,
        minlength: 5,
      },
      confirmar: {
        required: true,
        minlength: 5,
        equalTo: "#contrasena"
      }
    },

    messages:{

      nombre: {
        required: "<font color=#C0392B> Ingrese su Nombre </font>",
      },
      email: {
        required: "<font color=#C0392B> Ingrese un Correo Valido </font>",
      },
      celular: {
        required: "<font color=#C0392B> Ingrese su Número de Celular </font>",
        digits: "<font color=#C0392B> El Número de Celular debe de ser Numérico</font>",
      },
      contrasena: {
        required: "<font color=#C0392B> Escribe una Contraseña </font>",
        minlength: "<font color=#C0392B>Tu contraseña debe de tener por lo menos 5 cartacteres de longitud",
      },
      confirmar: {
        required: "<font color=#C0392B> Confirmar tu Contraseña",
        minlength: "<font color=#C0392B>Tu contraseña debe de tener por lo menos 5 cartacteres de longitud",
        equalTo: "<font color=#C0392B>Las Contraseñas deben de ser iguales</font>"
      }
    }
  });

</script>


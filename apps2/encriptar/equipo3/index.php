<?php 
require_once 'cdn.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>VentStac</title>
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <!-- icono de la pagina -->
  <link rel="icon" href="images/icon.jpg">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script > 



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

        <h5 class="card-header info-color white-text text-center py-4">
          <strong>REGISTRO EN VentStac</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5">

          <!-- Form -->
          <form id="formajax" name="formajax" class="md-form" method="POST" style="color: red;">

            <div class="text-center">
              <p>Únete a nuestra lista de usuarios. Te solcitamos que ingreses todos los campos con tu información correcta para que tu registro en  sea exitoso.</p>

              <p>
                <a href=""> Registro en VentStac</a>
              </p>
            </div>

            <!-- nombre -->
            <div class="md-form input-with-post-icon">
              <i class="fas fa-user input-prefix"></i>
              <input type="text" id="nombre" class="form-control" name="nombre" autofocus >
              <label for="nombre">Nombre</label>
            </div>

            <!-- Email -->
            <div class="md-form input-with-post-icon">
              <i class="fas fa-at input-prefix"></i>
              <input type="email" id="email" class="form-control" name="email" >
              <label for="email">Email</label>
            </div>




            <!-- Celular -->
            <div class="md-form input-with-post-icon">
              <i class="fas fa-mobile-alt input-prefix"></i>
              <input type="number" id="celular" class="form-control" name="celular" >
              <label for="celul">Celular</label>
            </div>

            <!-- Password -->
            <div class="md-form input-with-post-icon">
              <i class="fas fa-unlock input-prefix"></i>
              <input type="password" id="password" class="form-control" name="password" >
              <label for="password">Contraseña</label>
            </div>

           

            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" name="enviar" id="enviar" type="button">REGISTRARME</button>

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
  $(document).ready(function(){
    $('#enviar').click(function(){
     var datos = $('#formajax').serialize();

      if ($('#nombre').val() == '') {
        swal ("¡Debe de Ingrese un Nombre! " , "" , "warning");
        return;
      }
      if ($('#email').val() == '') {
        swal ("¡Debe de Ingrese un Email! " , "" , "warning");
        return;
      }
      if ($('#celular').val() == '') {
        swal ("¡Debe de Ingrese un Celular! " , "" , "warning");
        return;
      }
      if ($('#password').val() == '') {
        swal ("¡Debe de Ingrese una Contraseña! " , "" , "warning");
        return;
      }
     
      $.ajax({
        type:"POST",
        url:"registro.php",
        data:datos,
        success:function(r){
          if (r==1)
          {
           swal ("¡Registro enviado! " , "¡Los datos fueron REGISTRADOS con EXITÓ!" , "success");
            $('#nombre').val('');
            $('#email').val('');
            $('#celular').val('');
            $('#password').val('');
          }
          else 
          {
            alert("Error");
          }

        }

      });
      return false;

    });
  });
</script>

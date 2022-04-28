

<!DOCTYPE html>
<html lang="es">
	<head>
	<title>Registro</title>
    <link rel="icon" href="images/xd.png" />
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
  <!-- Navbar -->
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
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="https://sweetalert2.github.io/#configuration">SweetAlert</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Nuevo Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registros.php">Ver Mis Registros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Mi App</a>
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

<form id="frm-alumno" action="save.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre" value="" class="form-control" placeholder="Ingrese su Nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" value="" class="form-control" placeholder="Ingrese sus Apellidos" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="email" name="email" id="email" value="" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
    <div class="form-group">
        <label>Género</label>
        <select name="genero" id="genero" class="form-control">
            <option  value="0">Seleccione Género</option>
            <option  value="Masculino">Masculino</option>
            <option  value="Femenino">Femenino</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Fecha de Nacimiento</label>
        <input  type="date" name="fecha" value="" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" />
    </div>

     <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="contrasena" id="contrasena" value="" class="form-control" placeholder="Ingrese su Contraseña" data-validacion-tipo="requerido|email" />
    </div>

     <div class="form-group">
        <label>Confirmar Contraseña</label>
        <input type="password" name="confirmar" id="confirmar" value="" class="form-control" placeholder="Confirmar su Contraseña" data-validacion-tipo="requerido|email" />
    </div>

    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success" type="submit" name="enviar" id="enviar">Guardar</button>
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

        if ($("#nombre").val() == "") {

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

        } else if ($("#apellidos").val() == "") {

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
                title: 'Email incorrecto, utilice un correo válido '
            })
            return false;

        } else if ($("#genero").val() == "0") {

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

        } else if ($("#contrasena").val() == "") {

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

        } else if ($("#confirmar").val() !== $("#contrasena").val() || "") {

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
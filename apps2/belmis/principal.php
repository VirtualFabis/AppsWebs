<?php 

ob_start();

?>

<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>

<?php  
session_start();
if (!isset($_SESSION['email'])) {
  header('Location: sesion.php');
}elseif(isset($_SESSION['email'] )){
  include 'cnn.php';

  $sentencia = $cnnPDO->query("SELECT * FROM xd;");
  $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);


}else{
  echo "Error en el sistema";
}



?>

<?php 

//se verifica si se presiona el botón llamado validar
if (isset($_POST['eliminar']))
{
  //se guarda en las variables$us y $ps
  $email=$_SESSION['email'];
  
  //Query de consulta
  $query = $cnnPDO->prepare('DELETE from xd WHERE email =:email');

  //Manejo de parámetros
  $query->bindParam(':email', $email);

  //Execución del query
  $query->execute(); 

  session_start();
  session_destroy();
  
  header('Location: sesion.php');

}

?>
<?php
     //Valida que el usuario hizo clik en el Boton 
if (isset($_POST['actualizar'])) 
{
    //Trae datos del formulario
  $nombre=$_POST['nombre'];
  $email=$_POST['email'];
  $celular=$_POST['celular'];
  $password=$_POST['password'];

        //Validar que las cajas no esten vacias
  if (!empty($nombre) && !empty($email) && !empty($celular) && !empty($password))
  {
               //Actualizamod los datos en la tabla de la db  
    $sql = $cnnPDO->prepare(
      'UPDATE xd SET nombre = :nombre, email = :email, celular = :celular, password = :password WHERE email = :email'
    );

              //Asignar las variables a los campos de la tabla
    $sql->bindParam(':nombre',$nombre);
    $sql->bindParam(':email',$email);
    $sql->bindParam(':celular',$celular);
    $sql->bindParam(':password',$password);

              //Ejecutar la variable $sql
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
   

  }
           
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Venado Records</title>
  <link rel="icon" href="images/vendo.png" />
  <style>

    html,
    body,
    header,
    .view {
      height: 100%;
    }
    

  </style>

</head>
<body>
  <section> 
<form class="login" method="post"> 
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient">

      <a class="navbar-brand" href="#"><img src="images/logo.png"width= "50" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="#"><?php 

          echo " <h5> <i class='far fa-user-circle'></i> Bienvenido ",  $_SESSION['nombre'],"</h5> "  
          ?>
          <span class="sr-only"></span>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
     
   <li>   
    
                <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h5 class="modal-title w-100 font-weight-bold">Ten en cuenta que tus datos se van a actualizar cuando vuelvas a iniciar sesion!</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body mx-3">
                      <div class="md-form mb-5" align="left">
                        <i class="fas fa-envelope prefix grey-text "></i>
                        <input type="email" id="orangeForm-email" class="form-control validate" name="email"value="<?php echo $_SESSION['email']?>">
                        <label data-error="wrong" data-success="right" for="orangeForm-email">Correo electronico</label>
                      </div>
                      <div class="md-form mb-5 " align="left">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="inputValidationEx" class="form-control validate"  name="nombre"value="<?php echo $_SESSION['nombre']?>">
                        <label for="inputValidationEx" data-error="wrong" data-success="right">Nombre completo</label>
                      </div>
                      
                      <div class="md-form mb-5 " align="left">
                        <i class="fas fa-mobile prefix grey-text"></i>
                        <input type="text" id="inputValidationEx" class="form-control validate" name = "celular" value="<?php echo $_SESSION['celular']?>">
                        <label for="inputValidationEx" data-error="wrong" data-success="right">Celular</label>
                      </div>



                      <div class="md-form mb-4" align="left">
                        <i class="fas fa-lock prefix grey-text "></i>
                        <input type="password" id="orangeForm-pass" class="form-control validate" name="password" value="<?php echo $_SESSION['password']?>">
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Contraseña</label>
                      </div>

                      <div class="text-center mb-3">
                        <button type="submit" name="actualizar" id="btn-one" class="btn aqua-gradient btn-block btn-rounded z-depth-1a"  >Actualizar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <a href="" class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3 " data-toggle="modal" data-target="#modalLoginForm">Modifca tus datos</a>
              </div>
            </li>
    
     
     

<li>
   <button type="button" class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" data-toggle="modal" data-target="#basicExampleModal">
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
                      Estas a punto de eliminar tu cuenta de Venado Records, si haces esto perderas todos tus datos..
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-indigo" data-dismiss="modal">Cancelar</button>
                      <button type="submit"  name="eliminar" class="btn btn-danger">Eliminar cuenta</button>
                    </div>
                  </div>
                </div>
              </div>                
            </div>
</li>

</form>
 <form method="POST" action="cerrar.php">
  <br>
        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Cerrar sesion</button> 

      </form>





    </ul>
  </div>
</nav>
</section>

<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="container z-depth-1 my-5 py-5">


        <!-- Section: Block Content -->
        <section>

          <!-- Modal -->
          <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">

              </div>
            </div>
          </div>
        </div>

        <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Trailer</h6>
        <h3 class="font-weight-bold text-center dark-grey-text pb-2">Hasta el ultimo hombre</h3>
        <hr class="w-header my-4">
        <iframe width="310" height="200" 
        src="https://www.youtube.com/embed/-jD_7YfYE08"  
        allowfullscreen></iframe>
        <p class="lead text-center text-muted pt-2 mb-5">Pelicula basada en hechos reales sobre un soldado que quiere combatir la guerra pero sin usar la violencia</p>

        <div class="row">
          <div class="col-md-8 mx-auto mb-4">

            <div class="view z-depth-1 rounded">

              <div class="mask flex-center rgba-white-light">

              </div>
            </div>

          </div>
        </div>

        

      </section>
      <!-- Section: Block Content -->


    </div>    </div>

    <div class="col-sm">
      <div class="container z-depth-1 my-5 py-5">


        <!-- Section: Block Content -->
        <section>

          <!-- Modal -->
          <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">

              </div>
            </div>
          </div>
        </div>

        <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Trailer</h6>
        <h3 class="font-weight-bold text-center dark-grey-text pb-2">Escuadron 6</h3>
        <hr class="w-header my-4">
        <iframe width="310" height="200" 
        src="https://www.youtube.com/embed/aVfxMcGrKm4"  
        allowfullscreen></iframe>
        <p class="lead text-center text-muted pt-2 mb-5">Pelicula que trata de 6 personas que finjieron su muerte para cambiar al mundo</p>
<br>
        <div class="row">
          <div class="col-md-8 mx-auto mb-4">

            <div class="view z-depth-1 rounded">

              <div class="mask flex-center rgba-white-light">

              </div>
            </div>

          </div>
        </div>

        

      </section>
      <!-- Section: Block Content -->


    </div>    </div>

    <div class="col-sm">
      <div class="container z-depth-1 my-5 py-5">


        <!-- Section: Block Content -->
        <section>

          <!-- Modal -->
          <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">

              </div>
            </div>
          </div>
        </div>

        <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Trailer</h6>
        <h3 class="font-weight-bold text-center dark-grey-text pb-2">Siempre a tu lado</h3>
        <hr class="w-header my-4">
        <iframe width="310" height="200" 
        src="https://www.youtube.com/embed/jrVVIaO_hTg"  
        allowfullscreen></iframe>
        <p class="lead text-center text-muted pt-2 mb-5">Pelicula basada en una historia en la vida real que trata de un perro que le es fiel a su dueño muerto</p>

        <div class="row">
          <div class="col-md-8 mx-auto mb-4">

            <div class="view z-depth-1 rounded">

              <div class="mask flex-center rgba-white-light">

              </div>
            </div>

          </div>
        </div>



      </section>
      <!-- Section: Block Content -->



    </div>    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="container z-depth-1 my-5 py-5">


            <!-- Section: Block Content -->
            <section>

              <!-- Modal -->
              <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">

                  </div>
                </div>
              </div>
            </div>

            <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Trailer</h6>
            <h3 class="font-weight-bold text-center dark-grey-text pb-2">Secreto en la montaña</h3>
            <hr class="w-header my-4">
            <iframe width="310" height="200" 
            src="https://www.youtube.com/embed/zwTmI-EGEgc"  
            allowfullscreen></iframe>
            <p class="lead text-center text-muted pt-2 mb-5">Pelicula romantica sobre 2 vaqueros que tienen un secreto</p>

            <div class="row">
              <div class="col-md-8 mx-auto mb-4">

                <div class="view z-depth-1 rounded">

                  <div class="mask flex-center rgba-white-light">

                  </div>
                </div>

              </div>
            </div>



          </section>
          <!-- Section: Block Content -->


        </div>    </div>

        <div class="col-sm">
          <div class="container z-depth-1 my-5 py-5">


            <!-- Section: Block Content -->
            <section>

              <!-- Modal -->
              <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">

                  </div>
                </div>
              </div>
            </div>

            <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Trailer</h6>
            <h3 class="font-weight-bold text-center dark-grey-text pb-2">El padrino</h3>
            <hr class="w-header my-4">
            <iframe width="310" height="200" 
            src="https://www.youtube.com/embed/gCVj1LeYnsc"  
            allowfullscreen></iframe>
            <p class="lead text-center text-muted pt-2 mb-5">Pelicula sobre la mafia de la antigua New York</p>
<br>
            <div class="row">
              <div class="col-md-8 mx-auto mb-4">

                <div class="view z-depth-1 rounded">

                  <div class="mask flex-center rgba-white-light">

                  </div>
                </div>

              </div>
            </div>



          </section>
          <!-- Section: Block Content -->


        </div>    </div>

        <div class="col-sm">
          <div class="container z-depth-1 my-5 py-5">


            <!-- Section: Block Content -->
            <section>

              <!-- Modal -->
              <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">

                  </div>
                </div>
              </div>
            </div>

            <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Trailer</h6>
            <h3 class="font-weight-bold text-center dark-grey-text pb-2">Ready player one</h3>
            <hr class="w-header my-4">
            <iframe width="310" height="200" 
            src="https://www.youtube.com/embed/ldENeOEllUw"  
            allowfullscreen></iframe>
            <p class="lead text-center text-muted pt-2 mb-5">Pelicula sobre una persona en un mundo de videojuegos</p>

            <div class="row">
              <div class="col-md-8 mx-auto mb-4">

                <div class="view z-depth-1 rounded">

                  <div class="mask flex-center rgba-white-light">

                  </div>
                </div>

              </div>
            </div>



          </section>
          <!-- Section: Block Content -->



        </div>    </div>

        <div class="container">
          <div class="row">
            <div class="col-sm">
              <div class="container z-depth-1 my-5 py-5">


                <!-- Section: Block Content -->
                <section>

                  <!-- Modal -->
                  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">

                      </div>
                    </div>
                  </div>
                </div>

                <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Trailer</h6>
                <h3 class="font-weight-bold text-center dark-grey-text pb-2">Pulp Fiction</h3>
                <hr class="w-header my-4">
                <iframe width="310" height="200" 
                src="https://www.youtube.com/embed/5ZAhzsi1ybM"  
                allowfullscreen></iframe>
                <p class="lead text-center text-muted pt-2 mb-5">Pelicula que trata de 3 historias que se enlazan entre sí y tiene un excelente argumento</p>
<br>
                <div class="row">
                  <div class="col-md-8 mx-auto mb-4">

                    <div class="view z-depth-1 rounded">

                      <div class="mask flex-center rgba-white-light">

                      </div>
                    </div>

                  </div>
                </div>



              </section>
              <!-- Section: Block Content -->


            </div>    </div>

            <div class="col-sm">
              <div class="container z-depth-1 my-5 py-5">


                <!-- Section: Block Content -->
                <section>

                  <!-- Modal -->
                  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">

                      </div>
                    </div>
                  </div>
                </div>

                <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Trailer</h6>
                <h3 class="font-weight-bold text-center dark-grey-text pb-2">Rocky IV</h3>
                <hr class="w-header my-4">
                <iframe width="310" height="200" 
                src="https://www.youtube.com/embed/mIE5HYkzvV0"  
                allowfullscreen></iframe>
                <p class="lead text-center text-muted pt-2 mb-5">Pelicula sobre el exitoso boxeador rocky que pelea con el ruso ivan drago para vengar a su amigo muerto</p>

                <div class="row">
                  <div class="col-md-8 mx-auto mb-4">

                    <div class="view z-depth-1 rounded">

                      <div class="mask flex-center rgba-white-light">

                      </div>
                    </div>

                  </div>
                </div>



              </section>
              <!-- Section: Block Content -->


            </div>    </div>

            <div class="col-sm">
              <div class="container z-depth-1 my-5 py-5">


                <!-- Section: Block Content -->
                <section>

                  <!-- Modal -->
                  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">

                      </div>
                    </div>
                  </div>
                </div>

                <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Trailer</h6>
                <h3 class="font-weight-bold text-center dark-grey-text pb-2">Aquaman</h3>
                <hr class="w-header my-4">
                <iframe width="310" height="200" 
                src="https://www.youtube.com/embed/LS7qSSjSmjw"  
                allowfullscreen></iframe>
                <p class="lead text-center text-muted pt-2 mb-5">Pelicula sobre un superheroe que quiere reclamar su trono en su reino en el fondo del mar</p>

                <div class="row">
                  <div class="col-md-8 mx-auto mb-4">

                    <div class="view z-depth-1 rounded">

                      <div class="mask flex-center rgba-white-light">

                      </div>
                    </div>

                  </div>
                </div>



              </section>
              <!-- Section: Block Content -->



            </div>    </div>


          </div>
        </div>

</body>
</html>
<?php
ob_end_flush();
?>
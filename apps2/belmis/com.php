<?php
ob_start() ;
?>
<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>

<?php
     //Valida que el usuario hizo clik en el Boton 
if (isset($_POST['registrar'])) 
{
    //Trae datos del formulario
  $usuario=$_POST['usuario'];
  $comentario=$_POST['comentario'];



        //Validar que las cajas no esten vacias
  if (!empty($usuario) && !empty($comentario))
  {
              //Insertar datos en la tabla de la db  
    $sql=$cnnPDO->prepare("INSERT INTO comentario
      (usuario, comentario) VALUES (:usuario, :comentario)");

              //Asignar las variables a los campos de la tabla
    $sql->bindParam(':usuario',$usuario);
    $sql->bindParam(':comentario',$comentario);
    
              //Ejecutar la variable $sql
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
              

header('Location: comentarios.php');

  }
}
?>

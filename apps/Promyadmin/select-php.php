 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
<style type="text/css">
	
	.swal{
  background-color: rgba(43, 165, 137, 0.45);
}
</style>
<?php 
session_start();
$db = $_SESSION['db'];
$tabla = $_SESSION['tabla'];
$id = $_POST['id'];

$con = mysqli_connect('localhost','root','', $db);
$procedure= "CALL select_" . $tabla . " ('$id');";
$registro=mysqli_query($con, $procedure);
$campo=mysqli_fetch_array($registro);


 $n= $campo['nombre'];
$c =$campo['correo'];
$t =$campo['telefono'];
echo "|";
 ?>

 <?php echo "<script> 


 swal({
   title: 'Los datos consultados son:',
   text: 'Nombre: $n  Correo: $c Telefono: $t',
   type: 'success',
 }
);
    setTimeout('history.back()',8000);


</script>";
?>


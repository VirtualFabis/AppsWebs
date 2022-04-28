<?php 

ob_start();

?>
<?php 
require_once 'cnn.php';

require_once 'cdn.html';

?>
2


<?php
     //Valida que el usuario hizo clik en el Boton 

if (isset($_POST['enviar'])) 
{
    //Trae datos del formulario
    $nombre=$_POST['nombre'];
    $tarjeta=$_POST['tarjeta'];
    $cvv=$_POST['cvv'];


        //Validar que las cajas no esten vacias
    if (!empty($nombre) && !empty($tarjeta) && !empty($cvv))
    {
              //Insertar datos en la tabla de la db  
        $sql=$cnnPDO->prepare("INSERT INTO tarjeta
            (nombre, tarjeta, cvv) VALUES (:nombre, :tarjeta, :cvv)");

              //Asignar las variables a los campos de la tabla
        $sql->bindParam(':nombre',$nombre);
        $sql->bindParam(':tarjeta',$tarjeta);
        $sql->bindParam(':cvv',$cvv);
     
              //Ejecutar la variable $sql
        $sql->execute();
        unset($sql);
        unset($cnnPDO);
                    header("location:principal.php"); 

    }


}
?>
<!-- CSS -->
<link rel="icon" href="images/metodo.jpg">
<link href="css" rel="stylesheet" type="text/css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

	<!-- JavaScript -->

	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Metodo de pago</title>

    <style type="">
      
      .creditCardForm {
    max-width: 700px;
    background-color: #fff;
    margin: 100px auto;
    overflow: hidden;
    padding: 25px;
    color: #4c4e56;
}
.creditCardForm label {
    width: 100%;
    margin-bottom: 10px;
}
.creditCardForm .heading h1 {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    color: #4c4e56;
}
.creditCardForm .payment {
    float: left;
    font-size: 18px;
    padding: 10px 25px;
    margin-top: 20px;
    position: relative;
}
.creditCardForm .payment .form-group {
    float: left;
    margin-bottom: 15px;
}
.creditCardForm .payment .form-control {
    line-height: 40px;
    height: auto;
    padding: 0 16px;
}
.creditCardForm .owner {
    width: 63%;
    margin-right: 10px;
}
.creditCardForm .CVV {
    width: 35%;
}
.creditCardForm #card-number-field {
    width: 100%;
}
.creditCardForm #expiration-date {
    width: 49%;
}
.creditCardForm #credit_cards {
    width: 50%;
    margin-top: 25px;
    text-align: right;
}
.creditCardForm #pay-now {
    width: 100%;
    margin-top: 25px;
}
.creditCardForm .payment .btn {
    width: 100%;
    margin-top: 3px;
    font-size: 24px;
    background-color: #2ec4a5;
    color: white;
}
.creditCardForm .payment select {
    padding: 10px;
    margin-right: 15px;
}
.transparent {
    opacity: 0.2;
}
@media(max-width: 650px) {
    .creditCardForm .owner,
    .creditCardForm .CVV,
    .creditCardForm #expiration-date,
    .creditCardForm #credit_cards {
        width: 100%;
    }
    .creditCardForm #credit_cards {
        text-align: left;
    }
}
    </style>
    
    
	<body>
	<!-- Navigation -->
 <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark aqua-gradient">


  <div class="container">

    <a class="navbar-brand py-0" href="#"><i class="fab fa-3x fa-mdb"></i></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto text-uppercase">
        <li class="nav-item active">
          <a class="nav-link font-weight-normal">Necesitas comprar tu servico para seguir usando este pagina web!!</a>
        
      
                 </li>
      </ul>

    </div>
    <!-- Collapsible content -->

  </div>

</nav>

<div class="creditCardForm">
    <div class="heading">
        <h1>Confirmar Compra</h1>
    </div>
    <div class="payment">
     <form class="login" method="post">
            <div class="form-group owner">
                <label for="owner">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group CVV">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" name="cvv">
            </div>
            <div class="form-group" id="card-number-field">
                <label for="cardNumber">Numero de tarjeta</label>
                <input type="text" class="form-control" name="tarjeta">
            </div>
            <div class="form-group" id="expiration-date">
                <label>Fecha de expiracion</label>
                <select>
                    <option value="01">Enero</option>
                    <option value="02">Febrero </option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                    <option value="05">Mayo</option>
                    <option value="06">Junio</option>
                    <option value="07">Julio</option>
                    <option value="08">Agosto</option>
                    <option value="09">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Deciembre</option>
                </select>
                <select>
                    <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                    <option value="22"> 2022</option>
                    <option value="23"> 2023</option>
                    <option value="24"> 2024</option>
                    <option value="25"> 2025</option>
                </select>
            </div>
            <div class="form-group" id="credit_cards" >

                <img src="images/visa.png" id="visa" height="50" width="100">
                <img src="images/mastercard.png" id="mastercard" height="50" width="100">

                
            </div>
            <div class="form-group" id="pay-now">
                <button type="submit" class="btn btn-default" name="enviar">Pagar</button>
            </div>
        </form>
    </div>
</div>




	
	</body>
	</html>

  

<?php 

require 'cdn.html';


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Belen</title>
 		<style type="text/css">
		.columna {
			width:33%;
			float:left;
		}

		@media (max-width: 500px) {

			.columna {
				width:auto;
				float:none;
			}

		}
	</style>
 </head>
 <body>
 
		<!--Navbar -->
		<nav class="mb-1 navbar navbar-expand-lg navbar-dark  peach-gradient">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
			aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" href="#"> <i class="fas fa-tasks"></i>Productos de la tienda 
						<span class="sr-only">(current)</span>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto nav-flex-icons">
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light">
						<i class="fab fa-twitter"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light">
						<i class="fab fa-facebook"></i>
					</a>
				</li>
				
				<li class="nav-item">
				</li>

			</ul>
		</div>
	</nav>
	<br>

 </body>
 </html>
<?php 

require 'vendor/autoload.php';

use MongoDB\Client as Mongo;

$mongo= new Mongo("mongodb://localhost:27017");

$db = $mongo->datos;

$colection = $db->productos;


 $colection->insertMany([
    [
        'Producto' => 'agua',
        'Precio' => '$15',
        'Stock' => '25',
    ],
    [
        'Producto' => 'Coca cola',
        'Precio' => '$25',
        'Stock' => '32',
    ],
     [
        'Producto' => 'Sabritas',
        'Precio' => '$11',
        'Stock' => '23',
    ],
     [
        'Producto' => 'Chocolate',
        'Precio' => '$6',
        'Stock' => '56',
    ],
     [
        'Producto' => 'Tortillas de Maiz',
        'Precio' => '$23',
        'Stock' => '45',
    ],
     [
        'Producto' => 'Caja de cigarros',
        'Precio' => '$65',
        'Stock' => '100',
    ],
]);




$consulta = $colection->find();

foreach ($consulta as $valor) {


	echo " 
			<div class='container'>
			<div class='columna'>
			<div class='row'>
			<div class='col-lg-10 '>

			<div class='card testimonial-card'>

			<div class='card-up indigo lighten-1'></div>


			<div class='avatar mx-auto white'>
			<img src='images/uwu.png' class='rounded-circle'
			alt='woman avatar' width='200' height='200'>
			</div>

			<div class='card-body'>

			<h4 class='card-title'><i class='fab fa-product-hunt'></i> ";  echo $valor['Producto']; 



echo "</h4>
			<p> 
			<i class='far fa-money-bill-alt'></i> Precio: "; echo $valor['Precio']; 

echo "<br>
			<p> 
			<i class='fas fa-warehouse'></i> Stock: "; echo $valor['Stock']; 


			echo "<br>
			</p>
			</div>
			</div>
			</div>

			</div>
			<br>
			</div>
			</div>


			";



	
}

 ?>


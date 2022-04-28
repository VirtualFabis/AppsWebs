<?php  


require_once 'cdn.html';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Saber</title>
	<link rel="icon" href="images/logo.png" />

	<style type="text/css">
		body{

		}
		section{
			margin-top: -30x;
		}
	</style>
</head>
<body>
	<section>	

		<!--Navbar -->
		<nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient">

			<a class="navbar-brand" href="#"><img src="images/logo.png"width= "60" height="60"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
			aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" href="#">
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Aplicaciones Web orientada a servicios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Regresar al inicio</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto nav-flex-icons">
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light">
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light " href="https://www.facebook.com/fabis.ibarra.71/">
						<i class="fab fa-facebook"></i>
					</a>
				</li>
				<li class="nav-item">
				</li>
				<li class="nav-item">

				</li>
				<li>
				</li>
				<li></li>
			</ul>
		</div>
	</nav>
</section>
<section>
	<div class="container mt-5">


		<!--Section: Content-->
		<section class="text-justify">

			<p class="font-weight-bold">Diagrama de arquitectura SOAP para aplicaciones orientadas a servicios</p>

		
			<ul>
				<p><li>Definición: </li> <br>

				Los servicios SOAP o mejor conocimos simplemente como Web Services, son servicios que basan su comunicación bajo el protocolo SOAP (Simple Object Access Protocol) el cual este definido por Wikipedia como “protocolo estándar que define cómo dos objetos en diferentes procesos pueden comunicarse por medio de intercambio de datos XML”. </p> <br>

	

				<center>
					<figure class="figure">
						<img src="images/so.png" class="figure-img img-fluid z-depth-1"
						alt="...">
					</center>

					<hr>

					<p class="my-4 font-weight-bold">Desarrollar el diagrama de aplicación Web hibridas (Mashup).
					</p>

				
					<ul>
						<li> Una Mashup o aplicación web híbrida es una aplicación que combina servicios de varias páginas web en una sola para ofrecer un nuevo servicio. Es habitual que la integración de datos se obtenga desde APIs abiertas. La libertad para integrar todas estas fuentes supone una oportunidad para desarrollar nuevos servicios en muy poco tiempo, al basarse en funcionalidades ya existentes.</li><br>
						<li>El contenido usado en mashups es típicamente obtenido de otra fuente vía una interface pública o API (web services), aunque existe gente en la comunidad que considera que los casos en que las interfaces son privadas no deberían contar como mashups. Otros métodos de obtener contenido para mashups incluyen Web Feeds (i.e RSS o Atom) y screen scraping. 
						</li><br>
						<li> Mucha gente experimenta con mashups usando las APIs de Amazon, eBay, Flickr, Google, Microsoft, Yahoo o YouTube lo que ha llevado a la creación de un editor mashup.</li>
					</ul>
					<p class="my-4 font-weight-bold">La arquitectura de los mashups está siempre compuesta de tres partes:
					</p>

				
					<ul>
						<li> El proveedor de contenidos: fuente de los datos. Los datos están disponibles vía una API y diferentes protocolos web como RSS, REST y Web Service.</li><br>
						<li>El sitio mashup: es la nueva aplicación web que provee un nuevo servicio utilizando diferente información y de la que no es dueña.
						</li><br>
						<li> El web browser cliente: es la interface de usuario del mashup. En una aplicación web, el contenido puede ser mezclado por el web browser clientes usando lenguaje web del lado del cliente. Por ejemplo, javascript.</li>
					</ul>
<br>
					<center>
					<figure class="figure">
						<img src="images/i.png" class="figure-img img-fluid z-depth-1"
						alt="...">
					</center>

					<p class="my-4 font-weight-bold">Seleccionar las API's a utilizar.
					</p>

					<p>Qlik Sense viene con una serie de capacidades y otras API del lado del cliente que se pueden utilizar para crear mashups. Una vez que su mashup esté configurado, tendrá acceso al espacio de nombres qlik .<br>
El espacio de nombres qlik proporciona todos los métodos de la API raíz. Desde allí, puede utilizar el método openApp para conectarse a una aplicación Qlik Sense y obtener un objeto de aplicación con el que puede utilizar todos los métodos de la API de la aplicación. Ese es el patrón general de las API de capacidad. Por ejemplo, los métodos get y create de la API de visualización devuelven una instancia de la clase QVisualization que tiene métodos relacionados con la modificación y visualización de la visualización devuelta.
</p>

					
<center>
					<figure class="figure">
						<img src="images/api.png" class="figure-img img-fluid z-depth-1"
						alt="...">
					</center>

				</section>
				<!--Section: Content-->


			</div>

		</section>
	</body>
	</html>

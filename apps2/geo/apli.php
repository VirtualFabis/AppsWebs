<?php 


require_once 'cdn.html';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Saber Hacer</title>
	<link rel="icon" href="images/logo.png" />
	<style type="text/css">
		body{

		}
		section{
			margin-top: -30px;
		}
	</style>

</head>
<body>
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
				<a class="nav-link" href="#">Saber Hacer
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Geolocalización</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php"> </a>
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

<section>
	<div class="container my-5 z-depth-1">


		<!--Section: Content-->
		<section class="dark-grey-text">

			<div class="row pr-lg-5">
				<div class="col-md-7 mb-4">

					<div class="view">
						<img src="images/api.jpg" class="img-fluid" alt="smaple image" width="500">
					</div>

				</div>
				<div class="col-md-5 d-flex align-items-center">
					<div>

						<h3 class="font-weight-bold mb-4">¿QUÉ ES UNA API?</h3>

						<p>Una API es un conjunto de definiciones y protocolos que se utiliza para desarrollar e integrar el software de las aplicaciones. API significa interfaz de programación de aplicaciones.<br>
							Las API permiten que sus productos y servicios se comuniquen con otros, sin necesidad de saber cómo están implementados. Esto simplifica el desarrollo de las aplicaciones y permite ahorrar tiempo y dinero. Las API le otorgan flexibilidad; simplifican el diseño, la administración y el uso de las aplicaciones, y proporcionan oportunidades de innovación, lo cual es ideal al momento de diseñar herramientas y productos nuevos (o de gestionar los actuales).<br> 
							<br>
							Actualmente la gran mayoría posee al menos un aparato que puede proporcionar esta información: el teléfono móvil. Cualquier tipo de teléfono móvil, sea Smartphone o no, puede ser localizado, ya que contamos con varios modos de geolocalizar.
						</p>


					</div>
				</div>
			</div>
		</div>
		<div class="container my-5 z-depth-1">


			<!--Section: Content-->
			<section class="dark-grey-text">

				<div class="row pr-lg-5">
					<div class="col-md-7 mb-4">
						<center>
							<div class="view">
								<img src="images/gps.png" a class="img-fluid" alt="smaple image" width="700">
							</div>
						</center>
					</div>
					<div class="col-md-5 d-flex align-items-center">
						<div>

							<h3 class="font-weight-bold mb-4">¿Cómo generar una clase API?</h3><br>

							<p>1 – Inicia sesión o crea una cuenta de Gmail</p><br>
							<p>Primero, para obtener una clave de API de Google Maps, deberás tener una cuenta de Gmail.</p><br>
							<p>2: Accede al panel de Google API Console</p><br>
							<p>Luego, habiendo iniciado sesión en tu cuenta de Gmail, debes ir al panel del API Console de Google.</p><br>
							<p>3 – Selecciona un proyecto existente o crea uno nuevo.</p>
							<p>Solo podrás obtener una API Key de Google Maps si tienes un proyecto en la plataforma. Si ya has creado uno, aparecerán dos opciones al lado derecho de la pantalla: “SELECCIONAR” y “CREAR”. En caso que aún no tengas ninguno, solo aparecerá la opción «CREAR», en la que debes hacer click.</p><br>
							<p>Ahora, deberás darle un nombre a tu proyecto. Es importante que este nombre esté relacionado con la función que desempeñará para que sea más fácil identificarlo de los demás. Después de ingresar el nombre, simplemente haz click en «CREAR». Serás redirigido al menú «Credenciales»</p><br>
							<p>4 – Crea tus credenciales</p><br>
							<p>Para acceder a las APIs se requiere credenciales. Aquí es donde las crearás. Simplemente haz click en el botón azul titulado «Crear credenciales».</p><br>
							<p>Luego selecciona la primera opción, nombrada: «Clave de API», al seleccionar esta opción, se abrirá una nueva ventana con tu clave de API.</p><br>
							<p>Al hacer click en «RESTRINGIR CLAVE», tendrás la opción de cambiar el nombre de tu clave de API y aplicar las restricciones necesarias de acuerdo con tu uso. Si no deseas aplicar ninguna restricción, simplemente haz click en «CERRAR». Hecho esto, ahora puedes copiar tu API key e ingresarla en tu aplicación o sitio web.</p>
							<p>5 – Activa tu Google Maps API Key</p><br>
							<p>Ahora que tienes tus credenciales, el siguiente paso para obtener una clave de API de Google Maps es seleccionar la API que deseas utilizar. Para hacer esto, simplemente accede a la Biblioteca desde el menú al lado izquierdo de la página.</p><br>
							<p>Puedes navegar por la página o usar el campo de búsqueda para buscar la API que deseas. Para este ejemplo buscamos «Maps» y seleccionamos Maps Static API.</p><br>
							<p>La selección de cualquier API te llevará a una página que contiene información general sobre la API, así como tutoriales, términos de servicio, documentación y detalles sobre el monto que se te cobrará si superas el límite de crédito mensual de $200 dólares otorgado para todas las cuentas.</p><br>
							<p>Para habilitar esta API, simplemente haz click en el botón azul que dice «HABILITAR» y serás redirigido al panel API donde puedes realizar un seguimiento de las métricas de uso.</p><br>
							<p>Listo ¡Ahora ya sabes cómo obtener una API Key de Google Maps!</p>





						</div>
					</div>
				</div>
			</div>

			<div class="container my-5 z-depth-1">


				<!--Section: Content-->
				<section class="dark-grey-text">

					
									

								</div>
							</center>
						</div>

					</div>
				</div>
			</section>
			<!--Section: Content-->


		</div>
	</section>

</body>
</html>
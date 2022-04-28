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

			<p class="font-weight-bold">Paradigma del desarrollo de aplicaciones orientadas a servicios</p>

			<p class="font-weight-bold">1) Distinguir los servicios que se ofrecen en la nube.
			</p>
			<ul>
				<p><li>Software as a Service (SaaS): </li>
				El más utilizado. El software está alojado en servidores de los proveedores y el cliente accede a ellos a través del navegador web. Todo lo relacionado con mantenimiento, soporte y disponibilid </ad es manejado por el proveedor.<br>

				<li>Platform as a Service (PaaS): </li>
				En este tipo de servicios en la nube el proveedor ofrece acceso a un entorno basado en cloud en el cual los usuarios pueden crear y distribuir sus propias aplicaciones. El proveedor proporciona la infraestructura subyacente.<br>

				<li>Infrastructure as a Service (IaaS): </li>
				Un proveedor de servicios proporciona el software y las aplicaciones a través de Internet. Los usuarios se suscriben al software y acceden a él a través de la web o las APIs del proveedor.

				<li>Un usuario estándar normalmente utilizará solo SAAS. </li></p></ul>

				<center>
					<figure class="figure">
						<img src="images/nube.png" class="figure-img img-fluid z-depth-1"
						alt="...">
					</center>

					<hr>

					<p class="my-4 font-weight-bold">2) Identificar las características de las aplicaciones orientadas a servicios.
					</p>

					<p>SOA permite la reutilización de activos existentes para nuevos servicios que se pueden crear a partir de una infraestructura de TI que ya se había diseñado. De esta forma, permite a las empresas optimizar la inversión por medio de la reutilización que, además, conlleva otra ventaja: la interoperabilidad entre las aplicaciones y tecnologías heterogéneas. </p>

					<ul>
						<li> Su flexibilidad, que permite la reutilización.</li>
						<li> Su versatilidad, que hace posible que los servicios puedan ser consumidos por los clientes en aplicaciones o procesos de negocio distintos.</li>
						<li> Sus posibilidades, que optimizan el trabajo con datos y su coordinación.</li>
					</ul>

					<p class="my-4 font-weight-bold">3) Identificar el concepto y las características de las aplicaciones Web híbridas (Mashup).
					</p>

					<p>Las Aplicaciones Híbridas son aquellas desarrolladas de una manera similar a las aplicación web que utilizan los lenguajes HTML, CSS y Javascript y su ejecución es sobre un contenedor nativo. Es decir son una mezcla entre Aplicaciones Nativas y Web. Además éste tipo de aplicaciones se pueden visualizan dentro de un navegador web por medio de una URL donde su contenido se adapta a la pantalla y toma aspecto de navegador web.</p>

					<ul>
						<p>Caracteristicas</p>
						<li> Su desarrollo es mucho más sencillo y económico al solo requerir desarrollarse una vez.</li>
						<li> El código base con el que se crea la app puede utilizarse en múltiples plataformas, lo cual ofrece una enorme versatilidad a la hora de exportar las aplicaciones a distintas plataformas.</li>
						<li> Permite la reutilización de códigos lo cual ahorra bastante tiempo a los desarrolladores siendo por lo general más sencillo tener una aplicación funcional en menor tiempo.</li>
						<li>No necesita de permisos externos para publicarse en las app stores.</li>

					</ul>



				</section>
				<!--Section: Content-->


			</div>

		</section>
	</body>
	</html>

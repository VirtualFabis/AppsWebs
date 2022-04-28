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

			<p class="font-weight-bold">Arquitectura orientada a servicios (SOA).</p>

			<p class="font-weight-bold">1) Definir la arquitectura orientada a servicios.
			</p>
			<ul>
				<p><li>Definicion</li>
					La arquitectura orientada a servicios (SOA) es el nexo que une las metas de negocio con el sistema de software. Su papel es el de aportar flexibilidad, desde la automatización de las infraestructura y herramientas necesarias consiguiendo, al mismo tiempo, reducir los costes de integración. SOA se ocupa del diseño y desarrollo de sistemas distribuidos y es un potente aliado a la hora de llevar a cabo la gestión de grandes volúmenes de datos, datos en la nube y jerarquías de datos.<br> <br>

					<li>Enfoques arquitectónicos de SOA</li>
					A pesar de que el enfoque tradicional a la hora de abordar el diseño de los sistemas distribuidos se basaba en comunicaciones de red, seguridad, gestión transaccional, glosario y ubicación, con la arquitectura orientada  a servicios es distinto, las preocupaciones se centran en dos aspectos:<br>
					Comunicación.<br>

					Integración de servicios..<br>

				</p></ul>
				<center>
					<figure class="figure">
						<img src="images/hola.png" class="figure-img img-fluid z-depth-1"
						alt="...">
					</center>

					<hr>

					<p class="my-4 font-weight-bold">2) Identificar los principios de diseño que se aplican a sobre cada servicio modelado.

					</p>

					<p>Un principio es una práctica aceptada por la industria y generalizada. Esta, propone un medio para lograr soluciones basadas en experiencias pasadas o en la aceptación de la industria. Cuando se empiezan a construir soluciones, un principio de diseño representa una guía altamente recomendada para conformar soluciones lógicas en cierto camino y con ciertos objetivos en mente. </p>

					<p>Un contrato puede estar compuesto por uno o más documentos de especificación técnica para ser usados en tiempo de ejecución, sin embargo, pueden necesitarse documentos no técnicos que complementan la definición del servicio.</p>

					<p>El nivel de acoplamiento de un servicio deriva de qué tan dependiente es de otro para completar satisfactoriamente su objetivo. Para que un servicio sea eficiente, es conveniente que no dependa de ningún otro, o que si lo hace, sea a un nivel mínimo.</p>

					<p>Permite ocultar información no requerida de un servicio sin que se afecte el uso del mismo. De esta forma se tendrá un paquete interno donde estará toda la información técnica y de negocio del servicio, y al consumidor se expondrá un contrato con la mínima cantidad de información necesaria para que este funcione correctamente y no se pierdan los objetivos de negocio.</p>

					<p>La reutilización es el principal objetivo de una SOA. Un servicio debe ser explotado al máximo de tal manera que sea posible su uso en diferentes contextos y pueda cumplir diferentes objetivos. De esta manera los servicios podrán ser reusables dentro de la  misma aplicación.</p>

					<p>Para maximizar la escalabilidad del servicio, y para aprovechar al máximo los umbrales de rendimiento se requieren inventarios de servicios, de tal forma que se trabaje en el interior y los servicios y la arquitectura que los rodean puedan ser los responsables de la administración de los estados.</p>

					<p class="my-4 font-weight-bold">3) Identificar los estándares relacionados a los servicios: XML, SOAP, WSDL, UDDI, REST

					</p>

					<p>
						Uno de los atributos clave de estándares de Internet es que se centran en protocolos y no en implementaciones. Internet se compone de tecnologías heterogéneas que operan conjuntamente de modo satisfactorio mediante protocolos compartidos. Esto impide que los proveedores individuales impongan un estándar en Internet. El desarrollo del software de código fuente abierto desempeña un rol fundamental para proteger la interoperatividad de implementaciones de estándares del proveedor.<br><br>

						Los estándares siguientes desempeñan roles clave en servicios Web: UDDI (Universal Description, Discovery and Integration), WSDL (Web Services Description Language), WSIL (Web Services Inspection Language), SOAP y WS-I (Web Services Interoperability). La relación entre estos estándares.<br><br>

						La especificación UDDI define estándares abiertos independientes de la plataforma que permiten a las empresas compartir información en un registro de empresa global, encontrar servicios en el registro y definir cómo actúan conjuntamente en Internet. Si desea más información sobre UDDI.<br><br>

						WSIL es una especificación abierta basada en XML que define un método de descubrimiento de servicios distribuidos que suministra referencias a descripciones de servicio en el punto de ofertas del proveedor de servicios, especificando cómo comprobar si hay servicios Web disponibles en un sitio Web. Un documento WSIL define las ubicaciones en un sitio Web donde se pueden buscar descripciones del servicio Web. Dado que WSIL se centra en el descubrimiento de servicios distribuidos, la especificación WSIL complementa UDDI facilitando el descubrimiento de servicios que están disponibles en sitios Web que quizá no se enumeren aún en un registro UDDI.
					</p>
					<center>
						<figure class="figure">
							<img src="images/cliente.png" class="figure-img img-fluid z-depth-1"
							alt="...">


						</center>
					</section>
					<!--Section: Content-->


				</div>

			</section>
		</body>
		</html>

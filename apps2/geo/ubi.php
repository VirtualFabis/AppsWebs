
<!DOCTYPE html>
<html lang="en">
<head>
		<title>Mi Ubicación</title>
	<link rel="icon" href="images/logo.png" />
  <meta charset="UTF-8">
 
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

<style type="text/css">
		body{

		}
		section{
			margin-top: -15px;
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
					<a class="nav-link" href="#">Aplicaciones Web orientada a servicios</a>
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
					<button class="btn aqua-gradient" onclick="cargarmap()">Cargar mapa</button>

				</li>
				<li class="nav-item">

				</li>
				<li>
				</li>
				<li></li>
			</ul>
		</div>
	</nav>
<div id='ubicacion'></div>
<script type="text/javascript">
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(mostrarUbicacion);
	} else {alert("¡Error! Este navegador no soporta la Geolocalización.");}
function mostrarUbicacion(position) {
    var times = position.timestamp;
	var latitud = position.coords.latitude;
	var longitud = position.coords.longitude;
    var altitud = position.coords.altitude;	
	var exactitud = position.coords.accuracy;	
	var div = document.getElementById("ubicacion");
	div.innerHTML = "<div class='alert alert-primary' role='alert'>Latitud: " + latitud + "     Longitud: " + longitud + "    Exactitud: " + exactitud + " </div> ";}	
function refrescarUbicacion() {	
	navigator.geolocation.watchPosition(mostrarUbicacion);}	
</script>
<section>
<div id="demo"></div>
<div id="mapholder"></div>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var x=document.getElementById("demo");
function cargarmap(){
navigator.geolocation.getCurrentPosition(showPosition,showError);
function showPosition(position)
  {
  lat=position.coords.latitude;
  lon=position.coords.longitude;
  latlon=new google.maps.LatLng(lat, lon)
  mapholder=document.getElementById('mapholder')
  mapholder.style.height='525px';
  mapholder.style.width='1359px';
  var myOptions={
  center:latlon,zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeControl:false,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
  var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
  }
function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="Denegada la peticion de Geolocalización en el navegador."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="La información de la localización no esta disponible."
      break;
    case error.TIMEOUT:
      x.innerHTML="El tiempo de petición ha expirado."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="Ha ocurrido un error desconocido."
      break;
    }
  }}

</script>
</section>

</body>
</html>
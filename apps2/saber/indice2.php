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
			margin-top: -25px;
		}
	</style>
	<script type="text/javascript">
		(function ($){
			$.fn.counter = function() {
				const $this = $(this),
				numberFrom = parseInt($this.attr('data-from')),
				numberTo = parseInt($this.attr('data-to')),
				delta = numberTo - numberFrom,
				deltaPositive = delta > 0 ? 1 : 0,
				time = parseInt($this.attr('data-time')),
				changeTime = 10;

				let currentNumber = numberFrom,
				value = delta*changeTime/time;
				var interval1;
				const changeNumber = () => {
					currentNumber += value;
      //checks if currentNumber reached numberTo
      (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
      this.text(parseInt(currentNumber));
      currentNumber == numberTo ? clearInterval(interval1) : currentNumber;  
  }

  interval1 = setInterval(changeNumber,changeTime);
}
}(jQuery));

		$(document).ready(function(){

			$('.count-up').counter();
			$('.count1').counter();
			$('.count2').counter();
			$('.count3').counter();

			new WOW().init();

			setTimeout(function () {
				$('.count5').counter();
			}, 3000);
		});
	</script>

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
					<a class="nav-link" href="#">Saber
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
	<div class="container py-5 my-5 z-depth-1">
		<section class="p-md-3 mx-md-5 text-lg-left">
			<h2 class="font-weight-bold text-center mb-5 pb-3">Indice del Saber 2</h2>
			<div class="row text-center d-flex justify-content-center">
				<div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
					<a href="saber2.php"><i class="fas fa-map-marker-alt fa-3x indigo-text mb-4"></i>
					<h4 class="font-weight-bold mb-4">Geolocalizacion</h4>
					<h5 class="text-muted px-2 mb-lg-0"> <i class="fas fa-layer-group indigo-text"></i>
						<span class="d-inline-block count1" data-from="0" data-to="666" data-time="2000">1000</span> </h5>
						<p class="font-weight-normal text-muted">Visitas</p> </a>
					</div>
					<div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
						<a href="saber2.php"><i class="fas fa-share-square pink-text fa-3x mb-4"></i>
						<h4 class="font-weight-bold mb-4">Redes Sociales</h4>
						<h5 class="text-muted px-2 mb-lg-0"> <i class="fas fa-layer-group indigo-text"></i>
							<span class="d-inline-block count1" data-from="0" data-to="250" data-time="2000">645</span></h5>
							<p class="font-weight-normal text-muted">Visitas</p></a>

						</div>
						<div class="col-lg-3 col-md-6 mb-md-0 mb-5">
							<a href="saber2.php"><i class="fas fa-cash-register fa-3x amber-text mb-4"></i>
							<h4 class="font-weight-bold mb-4">E-commerce</h4>
							<h5 class="text-muted px-2 mb-md-0"><i class="fas fa-layer-group indigo-text"></i>
								<span class="d-inline-block count1" data-from="0" data-to="250" data-time="2000">578</span></h5>
								<p class="font-weight-normal text-muted">Visitas</p></a>

							</div>
							<div class="col-lg-3 col-md-6 mb-md-0 mb-5">
							 	<a href="saber2.php"><i class="fab fa-playstation fa-3x green-text mb-4"></i>
							<h5 class="font-weight-bold mb-4">Plataformas On-Line</h4>
								<h5 class="text-muted px-2 mb-md-0"><i class="fas fa-layer-group indigo-text"></i>
									<span class="d-inline-block count1" data-from="0" data-to="250" data-time="2000">1600</span></h5>
									<p class="font-weight-normal text-muted">Visitas</p> </a>

								</div> 
								<br> <br>
								<div class="col-lg-3 col-md-6 mb-md-0 mb-5">
									<a href="saber2.php"><i class="fab fa-twitch fa-3x purple-text mb-4"></i>
									<h4 class="font-weight-bold mb-4">Plataformas Streaming</h4>
									<h5 class="text-muted px-2 mb-md-0"><i class="fas fa-layer-group indigo-text"></i>
										<span class="d-inline-block count1" data-from="0" data-to="250" data-time="2000">3054</span></h5>
										<p class="font-weight-normal text-muted">Visitas</p> </a>

									</div>
								</div>
							</section>
						</div>
					</section>
				</body>
				</html>
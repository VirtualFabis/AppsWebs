<?php 


require_once 'cdn.html';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="icon" href="images/logo.png" />

	<style type="text/css">
		.contenedor{
			position: relative;
			display: inline-block;
			text-align: center;
		}

		
		.centrado{
			position: absolute;
			top: 73%;
			left: 30%;
			transform: translate(-50%, -50%);
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
					<a class="nav-link" ><i class="fas fa-users"></i> Smmart Safe Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto nav-flex-icons">

				<li><a href="connec.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Connect divice</button> </a></li>
			
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
			
			
				
			</ul>
		</div>
	</nav>
</section>
<section>
	<!-- Jumbotron -->

	<div class="jumbotron p-0 border-0 ">
		<div class="view overlay rounded-top">
			<div class="contenedor">
				<img src="images/fondo.png"width= "1343"height="360">
				
				

			</div>
			<div class="mask rgba-white-slight"></div>
		</div>
	<div class="card-body text-center mb-3">
		<div class="container">
			<div class="row">
				<div class="col-sm">

					<div class="card  border-0">

						<div class="view overlay">
							<img class="card-img-top" src="images/1.png"
							alt="Card image cap">
							<a href="#!">
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>


						<div class="card-body">

							<p class="card-text">"Proteccion mas segura para tu hogar en Mexico"</p>

						</div>

					</div>

				</div>
				<div class="col-sm">
					<div class="card  border-0">


						<div class="view overlay">
							<img class="card-img-top" src="images/2.png"
							alt="Card image cap">
							<a href="#!">
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>


						<div class="card-body">
							<p class="card-text">"Un proyecto calidad presio para la seguridad del hogar"</p>

						</div>

					</div>
				</div>
				<div class="col-sm">
					<div class="card  border-0">


						<div class="view overlay">
							<img class="card-img-top" src="images/3.png" 
							alt="Card image cap">
							<a href="#!">
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>

						<div class="card-body">
							<p class="card-text">"Encuentra la mejor seguridad para tu hogar"</p>

						</div>

					</div>
				</div>
				<div class="col-sm">
					<div class="card  border-0">

						<div class="view overlay">
							<img class="card-img-top" src="images/4.png"
							alt="Card image cap">
							<a href="#!">
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>

						<div class="card-body">
							<p class="card-text">"La nueva tecología para la seguridad del hogar"</p>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>
	</div>

<footer class="page-footer font-small aqua-gradient py-3">

  <!-- Footer Elements -->
  <div class="container">

    <div class="row">
      <div class="col-md-6 d-flex justify-content-start">
        <!-- Copyright -->
        <div class="footer-copyright text-center bg-transparent">© 2020 Copyright:
          <a href="#"> Fabis</a>
        </div>
        <!-- Copyright -->
      </div>
      <div class="col-md-6 d-flex justify-content-end">

        <ul class="list-unstyled d-flex mb-0">
          <li>
            <a class="mr-3" role="button" href="https://www.facebook.com/fabis.ibarra.71/"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a class="mr-3" role="button" href=""><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a class="" role="button"><i class="fab fa-youtube"></i></a>
          </li>
        </ul>
      </div>
    </div>

  </div>
  <!-- Footer Elements -->

</footer>
<!-- Footer -->
		</body>
		</html>
<?php 

session_start();
	
	if(isset($_SESSION['usuario'])){
		header("Location: php/reservacion.php");
	}
	else{

 ?>

<!Doctype html>
<html lang="ES">
<head>
	<title>MetroFood</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

		<link href="css/bootstrap-4.0.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>	

</head>
<body>

<header>
	<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">MetroFood</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <!--<li class="nav-item active">
        <a class="nav-link" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Información</a>
      </li>-->
    </ul>
    <span class="navbar-text bt">
      <a href="view/login.php" class="btn btn-dark text-white bt">Iniciar Sesión</a>
    </span>
  </div>
</nav>
</header>

<div class="inicio">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img src="img/java-blanco.png" class="img-java">
				<h1 class="bienvenido">BIENVENIDO A METROFOOD</h1>
				<h5 class="bienvenido2">DISFRUTE DEL SERVICIO DE VARIOS RESTAURANTES</h5>
			</div>
		</div>
	</div>
</div>
<div class="container intro">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p class="acceder">PRIMERO ACCEDE A NUESTRA PLATAFORMA</p>
			<a href="view/login.php" class="btn btn-lg b-intro">INICIAR SESIÓN</a>
		</div>
	</div>
</div>

<div id="carouselExampleIndicators" class="carousel slide slider d-none d-sm-block" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

  </ol>
  <div class="carousel-inner">
  	<img class="d-block img-slider d-block" src="img/asdas.jpg" >
      
    <div class="carousel-item active">
      <div class="carousel-caption d-none d-md-block">

    	<h5 class="detalle text-white">¿QUIENES SOMOS?</h5>
    	<p class="mini-detalle text-white">“Somos un grupo de jóvenes amantes de nuestro trabajo y plasmamos esa pasión en cada desarrollo. Actualmente contamos con un equipo de profesionales especializados con más de dos años en experiencia en diferentes áreas del desarrollo, con lo cual aseguramos la calidad de cada trabajo que realizamos. Nuestro proyecto más reciente es Metro Food”</p>
  	  </div>
      
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">

    	<h5 class="detalle text-white">METROFOOD</h5>
    	<p class="mini-detalle text-white">“Es una empresa dedicada al servicio a domicilio de comida en diferentes restaurantes, ubicados en Santa Tecla. En nuestra plataforma brindamos un servicio personalizado, interesándonos en las necesidades de cada cliente y desarrollando la solución que mejor las satisfaga al momento de comprar un plato de comida en contra entrega.”</p>
  	  </div>
      
    </div>

    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">

    	<h5 class="detalle text-white">¿COMO SURGIÓ LA IDEA?</h5>
    	<p class="mini-detalle text-white">“MetroFood © nació con la idea de pedir a domicilio un platillo de comida en cualquier parte de El Salvador, pero para ello, evaluamos el menú que otorga cada restaurante y los precios de los mismos. MetroFood© filtra los resultados a pedido del cliente para saber cuales restaurantes con sus platillos son más accesibles.”</p>
  	  </div>
      
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container-fluid ubicacion">
	<div class="row">
		<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
			<center><h1 class="l">NUESTRA UBICACIÓN</h1></center>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.73215056766!2d-89.28167538561581!3d13.67404429039779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632e511f372dd3%3A0x3fe0c1447718b059!2sITCA!5e0!3m2!1ses!2ssv!4v1522903545114"  height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
		</div>
	</div>
</div>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p class="text-center text-white cop">↓ INTEGRANTES ↓</p>
				<P class="text-center text-white cop">KEVIN LOVOS, ALEJANDRO QUINTANILLA Y ERICK ZALDAÑA</P>
				<p class="text-center text-white copy">Copyright © 2018 MetroFood Administrador: Erick Zc</p>
				
			</div>
		</div>
	</div>
</footer>

</body>
</html>

<?php 
	}
 ?>
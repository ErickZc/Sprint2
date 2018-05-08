<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		header('Location: dashboard.php');
	}else{
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Iniciar sesión</title>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" type="text/css" href="../css/login.css">
 	<link rel="stylesheet" type="text/css" href="../css/bootstrap-4.0.css">
 	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
 	<script type="text/javascript" src="bootstrap.js"></script>
 </head>
 <body>
 
	<div class="formulario">
	 	<form action="../controller/controlador.php" method="POST">
		  <div class="form">
		  	<img src="../img/form.png" width="200" class="imagen">
		  	<h2 CLASS="texto">INICIAR SESIÓN</h2>
			  <div class="row mb-2">
				  <div class="col">
				  	<input type="email" class="form-control butt" placeholder="Correo Electrónico" name="pers" autofocus="" required="">
				  </div>
			  </div>
			  <div class="row mb-2">
				  <div class="col">
				  	<input type="password" class="form-control butt" placeholder="Contraseña" name="password" required="">
				  </div>
			  </div>
			  <div class="row">
				  <div class="col">
				  	<input type="submit" class="form-control btn btn-dark butt b mb-2" name="Enviar" value="Iniciar Sesión">
				  </div>
			  </div>
		  </div>

		</form>
		<a href="registrate.php" class="nuevo">¿Eres nuevo? Registrate aquí</a><br>
		<a href="registrate_restaurante.php" class="nuevo">Iniciar Sesión como usuario superior</a>
	</div>
 </body>
 </html>

 <?php 
}
  ?>
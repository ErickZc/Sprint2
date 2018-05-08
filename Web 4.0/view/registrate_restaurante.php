<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		//
	}else{
 ?>
 <!DOCTYPE html>
<html>
	<head>
	 	<title>Registrate</title>
	 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	 	<link rel="stylesheet" type="text/css" href="../css/registrate.css">
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap-4.0.css">
	 	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	 	<script type="text/javascript" src="../js/bootstrap.js"></script>
	 	<script type="text/javascript" src="../js/telefono.js"></script>
	</head>
<body>

	<div class="container">
		<div class="row">
				<div class="col-md-8 col-lg-6 col-sm-8 col-xs-12 offset-lg-3 offset-md-2 offset-sm-2">
				 	<form action="../controller/controlador.php" method="POST">
				 		<br><br>
				 		<img src="../img/plato-login.png" width="200" class="imagen">
				 		<h1 class="texto">REGISTRATE</h1>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="addNombre">Nombre de usuario</label>
					      <input type="text" class="form-control bor" id="addNombre" name="addNombre" placeholder="Nombre" required="" autofocus="">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="addApellido">Apellido de usuario</label>
					      <input type="text" class="form-control bor" id="addApellido" name="addApellido" placeholder="Apellido" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="addDireccion">Dirección del usuario</label>
					    <input type="text" class="form-control bor" id="addDireccion" name="addDireccion" placeholder="Dirección" required="">
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="addCorreo">Correo</label>
					      <input type="email" class="form-control bor" id="addCorreo" name="addCorreo" placeholder="Correo" required="">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="addPasword">Contraseña</label>
					      <input type="password" class="form-control bor" id="addPasword" name="addPassword" placeholder="Contraseña" required="">
					    </div>
					    <div class="form-group col-md-4">
						    <label for="addTelefono">Nombre Restaurante</label>
						    <input type="text" class="form-control bor" id="numero" name="addTelefono" placeholder="Telefono" required="">
					  	</div>
					  	<div class="form-group col-md-8">
						    <label for="addTelefono">Ubicación restaurante</label>
						    <input type="numer" class="form-control bor" id="numero" name="addTelefono" placeholder="Ubicación" required="">
					  	</div>
					  	<div class="form-group col-md-12">
						    <label for="addTelefono">Descripción</label>
						    <input type="numer" class="form-control bor" id="numero" name="addTelefono" placeholder="Descripción" required="">
					  	</div>
					  	<div class="form-group col-md-12">
						    <label for="addTelefono">imagen</label>
						    <input type="file" class="form-control bor" id="numero" name="addTelefono" placeholder="Ubicación" required="">
					  	</div>
					  </div>
					  
  					  <center><button type="submit" name="addUs" class="btn btn-dark btn-lg bh">Enviar</button></center>
					</form>
				</div>
		</div>
	</div>
</body>
</html>
 <?php 
	}
  ?>
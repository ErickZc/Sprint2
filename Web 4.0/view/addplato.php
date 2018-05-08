<?php 
	session_start();
	if(isset($_SESSION['usuario']) && isset($_SESSION['cod_rol']) && ($_SESSION['cod_rol'] == 1 || $_SESSION['cod_rol'] == 3)){

	require_once("template/head.php");
	require_once("template/navbar-admin.php");

?>

<body>
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-lg-6 col-sm-10 col-xs-12 offset-md-3 offset-lg-3 offset-sm-1">
				<form action="../controller/controlador.php" action="post" class="formulario">
					<center><h1 class="platillo">Datos del platillo</h1></center>
					<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="txtPlato">Nombre</label>
					      <input type="text" class="form-control" id="txtPlato" placeholder="Nombre" required="" autofocus="">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="txtBebida">Bebida</label>
					      <input type="text" class="form-control" id="txtBebida" placeholder="Bebida" required="">
					    </div>
				  	</div>
				  	<div class="form-group">
				    	<label for="txtCosto">Costo</label>
				    	<input type="text" class="form-control" id="txtCosto" placeholder="$ Costo" pattern="^[0-9]+" required="">
				  	</div>
				  	<div class="form-group">
				    	<label for="txtCosto">Seleccionar imagen del plato</label>
				    	<input type="file" class="form-control" id="txtCosto" placeholder="Costo" required="">
				  	</div>
	  				<center><button type="submit" class="btn btn-primary btn-lg">Ingresar</button></center>
				</form>
			</div>
		</div>
	</div>
</body>

<?php
	require_once("template/footer.php");
	} else{
		header('Location: login.php');
	}
 ?>
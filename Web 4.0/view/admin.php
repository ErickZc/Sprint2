<?php 
	session_start();
	if(isset($_SESSION['usuario']) && $_SESSION['cod_rol'] == 1){

	require_once "template/head.php";
	require_once "template/navbar-admin.php";

?>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 offset-md-1">
				<div class="jumbotron mt-4 mb-4">
  					<h1 class="display-4">Bienvenido Admin</h1>
  					<p class="lead">​En nombre del grupo de desarrollo de Metrofood El Salvador, le damos la más cordial bienvenida a nuestra página web, en la cual esperamos que encuentren todos los servicios que brindamos</p>
  					<hr class="my-4">
  					<p>↓ Puedes acceder a nuestros servicios más rápidamente ↓</p>
  					<p class="lead">
    					<a class="btn btn-primary btn-lg ml-2" href="#" role="button">Learn more</a>
  					</p>
				</div>
			</div>
		</div>
	</div>
</body>
<?php
	require_once "template/footer.php";
	}else{
		header('Location: ../index.php');
	}

 ?>
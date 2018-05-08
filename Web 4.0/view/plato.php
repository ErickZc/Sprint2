<?php
  require_once "../dto/Plato.php";
  session_start();
  if(isset($_SESSION['usuario'])){
    require_once('template/head.php');
    require_once('template/navbar-admin.php')
 ?>
 
 <body>

 	<div class="container">
 		<div class="row">
 			<div class="col-md-10 col-sm-10 col-xs-10 offset-md-1">
	 			<div class="card-columns mb-4 mt-4">
				  <?php 
				  		if(isset($_SESSION['platos'])){
				  			$plato = $_SESSION['platos'];
				  			foreach ($plato as $registro) {
				  ?>
				<div class="card">
					<img class="card-img-top" src="<?=$registro->image ?>" alt="Esto puede tardar unos momentos">
					<div class="card-body">
						<h5 class="card-title nombre-tar"><?=$registro->nombre_plato ?></h5>
						<p class="datos">ID Restaurante: <?=$registro->id_restaurante ?></p>
						<p class="datos">Precio: $<?=$registro->costo_plato ?></p>
						<p class="datos">Bebida: <?=$registro->bebida_plato ?></p>
						<a class="btn mt-2 btn-primary text-white" data-toggle="modal" data-target="#exampleModalCenter">añadir plato</a>
						<a href="../controller/controlador.php?id_plato=<?=$registro->id_plato ?>" class="btn mt-2 btn-dark">Ver perfil</a>
					 </div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title nombre-tar" id="exampleModalLongTitle"><?=$registro->nombre_plato; ?></h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				       <div class="container-fluid">
				       	<div class="row">
				       		<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
				       			<div class="cont-img">
				       				<img src="<?= $registro->image; ?>" class="img-modal">
				       			</div>
				       		</div>
				       		<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
				       			<p class="nombre-tar datoss">Datos: </p>
				       			<p class="datoss">→ <?= $registro->nombre_plato ?></p>
				       			<p class="datoss">→ <?= $registro->bebida_plato ?></p>
				       			<p class="datos nombre-targ">$ <?= $registro->costo_plato ?></p>
				       		</div>
				       	</div>
				       	<div class="col-md-12">
				       		<form>
					       		<div class="form-row">
								    <div class="form-group col-md-12 mt-4">
								      <input type="number" class="form-control" placeholder="Cantidad de platillos" required="">
								    </div>
								</div>
							        <input type="submit" name="Send" value="Añadir a pedidos" class="btn btn-primary">

				      		</form>
				       	</div>
				       </div>
				      </div>
				      
				    </div>
				  </div>
				</div>

				  	<?php
				  			}
				  		}
				    ?>

				</div>
			</div>
 		</div>
 	</div>
 </body>

 <?php 
    require_once('template/footer.php');
	}else{
		header('Location: login.php');
	}
  ?>
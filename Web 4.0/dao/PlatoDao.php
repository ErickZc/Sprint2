<?php 
require_once('IDao.php');
require_once('../ds/DataSource.php');
require_once('../dto/Plato.php');

	class PlatoDao implements IDao{

		function mostrar(){
			$conexion = new DataSource();

			if(!$conexion->conectar()){
				echo 'No se pudo conectar';
				exit;
			}else{

				$platos = array();

				$sql = "CALL mostrarPlato()";
				if($resultado = $conexion->preparar($sql)){
					$resultado->execute();
					$resultado->bind_result($id_restaurante, $id_plato, $nombre_plato, $bebida_plato, $costo_plato,$Activo, $image);

					while($resultado->fetch()){
						$plato = new Plato();
						$plato->id_restaurante = $id_restaurante;
						$plato->id_plato = $id_plato;
						$plato->nombre_plato = $nombre_plato;
						$plato->bebida_plato = $bebida_plato;
						$plato->costo_plato = $costo_plato;
						$plato->activo = "TRUE";
						$plato->image = "../img/img/plato-default.jpg";
						array_push($platos, $plato);
					}

					$resultado->close();
					$conexion->desconectar();
					return $platos;

				}else{
					$conexion->desconectar();
					echo 'Ocurrio un error al entrar los datos';
					exit;
				}


			}
		}


		function eliminar($objeto){

		}

		function agregar($objeto){

		}

		function modificar($objeto){

		}


	}

 ?>
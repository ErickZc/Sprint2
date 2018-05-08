<?php 
require_once('IDao.php');
require_once('../ds/DataSource.php');
require_once('../dto/Cliente.php');

	class ClienteDao implements IDao{

		function mostrar(){
			$conexion = new DataSource();

			if(!$conexion->conectar()){
				echo 'No se pudo conectar';
				exit;
			}else{
				$cliente = null;
				$clientes = array();

				$sql = "CALL mostrarCliente()";
				if($resultado = $conexion->preparar($sql)){
					$resultado->execute();
					$resultado->bind_result($cod_rol, $id_cliente, $nombre_cliente, $apellido_cliente, $direccion_cliente, $correo_cliente, $password_cliente, $activo);

					while($resultado->fetch()){
						$cliente = new Cliente();

						$cliente->id_cliente = $id_cliente;
						$cliente->cod_rol = $cod_rol;
						$cliente->nombre_cliente = $nombre_cliente;
						$cliente->apellido_cliente = $apellido_cliente;
						$cliente->direccion_cliente = $direccion_cliente;
						$cliente->correo_cliente = $correo_cliente;
						$cliente->password_cliente = $password_cliente;
						$cliente->activo = $activo;

						array_push($clientes, $cliente);
					}

					$resultado->clore();
					$resultado->desconectar();
					return $clientes;

				}else{
					$conexion->desconectar();
					echo 'Ocurrio un error al entrar los datos';
					exit;
				}


			}

		}

		function mostrarCod_Rol($objeto){
			$cliente = $objeto;
			$conexion = new DataSource();

			if(!$conexion->conectar()){
				echo 'No se pudo conectar';
				exit;
			}else{
				$valor = 2;
				$sql = "CALL verRol(?, ?)";

				if($resultado = $conexion->preparar($sql)){
					
					$resultado->bind_param('ss', $correo_cliente, $password_cliente);
					$correo_cliente = $cliente->correo_cliente;
					$password_cliente = $cliente->password_cliente;
					$resultado->execute();
					$resultado->bind_result($cod_rol);
					
					while($resultado->fetch()){
						$cliente->cod_rol = $cod_rol;
					}

					$resultado->close();
					$conexion->desconectar();
					return $cliente->cod_rol;
				}else{
					$conexion->desconectar();
					echo 'Ocurrio un error al entrar los datos';
					exit;
				}
			}
		}

		function verificarCliente($objeto){

			$cliente = $objeto;
			$conexion = new DataSource();

			if(!$conexion->conectar()){
				echo 'No se pudo conectar';
				exit;
			}else{
				$valido = false;
				$sql = "CALL verificarCliente(?, ?)";

				if($resultado = $conexion->preparar($sql)){
					$resultado->bind_param('ss', $correo, $password);
					$correo = $cliente->correo_cliente;
					$password = $cliente->password_cliente;
					$resultado->execute();

					while($resultado->fetch()){
						if($resultado == true){

							$valido = true;
						}
					}

					$resultado->close();
					$conexion->desconectar();
					return $valido;

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
			$conexion = new DataSource();
			$cliente = $objeto;

			if(!$conexion->conectar()){
				echo 'No se pudo conectar';
				exit;
			}else{

				$sql = "CALL addCliente(?, ?, ?, ?, ?, ?)";
				if($resultado = $conexion->preparar($sql)){
					$resultado->bind_param('ssssss', $cod_rol, $nombre_cliente, $apellido_cliente, $direccion_cliente, $correo_cliente, $password_cliente);
					$cod_rol = 2;
					$nombre_cliente = $cliente->nombre_cliente;
					$apellido_cliente = $cliente->apellido_cliente;
					$direccion_cliente = $cliente->direccion_cliente;
					$correo_cliente = $cliente->correo_cliente;
					$password_cliente = $cliente->password_cliente;
					$resultado->execute();
					$registros = $resultado->affected_rows;

					$resultado->close();
					$conexion->desconectar();
					return $registros;
				}
			}
		}

		function modificar($objeto){

		}


	}

 ?>
<?php 

class Cliente
{

    private $cod_rol;
    private $id_cliente;
    private $nombre_cliente;
    private $apellido_cliente;
    private $direccion_cliente;
    private $correo_cliente;
    private $password_cliente;
    private $activo;

    // Setter
    public function __set($nombre, $valor)
    {
        $this->$nombre = $valor;
    }

    public function __get($nombre)
    {
        return $this->$nombre;
    }

    public function __construct($id = 1)
    {
        $this->id_cliente = $id;
        $this->cod_rol = 0;
        $this->nombre_cliente = "Erick";
        $this->apellido_cliente = "Zc";
        $this->direccion_cliente = "Jardines de colon";
        $this->correo_cliente = "erickzc130@gmail.com";
        $this->password_cliente = 1234;
        $this->activo = "TRUE";
    }
}
 ?>
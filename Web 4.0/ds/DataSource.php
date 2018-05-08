<?php 

class DataSource
{

    private $conexion;
    private $host;
    private $usuario;
    private $password;
    private $db;

    public function __set($nombre, $valor)
    {
        $this->$nombre = $valor;
    }

    public function __get($nombre)
    {
        return $this->$nombre;
    }

    public function __construct()
    {

        $this->host = "localhost";
        $this->usuario = "root";
        $this->password = "";
        $this->db = "metrofood";
    }

    public function conectar()
    {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->db);

        if ($this->conexion->connect_errno) {
            return false;
        } else {
            return true;
        }
    }

    public function preparar($sql)
    {
        return $this->conexion->prepare($sql);
    }

    public function desconectar()
    {
        $this->conexion->close();
    }
}

 ?>
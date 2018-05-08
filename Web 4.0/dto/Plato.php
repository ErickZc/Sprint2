<?php 

class Plato
{

    private $id_restaurante;
    private $id_plato;
    private $nombre_plato;
    private $bebida_plato;
    private $costo_plato;
    private $Activo;
    private $image;

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
        $this->id_restaurante = $id;
        $this->id_plato = $id;
        $this->nombre_plato = "Sopa Ramen";
        $this->bebida_plato = "Null";
        $this->Activo = 'TRUE';
        $this->costo_plato = 3.75;
        $this->image = '../img/img/plato-default.jpg';
    }
}
 ?>
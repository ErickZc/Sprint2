<?php

interface IDao
{

    public function mostrar();
    public function agregar($objeto);
    public function modificar($objeto);
    public function eliminar($objeto);
}
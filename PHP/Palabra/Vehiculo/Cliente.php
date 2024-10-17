<?php

class Cliente {
    private $idCliente;
    private $nombre;
    private $apellido;
    private $dni;

    public function __construct($idCliente, $dni)
    {
        $this->idCliente = $idCliente;
        $this->dni = $dni;
    }


    public function __toString() {
    	return "idCliente: {$this->idCliente}, Nombre: {$this->nombre}, Apellido: {$this->apellido}, Dni: {$this->dni}";
    }

    public function getNombre() {
    	return $this->nombre;
    }

    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    }

    public function getApellido() {
    	return $this->apellido;
    }

    public function setApellido($apellido) {
    	$this->apellido = $apellido;
    }
}


?>
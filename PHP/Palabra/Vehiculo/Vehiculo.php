<?php

class Vehiculo {
    private $matricula;
    private $marca;
    private $modelo;
    private $esAlquilado = null;
    private $tipo;

    public function alquilar() {
        if ($this->esAlquilado != true) {
            $this->esAlquilado = true;
        } else {
            echo "El vehiculo ya esta alquilado";
        }
    }
    
    public function devolver() {
        if ($this->esAlquilado === true) {
            $this->esAlquilado = false;
        } else {
            echo "El vehiculo ya esta alquilado";
        }
    }

    public function __construct($matricula, $tipo)
    {
        $this->matricula = $matricula;
        $this->tipo = $tipo;
    }

    public function __toString() {
    	return "Matricula: {$this->matricula}, Marca: {$this->marca}, Modelo: {$this->modelo}, EsAlquilado: {$this->esAlquilado}, Tipo: {$this->tipo}";
    }


    public function getTipo()
    {
        return $this->tipo;
    }


    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca() {
    	return $this->marca;
    }

    public function setMarca($marca) {
    	$this->marca = $marca;
    }
}


?>
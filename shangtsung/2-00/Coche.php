<?php
include_once("ICocheDAO.php");
/* 
tamaño de matricula: 10
CDX9321
tamaño de marca: 30
tamaño de modelo: 30
tamaño de potencia: 10
tamaño de velocidadMax: 10

90 por fila

#
*/
class Coche {
    private $matricula,$marca,$modelo,$potencia,$velocidadMax;

    function __construct(String $matricula, String $marca, String $modelo) {
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }

    function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->name = $value;
        }
    }
    // to String

}

?>
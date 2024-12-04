<?php

Class Producto {
    private $nombre,$precio,$cantidad;

    function __construct($nombre,$precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = 1;
    }

    function calcularSubTotal() {
        return $this->precio * $this->cantidad;
    }

    function __get($name) {
        if (property_exists($this, $name)) {
            return $this->$name;  // Devolvemos el valor de la propiedad
        }
        return null;  
    }

    function __set($name, $value) {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
        return null;  
    }

}


?>
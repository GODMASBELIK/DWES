<?php

class Coche implements IVehiculo {
   
    private $gasolina = 500;

    function arrancar() {
        echo "El automovil se ha encendido.";
        $this->gasolina -= 10;
    }
function detener() {
    echo "El automovil se ha apagado.";

}
function getNivelGasolina() {
    $this->gasolina += 200;
}
    public function getGasolina() {
    	return $this->gasolina;
    }

    public function __toString() {
    	return "Gasolina: {$this->gasolina}";
    }
}


?>
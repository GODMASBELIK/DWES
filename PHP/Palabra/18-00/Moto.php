<?php

class Moto implements IVehiculo {

    private $gasolina = 200;

    function arrancar() {
        echo "La motocicleta se ha encendido.";
        $this->gasolina -= 5;
}
function detener() {
    echo "La motocicleta se ha apagado.";
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
<?php
include_once("Figura.php");
include_once("Punto.php");

class Circulo extends Figura {
private $radio;

public function __construct($punto, $radio) {
    parent::__construct("red", $punto);
    $this->radio = $radio;
}

function area() {
    return pow($this->radio, 2)*pi();
}

function dibujar() {
    $radioSVG = $this->radio * 4;
echo "<svg width='{$radioSVG}' height='{$radioSVG}'>";
echo "<circle r='{$this->radio}' cx='{$this->punto->__get("x")}' cy='{$this->punto->__get("y")}' fill='{$this->__get("color")}'/>";
echo "</svg>";
}

}

?>
<?php
include_once("Figura.php");
include_once("Punto.php");

class Rectangulo extends Figura {
private $ancho, $altura;

public function __construct($punto, $ancho, $altura) {
    parent::__construct("red", $punto);
    $this->ancho = $ancho;
    $this->altura = $altura;
}

function area() {
return $this->ancho * $this->altura;
}

function dibujar() {
echo "<svg width='{$this->ancho}' height='{$this->altura}'>";
echo " <rect width='{$this->ancho}' height='{$this->altura}' x='{$this->punto->__get("x")}' y='{$this->punto->__get("y")}'fill='{$this->__get("color")}' />";
echo "</svg>";
}

}

?>
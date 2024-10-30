<?php
class Racional {
private $numerador, $denominador;

public function __construct1() {
    $this->numerador = 10;
    $this->denominador = 10;
}

public function __construct2($numerador, $denominador) {
    $this->numerador = $numerador;
    $this->denominador = $denominador;
}

public function getNumerador()
{
return $this->numerador;
}


public function setNumerador($numerador): self
{

$this->numerador = $numerador;

return $this;
}

public function getDenominador() {
	return $this->denominador;
}

public function setDenominador($denominador) {
	$this->denominador = $denominador;
}

function suma() {
return $this->numerador + $this->denominador;
}
function resta() {
    return $this->numerador - $this->denominador;
}
function multiplicacion() {
    return $this->numerador * $this->denominador;
}
function division() {
    return $this->numerador / $this->denominador;
}
function compareTo($objeto) {
 return $objeto == $this;
}

//la funcion __clone ya te permite clonar.

function setRacional($numerador, $denominador) {
    $this->numerador = $numerador;
    $this->denominador = $denominador;
}
function calculoReal() {
return (Float) ($this->numerador/$this->denominador);
}
function mostrarPantalla() {
    return $this->numerador . "\n----------\n"
    . $this->denominador;
}

}


?>
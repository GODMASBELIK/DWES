<?php


class Palabra {
    private $texto;

    public function __construct($texto) 
    {
        $this->texto = $texto;

    }

    public function esPalindromo() {
        if ($this->texto === strrev($this->texto)) {
            echo "Si";
            return true;
        } else {
            echo "No";
            return false;
        }
    }
    public function invertir() {
      return strrev($this->texto);
    }
    public function contarVocales() {
      return preg_match_all('/[aeiou]/i',$this->texto);
    }
    public function contarConsonantes() {
      return preg_match_all('/[bcdfghjklmnñpqrstvwxyz]/i',$this->texto);
    }
    public function mayusculas() {
      $this->texto = strtoupper($this->texto);
    }
    public function minusculas() {
      $this->texto = strtolower($this->texto);
    }
    public function reemplazarVocales($caracter) {
      $this->texto = str_replace(array("a","e","i","o","u"),$caracter,$this->texto);
    }
    public function longitud() {
        return strlen($this->texto);
    }
    public function contieneCaracter($caracter) {
        if (strpos($this->texto,$caracter)) {
            echo "Contiene el caracter";
            return true;
        } else {
            echo "No lo contiene";
            return false;
        }
    }
    public function reemplazarCaracter($buscar, $reemplazar) {
        $this->texto = str_replace($buscar,$reemplazar,$this->texto);
     }

    public function __get($p){
        if(property_exists($this, $p)) {
            return $this->$p;
        } else {
            echo "propiedad no encontrada";
        }
    }

    public function __set($p, $valor){
        if(property_exists($this, $p)) {
            $this->$p = $valor;
        }else {
            echo "propiedad no encontrada";
        }
    }

}


?>
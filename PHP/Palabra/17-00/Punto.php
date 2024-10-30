<?php
class Punto {
    private $x, $y;


    public function __construct($x,$y) {
        $this->x = $x;
        $this->y = $y;
    } 

    
    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad,$valor)
    {
        $this->$propiedad = $valor;
    }
}
?>
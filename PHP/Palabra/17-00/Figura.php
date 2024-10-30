<?php



abstract class Figura {
    private $color, $punto;

     function __construct($color, $punto) {
        $this->color = $color;
        if($punto instanceof Punto) {
            $this->punto = $punto;
        }  else {
            echo "error";
            die();
        }
    }

    abstract function area();

    abstract function dibujar();

    
    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }
}


?>
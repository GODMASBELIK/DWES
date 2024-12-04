<?php

class Factura {
    private $numeroFactura, $nombreCliente, $productos;

    
    function __construct($numeroFactura,
    $nombreCliente,
    $productos = [])
    {
        $this->numeroFactura = $numeroFactura;
        $this->nombreCliente = $nombreCliente;
        $this->productos = $productos;
    }
    
    function agregarProducto(Producto $producto) {
        $existe = false;
    
        foreach ($this->productos as $prod) {
            if ($prod->nombre === $producto->nombre && $prod->precio === $producto->precio) {
                $prod->cantidad += $producto->cantidad;
                $existe = true;
                break;
            }
        }
        
        if (!$existe) {
            $this->productos[] = $producto;
        }
    }

    private function calcularBaseImponible() {
        (double) $calculo = 0;
        foreach ($this->productos as $producto) {
            $calculo += $producto->calcularSubTotal();
        }

        return $calculo;
    }
    private function totalFactura() {
        (double) $calculo = 0;
        foreach ($this->productos as $producto) {
            $calculo += $producto->calcularSubTotal() * 21 / 100;
        }

        return $calculo;
    }

    function muestraArticulos() {
        usort($this->productos, function($a, $b){
            if($a->precio > $b->precio) {
                return -1;
            } elseif($a->precio < $b->precio) {
                return 1;
            } else {
                return strchr($a->nombre, $b->nombre);
            }
        });

    }

    function imprimeFactura() {
        echo "<div class=\"column\">";
        echo "<p>Factura número: {$this->numeroFactura}";
        echo "<p>Cliente: {$this->nombreCliente}";
        echo "</div>";

        echo "<table>";
        echo "<tr>";
        echo "<td>Artículo</td>";
        echo "<td>Precio</td>";
        echo "<td>Cantidad</td>";
        echo "<td>Subtotal</td>";
        foreach ($this->productos as $producto) {
        echo "<tr>";
            echo "<td>{$producto->nombre}</td>";
            echo "<td id='euro'>{$producto->precio}</td>";
            echo "<td>{$producto->cantidad}</td>";
            echo "<td id=\"euro\">{$producto->calcularSubTotal()}</td>";
        echo "</tr>";
        }
        echo "</tr>";

        echo "</table>";

        $magic = $this->calcularBaseImponible()+$this->totalFactura() ;

        sprintf("<p id='euro' class=\"right\">Base Imponible: %d</p>",$this->calcularBaseImponible()) ;
        sprintf("<p id='euro' class=\"right\">IVA 21%: {$this->totalFactura() }</p>"); 
        sprintf("<p id='euro' class=\"right\">Factura Total: {$magic}</p>"); 
    }


}


?>
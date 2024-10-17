<?php

include("Cliente.php");
include("Vehiculo.php");

class ContratoAlquiler
{
    private $vehiculo, $cliente,
        $fechaRecogida, $horaRecogida, $fechaDevolucion,
        $horaDevolucion, $estado, $costoAlquiler, $diasPrestados;

    public function __construct($vehiculo, $cliente)
    {
        if ($vehiculo instanceof Vehiculo) {
            $this->vehiculo = $vehiculo;
        } else {
            echo "Eres bobo";
            die();
        }

        if ($cliente instanceof Cliente) {
            $this->cliente = $cliente;
        }else {
            echo "Eres bobo";
            die();
        }

        $this->fechaRecogida = date_create(date("Y-m-d"));
        $this->estado = "Activo";
        $this->vehiculo->alquilar();
    }
    // no parametros

    // public function devolverCoche()
    // {
    //     $this->fechaDevolucion = date_create("2024-10-19");

    //     $this->horaDevolucion = date_create(date("H:i"));

    //     $this->estado = "Finalizado";
    //     $this->vehiculo->devolver();
    //     $this->costePorDias();
    // }
    
    public function devolverCoche($date)
    {
        $this->fechaDevolucion = date_create($date);
        $this->estado = "Finalizado";
        $this->vehiculo->devolver();
        $this->costePorDias();
    }

    protected function costePorDias() {

            $diferencia = date_diff($this->fechaRecogida, $this->fechaDevolucion);
            $diasPrestados = $diferencia->days;
        
            $gasto = null;

            if ($this->vehiculo->getTipo() === "Sedan") {
                $gasto = 50;
            } elseif ($this->vehiculo->getTipo() === "SUV") {
                $gasto = 70;
            } elseif ($this->vehiculo->getTipo() === "Furgoneta") {
                $gasto = 100;
            } else {
                echo "que es eso?";
                die();
            }

            $precioTotal = $gasto * $diasPrestados;

            echo "El coche: {$this->vehiculo->getTipo()}, ha sido prestado por $diasPrestados días,
            PAGAME $precioTotal$";
    }
}

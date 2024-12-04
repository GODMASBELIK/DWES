<?php
require_once("../../Faker/src/autoload.php");

$faker = Faker\Factory::create('es_ES');

$jugadores = 2;
$cards = 3;
$maximajugada = [];
$jugador = [];

for ($i = 0; $i < $jugadores; $i++) { 
    $jugador[$i] = [
        "Cartas" => function() use ($cards) {
            $a = []; 
            for ($i = 0; $i < $cards; $i++) { 
                $a[] = rand(2, 11); 
            }
            return $a; 
        }
    ];
}

foreach ($jugador as &$j) {
    $cartas = $j['Cartas'](); 
    $j['Cartas'] = $cartas;

    $frecuencias = array_count_values($cartas); 
    $maxJugadas = [];

    foreach ($frecuencias as $valor => $cantidad) {
        if ($cantidad >= 2) {
            $maxJugadas[] = $valor * 2;
        }
    }

    if (empty($maxJugadas)) {
        $maxJugadas[] = max($cartas);
    }

    $maximajugada[] = max($maxJugadas);
}

foreach ($jugador as $jugado) {
    foreach ($jugado as $cartas) {
        foreach ($cartas as $value) {
            echo "<img src=\"cartas/c$value.svg\" alt=\"Carta $value\">";
        }
    }
}

var_dump($jugador); 

var_dump($maximajugada); 
?>

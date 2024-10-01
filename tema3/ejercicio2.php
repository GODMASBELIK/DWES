<?php

$ingreso = readline("ingreso: ");


if ($ingreso < 10000) {
$porcentaje=0;
} elseif ($ingreso > 10000 && $ingreso <= 30000) {
    $porcentaje=0.1;
}elseif ($ingreso > 30000 && $ingreso <= 50000) {
    $porcentaje=0.2;
} else {
    $porcentaje=0.3;
}



$impuesto = $ingreso * $porcentaje;
echo $impuesto . " Vas a pagar!!!!!!\n";
$fin = $ingreso - $impuesto;

echo $fin . " Dinero actual";
?>
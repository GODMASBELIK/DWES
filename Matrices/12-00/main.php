<?php

/*Escriba un programa que enfrente a dos jugadores tirando una serie de dados al
azar entre 2 y 7 e indique el resultado. Los dados se comparan en orden (el
primero con el primero, el segundo con el segundo, etc.) y gana el jugador que
obtenga el número más alto.*/

$dados = ["dados/1.svg","dados/2.svg","dados/3.svg","dados/4.svg","dados/5.svg","dados/6.svg"];

$jug1 = ["dado1" => rand(0,5),"dado2" => rand(0,5),"dado3" => rand(0,5)];
$jug2 = ["dado1" => rand(0,5),"dado2" => rand(0,5),"dado3" => rand(0,5)];
$sum1 = 0;
$sum2 = 0;
var_dump($jug1);
var_dump($jug2);
foreach ($jug1 as $key => $value) {
    $value++;
    $sum1 += $value;
}
foreach ($jug2 as $key => $value) {
    $value++;
    $sum2 += $value;
}

for ($i=0; $i < 3; $i++) { 
    echo "<img src='{$dados[$jug1["dado".$i+1]]}'>";
}
echo $sum1;

echo "<br><br><br>";


for ($i=0; $i < 3; $i++) { 
    echo "<img src='{$dados[$jug2["dado".$i+1]]}'>";
}
echo $sum2;

echo "<br><br>";
switch ($sum1) {
    case $sum1 > $sum2:
        echo "Jugador 1 ha ganado";
        break;
        case $sum1 < $sum2:
            echo "Jugador 2 ha ganado";
            break;
    default:
        echo "Empate";
        break;
}

?>
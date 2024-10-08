<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .menu {
            display: flex;
            justify-content: space-around;
        }

        h1,h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="menu">
        <div class="jugador1">
        <h2>Dados de jugador 1</h2>
        <div class="dados">
            <?php

$oh = ["1.svg","2.svg","3.svg","4.svg","5.svg","6.svg"];

$dad1_1 = rand(0,5);
$dad2_1 = rand(0,5);

$res = $dad1_1 + $dad2_1;
echo "<img src=$oh[$dad1_1]>";
echo "<img src=$oh[$dad2_1]>";

echo "<h1>$res</h1>";
?>
        </div>
    </div>
    <div class="jugador2">
        <h2>Dados de jugador 2</h2>
        <div class="dados">
<?php
$dad1_2 = rand(0,5);
$dad2_2 = rand(0,5);

$res2 = $dad1_2 + $dad2_2;

echo "<img src=$oh[$dad1_2]>";
echo "<img src=$oh[$dad2_2]>";

echo "<h1>$res2</h1>";

?>
        </div>
        
        </div>
    </div>
    <?php
if ($res > $res2) {
    echo "<h1>GANA JUGADOR 1!!!</h1>";
} elseif ($res == $res2) {
    echo "<h1>EMPATE😯</h1>";
} else {
    echo "<h1>GANA JUGADOR 2!!!</h1>";
}
?>
    </body>
</html>
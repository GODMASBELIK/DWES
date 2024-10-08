<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .column {
            display: flex;
            justify-content: space-around;
        }

        .column div {
            text-align: center;
        }

        img {
            width: 15%;
        }

        h1 {
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
// 5 cartas aleatorias entre 4 jugadores
$cartas = ["c1.svg", "c2.svg", "c3.svg", "c4.svg", "c5.svg", "c6.svg", "c7.svg", "c8.svg", "c9.svg", "c10.svg"];
$jugadores = ["Player1", "Player2", "Player3", "Player4"];
$maxcartas = 5;
$inventariojug1 = [0];
$inventariojug2 = [0];
$inventariojug3 = [0];
$inventariojug4 = [0];

for ($i=0; $i <= $maxcartas; $i++) { 
    $carta=$cartas[rand(0,9)];
    array_push($inventariojug1, $carta);
    if($carta == "c1.svg") {
        $inventariojug1[0]++;
    }
}
for ($i=0; $i <= $maxcartas; $i++) { 
    $carta=$cartas[rand(0,9)];
    array_push($inventariojug2, $carta);
    if($carta == "c1.svg") {
        $inventariojug2[0]++;
    }
}
for ($i=0; $i <= $maxcartas; $i++) { 
    $carta=$cartas[rand(0,9)];
    array_push($inventariojug3, $carta);
    if($carta == "c1.svg") {
        $inventariojug3[0]++;
    }
}
for ($i=0; $i <= $maxcartas; $i++) { 
    $carta=$cartas[rand(0,9)];
    array_push($inventariojug4, $carta);
    if($carta == "c1.svg") {
        $inventariojug4[0]++;
    }
}

echo '<div class="column">';
echo '<div class="c1">';
    echo "<div>";
    echo "<h1>$jugadores[0]</h1>";
    foreach ($inventariojug1 as $img) {
        if (!is_numeric($img)) {
            echo "<img src='$img' width=10%>";
        }
    }
    echo "</div>";
    echo "<div>";
    echo "<h1>$jugadores[1]</h1>";
    foreach ($inventariojug2 as $img) {
        if (!is_numeric($img)) {
            echo "<img src='$img' width=10%>";
        }
    }
    echo "</div>";
    echo "</div>";
echo '<div class="c2">';
    echo "<div>";
    echo "<h1>$jugadores[2]</h1>";
    foreach ($inventariojug3 as $img) {
        if (!is_numeric($img)) {
            echo "<img src='$img' width=10%>";
        }
    }
    echo "</div>";
    echo "<div>";
    echo "<h1>$jugadores[3]</h1>";
    foreach ($inventariojug4 as $img) {
        if (!is_numeric($img)) {
            echo "<img src='$img'>";
        }
    }
echo "</div>";
echo "</div>";
echo "</div>";

if ($inventariojug1[0] > $inventariojug2[0] && $inventariojug1[0] > $inventariojug3[0] && $inventariojug1[0] > $inventariojug4[0]) {
    echo "<h1>$jugadores[0] gana</h1>";
    } elseif ($inventariojug2[0] > $inventariojug1[0] && $inventariojug2[0] > $inventariojug3[0] && $inventariojug2[0] > $inventariojug4[0]) {
        echo "<h1>$jugadores[1] gana</h1>";
    } elseif($inventariojug3[0] > $inventariojug1[0] && $inventariojug3[0] > $inventariojug2[0] && $inventariojug3[0] > $inventariojug4[0]) {
        echo "<h1>$jugadores[2] gana</h1>";
    } elseif($inventariojug4[0] > $inventariojug1[0] && $inventariojug4[0] > $inventariojug2[0] && $inventariojug4[0] > $inventariojug3[0]) {
        echo "<h1>$jugadores[3] gana</h1>";
    } else {
        echo "<h1>Empate</h1>";
    }
?>

<!-- SVG con superposición de imágenes -->
<svg width="200px" height="200px">
    <!-- Primera imagen (al fondo) -->
    <image href="c1.svg" width="100%" height="100%" alt="Carta c1" />
    <!-- Segunda imagen (superpuesta con rotación y desplazamiento) -->
    <image href="c2.svg" width="100%" height="100%" x="100px" y="-60px" transform="rotate(20)" alt="Carta c2" />
</svg>

</body>
</html>

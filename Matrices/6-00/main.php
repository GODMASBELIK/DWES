<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            background-color: black;
        }

        td {
            color: white;
        }

    </style>
</head>
<body> 
<?php
$moda=[];
$max = 0;
$minnumero = 999999999999;
echo "<table style='border: 1px solid red;'>";
$media = 0;
$mediana = [];
for ($i2=0; $i2 <= 9; $i2++) {
    for ($i=0; $i <= 9; $i++) { 
        $num[$i2][$i] = rand(1,50);
        maxNumero($num[$i2][$i]);
        minNumero($num[$i2][$i]);
        if (isset($moda[$num[$i2][$i]])) {
            $moda[$num[$i2][$i]]++;
        } else {
            $moda[$num[$i2][$i]] = 1;
        }
        $media += $num[$i2][$i];
    }
}

$media /= 100;

echo "<br>";
echo ceil($media)."\n";
echo floor($media);
echo "<br>";

function minNumero($num) {
    global $minnumero;
    if ($num < $minnumero) {
        return $minnumero = $num;
    } else {
        return false;
    }
}
function maxNumero($num) {
    global $max;
    if ($num > $max) {
        return $max = $num;
    } else {
        return false;
    }
}

//mediana
for ($i=0; $i < count($num); $i++) { 
    $contado = count($num[$i])/2;
    echo $num[$i][$contado];
    echo "<br>";
}

// foreach ($num as $row) {
//     foreach ($row as $value) {
        
//     }
// }

$frecuencia=0;
foreach ($moda as $key => $value) {
if($value > $frecuencia) {
    $frecuencia = $value;
}
}
$numeroganador = array_search($frecuencia, $moda);

foreach($num as $row) {
    echo "<tr>";
    foreach($row as $value) {
        if ($value == $max) {
            echo "<td style='color: red;'>" . $value . "</td>";
        } elseif ($value == $minnumero) {
            echo "<td style='color: green';>" . $value . "</td>";
        } elseif ($value == ceil($media) || $value == floor($media)) {
            echo "<td style='color: yellow;'>" . $value . "</td>";
        } elseif ($value == $numeroganador) {
            echo "<td style='color: blue;'>" . $value . "</td>";
        } 
        else {
            echo "<td>" . $value . "</td>";
        }
    }
    echo "</tr>";
}

echo "<tr style='background-color: white;'>";
echo "<td colspan='3' style='color: black;'>Minimo {$minnumero}</td>";
echo "<td colspan='4' style='color: black;'>Media {$media}</td>";
echo "<td colspan='3' style='color: black;'>Maximo {$max}</td>";
echo "</tr>";

?>
</body>
</html>
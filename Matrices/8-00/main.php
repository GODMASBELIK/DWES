<?php

$matriz = [[2,7,6],[9,5,1],[4,3,8]];
$check = [[0],[0],[0]];
$i = 0;
foreach ($matriz as $value) {
    foreach ($value as $realvalue) {
        $check[$i][0] += $realvalue;
    }
    $i++;
}

if ($check[0][0] === $check[1][0] && $check[0][0] === $check[2][0]) {
    echo "magica";
} else {
    echo "no magica";
}

var_dump($check);


?>
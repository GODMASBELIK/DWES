<?php

$num1 = readline("num1: ");
$num2 = readline("num2: ");
$num3 = readline("num3: ");


if ($num1 === $num2 && $num1 === $num3) {
    echo "todos son iguales";
    die();
}
if ($num1 > $num2 && $num1 > $num3) {
    echo  "\nnum1: " . $num1;
} elseif($num2 > $num1 && $num2 > $num3) {
    echo  "\nnum2: " . $num2;
} else {
    echo "\nnum3: " . $num3;
}

?>
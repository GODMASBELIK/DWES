<?php

$num1 = readline("num1: ");
$num2 = readline("num2: ");
$num3 = readline("num3: ");

echo $resultado = $num1 === $num2 && $num1 === $num3 ? "Son iguales" : ($num1 > $num2 && $num1 > $num3 ? $num1 : ($num2 > $num1 && $num2 > $num3 ? $num2 : $num3));

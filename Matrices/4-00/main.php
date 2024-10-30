<?php

$valores = "MF";
$array = array();
for ($i = 0; $i < 100; $i++) { 
    $oh = rand(0, strlen($valores) - 1);
     array_push($array, array($valores[$oh] => rand(0,100))); 

}

var_dump($array);
?>

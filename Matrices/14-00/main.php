<?php


$v = ["hola","adios","aaaaa","ab","z","caca","zulo"];

usort($v, function($a, $b) {
    if (strlen($b) > strlen($a)) {
        return -1;
    } elseif (strlen($b) < strlen($a)) {
        return 1;
    } else {
        return strcmp($a,$b);
    }
});


var_dump($v);

?>
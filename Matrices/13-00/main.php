<?php

$filtros = ["31 de OCT","1 de NOV","2 de NOV","3 de NOV","4 de NOV","5 de NOV","6 de NOV"];
$datosF = ["Temperatura","Viento","Humedad"];
$htmlNew=[];
$datos;
foreach ($filtros as $value) {
    $datos[$value] = ["temperatura" => "hola"];
}

$html = file_get_contents("https://www.eltiempo.es/logrono.html");

strip_tags($html);

strip_tags($html);



var_dump($datos);

foreach ($filtros as $datos) {
    $posicion = strpos($html,$datos);
    array_push($htmlNew, substr($html,$posicion,5600));
}

foreach ($htmlNew as $key) {
    echo $key;
}

omg[] = implode(" ",$htmlNew);
?>
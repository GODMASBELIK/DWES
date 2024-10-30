<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera</title>
</head>
<body>
<?php
include_once("Circulo.php");
include_once("Rectangulo.php");
$punto = new Punto(rand(50,200),rand(50,200)); 
for ($i=0; $i < 10; $i++) {
    $punto = new Punto(rand(50,200),rand(50,200)); 
    $circulo = new Circulo($punto,rand(10,100));
    $circulo->color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    $circulo->dibujar();
    echo "<br>";
}
for ($i=0; $i < 10; $i++) {
    $punto = new Punto(rand(50,200),rand(50,200)); 
    $rectangulo = new Rectangulo($punto,rand(100,600),rand(100,600));
    $rectangulo->__set("color",sprintf('#%06X', mt_rand(0, 0xFFFFFF)));
    $rectangulo->dibujar();
    echo "<br>";
}


?> 
</body>
</html>


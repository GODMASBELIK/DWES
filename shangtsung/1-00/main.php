<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            margin: 0;
        }
        .column {
            columns: 2;
            margin: 20px;

        }

        #euro::after {
            content:  " €";
        }

        div {
            font-style: italic;

        }

        table {
            border-collapse: collapse;
            width: 60%;
        }

        table > * {
            margin: 10px;
        }

        table tr:first-child td {
            font-style: italic;
            border-bottom: 1px solid black;
            text-align: center;
        }

        table tr:not(:first-child) td:not(:first-child) {
            text-align: center;
            padding: 10px;
        }

        .right {
            text-align: right;
            width: 58%;
            font-weight: 600;
            margin-bottom: 1em;
            font-style: italic;

        }
    </style>
</head>
<body>
<?php

include_once("Factura.php");
include_once("Producto.php");

$p1[] = new Producto("AK47",790.00);
$p1[] = new Producto("MAGNUM 13",130.00);
$p1[] = new Producto("GALELIL 26 ARGUS ed.",990.00);

$newproduct1 = new Producto("Suarez's beauty", 999.00);
$newproduct2 = new Producto("Suarez's beauty", 999.00);
$newproduct3 = new Producto("Suarez's beauty", 999.00);
$newproduct4 = new Producto("Suarez's beauty", 999.00);
$newproduct5 = new Producto("Suarez's beauty", 999.00);

$f1 = new Factura(9823,"Papotico", $p1);

echo($p1[0]->calcularSubTotal());

$f1->agregarProducto($newproduct1);
$f1->agregarProducto($newproduct2);
$f1->agregarProducto($newproduct3);
$f1->agregarProducto($newproduct4);
$f1->agregarProducto($newproduct5);

var_dump($f1);

$f1->muestraArticulos();

$f1->imprimeFactura();
?>
</body>
</html>


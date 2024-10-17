

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .strong {
            font-weight: 600;
        }

        table,td {
            padding: 10px 5px;
            padding-right: 50px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
include_once("ContratoAlquiler.php");

$c1 = new Cliente("1","19198888L");
$ve = new Vehiculo("C1C1C1","Furgoneta");

$contract = new ContratoAlquiler($ve,$c1);
$contract->devolverCoche("2024-10-20");


?>
</body>
</html>


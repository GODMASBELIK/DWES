<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<p>Actualice la página para mostrar una nueva tirada</p>";
$dados = ["1.svg","2.svg","3.svg","4.svg","5.svg","6.svg"]; 
echo "<img src='{$dados[rand(0,5)]}''>";

echo "<p>Ha sacado un <strong>seis</strong></p>";


?> 
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo 1</title>
</head>
<body>
    <h1>Sin php</h1>
    <?php
    
    $pares = 0;
    echo "<h1>Con php</h1>";

    for($i = 10; $i>=0; $i--) {
        echo "$i";
        if (odd($i)) {
            echo " ¡Par!";
            $pares++;
        }
        echo "<br>";
    }
function odd(int $i) {if ($i % 2 == 0) return true;}

?>
</body>
</html>
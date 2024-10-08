<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .menu {
            display: flex;
            justify-content: space-around;
        }


    </style>
</head>
<body>
            <?php

$oh = ["1.svg","2.svg","3.svg","4.svg","5.svg","6.svg"];
$dados = rand(1,10);
$impar=0;
$par=0;
for ($i=0; $i <= $dados; $i++) {
    $img = rand(0,5);
    
    echo "<img src=$oh[$img]>\n";
    if($img % 2 == 0) {
        echo "Impar";
        $impar++;
    } else {
        echo "Par";
        $par++;
    }
}

echo "<h1>Impar $impar</h1>";
echo "<h1>Par $par</h1>";

?>
    </body>
</html>
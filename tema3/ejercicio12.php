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

        h1,h2 {
            text-align: center;
        }
    </style>
</head>
<body>
            <?php

$oh = ["1.svg","2.svg","3.svg","4.svg","5.svg","6.svg"];
$dados = rand(1,9);
$max = 0;
$countmax=0;
for ($i=0; $i < $dados; $i++) {
    $img = rand(0,5);
    echo "<img src=$oh[$img]>\n";
    if($img > $max) {
        $countmax = 1;
        $max = $img;
    } elseif ($img == $max) {
        $countmax++;
    }
}
$max++;
echo "<h1>El maximo de valor de dado que ha salido es: $max</h1>\n";
echo "<h1>Las veces que ha salido ese dado son: $countmax</h1>\n";
?>
    </body>
</html>
<?php
$dados = ["1.svg","2.svg","3.svg","4.svg","5.svg","6.svg"];
$displayed;
$amountTo = 4;
$max= 0;
$min= 99999999999;
for ($i=0; $i < $amountTo; $i++) { 
    $rand = rand(0,5);
    $displayed[] = $rand;
    echo "<img src=\"{$dados[$rand]}\">";
}

foreach ($displayed as $value) {
    if ($value > $max) {
        $max = $value;
    }
    if ($value < $min) {
        $min = $value;
    }
}
$max++;
$min++;

echo "<br>";
echo $max;
echo "<br>";
echo $min;

?>
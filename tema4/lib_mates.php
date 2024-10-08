<?php


function esPrimo($num) {
    if ($num <= 1)
        return 0; // 0= no primo
    for ($i = 2; $i <= $num/2; $i++){
        if ($num % $i == 0)
            return 0;
    }
    return 1;
}


function damePrimos($num, $num2) {
$linea = '';

for ($i=$num; $i <= $num2 ; $i++) { 
    if (esPrimo($i)) {
        $linea .= strval($i)."\n";
    }
}
return $linea;
}
function sumaPrimos($num, $num2) {
    $linea = damePrimos($num,$num2);
$oh = str_split($linea,1);
$ds = array();
foreach($oh as $le) {

    if (is_numeric($le)) {
        array_push($ds, $le);
    }
}
$result=0;
foreach($ds as $lo) {

$result += $lo;
}
echo $result;
return $result;
}


function esDivisor($num, $div) {


    if ($num % $div == 0) {

        return true;
    } else {
        return false;
    }
}



function dameDivisores($num) {
$linea = '';

for ($i=1; $i <= $num ; $i++) { 
    if (esDivisor($num,$i)) {
        $linea .= strval($i)."\n";
    }
}
echo $linea;
return $linea;
}

?>
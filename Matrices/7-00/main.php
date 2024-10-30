<?php


$arr = [2,2,2,2,3,3,4,5,6,7,"hola","hola"];
foreach ($arr as $key ) {
    echo $key;
}
function sinRepetidos($arr) {
    
    foreach ($arr as $value) {
        $arr2[$value] = 0;
    }
    
    foreach ($arr2 as $key => $value) {
        $arr3[] = $key;
    }
    return $arr3;
}
echo "<br><br>";

$arr = sinRepetidos($arr);
foreach ($arr as $key ) {
    echo $key;
}



?>
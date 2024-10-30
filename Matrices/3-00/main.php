<?php

$arr = array();
$arr2 = array();
for ($i=0; $i < 10; $i++) { 
    $arr[] = rand(0,1);
}
foreach ($arr as $value) {
    echo $value;
}

echo "<br>";
echo count($arr);
echo "<br>";

for ($i=0; $i < count($arr); $i++) { 
    echo $i;
    if (equalOnes($i)) {
        $arr2[] = 0;
    } else {
        if ($i != 0) {
            $arr2[] = 1;
        } 

    }
}

function equalOnes($num) {
    global $arr;
    if ($num === 0) {
        return false;
    } else {
            return $arr[$num] == $arr[$num-1];
    }
}


echo "<br>";
foreach ($arr2 as $value) {
    echo $value;
}

?>
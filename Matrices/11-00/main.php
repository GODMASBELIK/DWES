<?php
/*
Crea una función llamada procesarListas que reciba dos strings, cada uno
representando una lista de números enteros separados por comas. La función debe
realizar las siguientes operaciones:
*/

/*

1. Utilizar explode para convertir cada string en un array de números
enteros.
2. Utilizar array_merge para combinar ambos arrays en uno solo.
3. Utilizar array_unique para eliminar los duplicados del array combinado.
4. Ordenar el array resultante en orden ascendente utilizando sort.
5. Calcular la suma de los elementos únicos usando array_sum.
6. Utilizar implode para convertir el array de números únicos y ordenados de
nuevo a un string, donde los números estén separados por comas.
7. Retornar un array asociativo que contenga dos entradas:
○ clave “números”: con el string de números únicos y ordenados.
○ clave “suma”: la suma de los números únicos.*/

$hola = "2,5,7,8,9,10";
$adios = "1,3,6,1,30,2";

procesarLista($hola,$adios);

function procesarLista($hola, $adios) {
 $arr1 = explode(",",$hola);
 $arr2 = explode(",",$adios);
var_dump($arr1);
var_dump($arr2);
 $unique = array_unique($arr1);
foreach ($arr2 as $value) {
    $unique[] = $value;
}
 

$unique = array_unique($unique);
var_dump($unique);

sort($unique);

$suma = array_sum($unique);

$unique = implode(",",$unique);

$socio = ["numeros" => $unique, "suma" => $suma];

var_dump($socio);
}



?>
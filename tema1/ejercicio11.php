<?php

/*
EJERCICIO 11. Página php y uso de la función readLine.
Realiza un programa en php que muestre por pantalla la tabla resumen que aparece entre asteriscos en la parte inferior, teniendo en cuenta los siguientes requisitos y las fórmulas abajo indicadas:
Un corredor de atletismo necesita conocer cuales son sus franjas de trabajo al 70%, 80%, 90% y 100%. 
Para ello necesitamos que dicho corredor nos introduzca su edad y su frecuencia cardíaca en reposo (Frep) (haciendo uso de la función readLine).
Posteriormente mostraremos por pantalla una tabla con el siguiente aspecto tras calcular dichas franjas.


FMax = 208 – (0,7*Edad)
Pulsaciones Objetivo = (FMax-Frep)*FCObjetivo(%) + FRep

*/

$frep = readLine("Frecuencia en reposo: ");
$edad = readLine("Edad: ");
$fMax = 208 - (0.7*$edad);
$fcObjetivo = array(70,80,90);
$pulsacionesOb;
$resultadoOb=array();
$fcObjetivoDisplay=array();
foreach($FCObjetivo as $ob) { 
    $pulsacionesOb= (($fMax-$frep)*($ob/100)) + $Frep;
    array_push($resultadoOb,$pulsacionesOb);
    array_push($fcObjetivoDisplay, "$ob%");
    
}

echo $resultadoOb[0]."\n";
echo $resultadoOb[1]."\n";
echo $resultadoOb[2]."\n";


echo "***********************************\n";
echo "*      $fcObjetivoDisplay[0]      *   $resultadoOb[0]         *\n";
echo "*      $fcObjetivoDisplay[1]      *   $resultadoOb[1]         *\n";
echo "*      $fcObjetivoDisplay[2]      *   $resultadoOb[2]         *\n";
echo "*      100%     *   $Fmax           *\n";
echo "***********************************";


?>
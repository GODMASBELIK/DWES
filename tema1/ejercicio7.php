<?php
$esAdulto = true;
$tieneLicencia = false;
$esEmpleado = true;
$esEstudiante = false;
$tienePermiso = true;
$esMayoDeEdad = true;

$resultado1 = ($esAdulto && $tieneLicencia) /*False*/  || (!$esEstudiante /*True*/ && $tienePermiso) /*true*/;
$resultado2 = ($esEmpleado || $tieneLicencia) /*true*/ && ($esMayoDeEdad == $esAdulto) /*True*/ ;
$resultado3 = (!$tieneLicencia /*true*/ && $esAdulto) /*true*/ || ($esEmpleado ^ $esEstudiante) /*True*/;
$resultado4 = ($esEstudiante != $esEmpleado)/*true*/  && ($tienePermiso || !$esMayoDeEdad) /*true*/;
$resultado5 = ($esAdulto === $esMayoDeEdad) /*true*/ && (!$esEmpleado /*False*/ || $tienePermiso && $tieneLicencia) /*false*/;

$resultado5 ? Print "true" : Print "false";

for($i=5; i>=0; $i--) {
    echo $i;
}

?>
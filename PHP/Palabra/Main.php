<?php
include("Palabra.php");
$p1 = new Palabra("holla");
echo $p1->__get("texto");
echo "<br><br>";
echo $p1->esPalindromo();
echo "<br><br>";
echo $p1->contarConsonantes();
echo "<br><br>";
echo $p1->reemplazarVocales("j");
echo "<br><br>";
echo $p1->__get("texto");
echo "<br><br>";
echo $p1->mayusculas();
echo "<br><br>";
echo $p1->__get("texto");
echo "<br><br>";
echo $p1->minusculas();
echo "<br><br>";
echo $p1->__get("texto");
echo "<br><br>";
echo $p1->longitud();
echo "<br><br>";
echo $p1->__get("texto");
echo "<br><br>";
$p1->contieneCaracter("j");
echo "<br><br>";
echo $p1->invertir();
echo "<br><br>";
$p1->esPalindromo();
echo "<br><br>";
$p1->__set("texto", "lol"); 
echo $p1->__get("texto");
echo "<br><br>";
$p1->esPalindromo();
echo "<br><br>";
$p1->reemplazarCaracter("l","j");
echo $p1->__get("texto");
?>
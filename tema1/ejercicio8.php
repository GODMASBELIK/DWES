<?php 
namespace HOLA;
function showMagicConstants() {
try {
    $pal = __CLASS__;
    if (empty($pal)) {$pal = "Ninguna clase actual";}
    echo "Nombre del archivo actual: " . __FILE__ . "<br>";
    echo "Directorio del archivo actual: " . __DIR__ . "<br>";
    echo "Número de línea actual: " . __LINE__ . "<br>";
    echo "Nombre de la función actual: " . __FUNCTION__ . "<br>";
    echo "Nombre de la clase actual: " . $pal . "<br>";
    echo "Nombre del método actual: " . __METHOD__ . "<br>";
    echo "Nombre del espacio de nombres actual: " . __NAMESPACE__ . "<br>";
} catch(Throwable $a) {
    echo "<h1>You stupid</h1>", $a->getMessage(), "<br>","<br>";
    echo die("<small>(aprende a programar)</small>");
}
 
}
showMagicConstants();
class Demo {
    public function display() {
        echo "Nombre de la clase desde el método: " . __CLASS__ . "<br>";
        echo "Nombre del método actual desde el método: " . __METHOD__ . "<br>";
   }
}
$demo = new Demo();
$demo->display();



?>
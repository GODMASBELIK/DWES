<?php
    include_once("Coche.php");
    include_once("CocheDAO.php");

$c1 = new Coche("K1K1K1","Audi","A4");
$c3 = new Coche("K1K1K1","Audi","A4");
$c2 = new Coche("K2K2K2","Audi","A4");
$c4 = new Coche("K3K3K3","Ferrari","LM2");
$cocheDAO = new CocheDAO();

$cocheDAO->crear($c1);
$cocheDAO->crear($c2);
$cocheDAO->crear($c3);

$cocheDAO->verTodos();

var_dump($cocheDAO->obtenerCoche("K1K1K1"));
$cocheDAO->eliminar("K1K1K1");
$cocheDAO->crear($c1);

$cocheDAO->actualizar("K1K1K1",$c4);

?>
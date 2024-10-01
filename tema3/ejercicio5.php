<?php

$balitaaaa = rand(1, 6);
echo "\nBala $balitaaaa\n";

$money = 0;
echo "es tu primer tiro, si no te toca 1000€ para ti, ¿quieres jugar?\n";
echo "SI✔️ - NO❌\n";
$linea = readline("");

if ($linea === "si" || $linea === "SI") {
    echo "...";
    sleep(2);
    if ($balitaaaa != 1) {
        echo "Tienes suerte...\n";

        $money += 1000;
        $balitaaaa--;
        echo "\nBala $balitaaaa";
        echo "\n$money$\n";
    } else {
        echo "\n💀 Has muerto";
        die();
    }
} else {
    echo "El precio de la vida no se compara al papel que llamamos billetes.\n";
    echo "FIN, Dinero conseguido: $money";
    die();
}
echo "Doble o nada, ¿quieres probar tu suerte?\n";
echo "SI✔️ - NO❌\n";
$linea = readline("");
if ($linea === "si" || $linea === "SI") {
    echo "...";
    sleep(2);
    if ($balitaaaa != 1) {
        echo "No te lo crees ni tu\n";

        $money += $money;
        $balitaaaa--;
        echo "\nBala $balitaaaa";
        echo "\n$money$\n";
    } else {
        echo "\n💀 Has muerto";
        die();
    }
} else {
    echo "El precio de la vida no se compara al papel que llamamos billetes.\n";
    echo "FIN, Dinero conseguido: $money";
    die();
}

echo "Nananana, Triple o nada, de seguro que de esta no te libras\n";
echo "SI✔️ - NO❌\n";
$linea = readline("");
if ($linea === "si" || $linea === "SI") {
    echo "...";
    sleep(2);
    if ($balitaaaa != 1) {
        echo "SIII HOMBREE\n";

        $money += $money;
        $balitaaaa--;
        echo "\nBala $balitaaaa";
        echo "\n$money$\n";
    } else {
        echo "\n💀 Has muerto";
        die();
    }
} else {
    echo "El precio de la vida no se compara al papel que llamamos billetes.\n";
    echo "FIN, Dinero conseguido: $money";
    die();
}
echo "No jueges mas porfavor... \n";
echo "SI✔️ - NO❌\n";
$linea = readline("");
if ($linea === "si" || $linea === "SI") {
    echo "...";
    sleep(2);
    if ($balitaaaa != 1) {
        echo "Nooo ahora soy igual de pobre que un estudiante universitario de artes😭😭😭\n";

        $money += $money;
        $balitaaaa--;
        echo "\nBala $balitaaaa";
        echo "\n$money$\n";
    } else {
        echo "\n💀 Has muerto";
        die();
    }
} else {
    echo "El precio de la vida no se compara al papel que llamamos billetes.\n";
    echo "FIN, Dinero conseguido: $money";
    die();
}
echo "Oh, me he dado cuenta que tengo dinero infinito\n";
echo "SI✔️ - NO❌\n";
$linea = readline("");
if ($linea === "si" || $linea === "SI") {
    echo "...";
    sleep(2);
    if ($balitaaaa != 1) {
        echo "Wow okay que suerte es esta.\n";

        $money += $money;
        $balitaaaa--;
        echo "FIN, Dinero conseguido: $money";
        die();
    } else {
        echo "\n💀 Has muerto";
        die();
    }
} else {
    echo "El precio de la vida no se compara al papel que llamamos billetes.\n";
    echo "FIN, Dinero conseguido: $money";
    die();
}

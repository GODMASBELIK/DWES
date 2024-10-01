<?php

echo "Home, About, News, Login, Links\n";

$userinput = readline("Seleccione su opcion: ");

switch ($userinput) {
    case "Home":
        echo "Inicio";
        break;
    case "About":
        echo "Sobre";
        break;
    case "News":
        echo "Noticias";
        break;
    case "Login":
        $nombre = readline("Usuario: ");
        $contraseña = readline("Contraseña: ");
        if ($nombre === "admin" && $contraseña == "1234") {
            echo "Credenciales validas";
        } else {
            echo "Credenciales incorrectas";
        }
        break;
    case "Links":
        echo "Links";
        break;
    default:
        echo "Selección no válida";
        break;
}

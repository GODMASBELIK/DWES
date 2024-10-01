<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorador...</title>
    <style>
        img {
            width: 20%;
        }
    </style>
</head>

<body>
    <?php
    //serverdump $_SERVER
    echo $_SERVER["HTTP_USER_AGENT"];

    $imagen = ["/DWES/tema1/imag/chrome.png", "/DWES/tema1/imag/edge.png", "/DWES/tema1/imag/firefox.svg"];
    if (str_contains($_SERVER["HTTP_USER_AGENT"], "Chrome") && !str_contains($_SERVER["HTTP_USER_AGENT"], "Edg")) {
        echo "<h1>Estas en Chrome</h1>";
        echo "<img src=\"$imagen[0]\">";
    } elseif (str_contains($_SERVER["HTTP_USER_AGENT"], "Firefox")) {
        echo "<h1>Estas en Firefox</h1>";
        echo "<img src=\"$imagen[2]\">";
    } elseif (str_contains($_SERVER["HTTP_USER_AGENT"], "Edg")) {
        echo "<h1>Estas en Edge</h1>";
        echo "<img src=\"$imagen[1]\">";
    }
    ?>
</body>

</html>
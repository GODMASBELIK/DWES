<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="" alt="">
</body>
</html>

<?php
echo $_SERVER["HTTP_USER_AGENT"];

$imagen = array("/tema1/imag/chrome.png", "/tema1/imag/edge.png", "/tema1/imag/firefox.svg");
if (str_contains($_SERVER["HTTP_USER_AGENT"], "Chrome")) {
    echo "si";
}




?>
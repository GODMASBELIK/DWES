<?php


    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION["carrito"])) {
       if($_POST["cl" . $_SESSION["numero"]] == $_SESSION["cliente" . $_SESSION["numero"]]) {
        $array = $_SESSION["carrito"];
        $array[$_POST["ar"]] = $_POST["pr"] . "#" . $_POST["ca"];
        $_SESSION["carrito"] = $array;
       } else {
        $_SESSION["numero"]++;
        $_SESSION["cliente" . $_SESSION["numero"]] = $_POST["cl"];
        $array[$_POST["ar"]] = $_POST["pr"] . "#" . $_POST["ca"];
        $_SESSION["carrito"] = $array;
       }
    } else {
        $_SESSION["numero"] = 0;
        $_SESSION["cliente" . $_SESSION["numero"]] = $_POST["cl"];
        $array[$_POST["ar"]] = $_POST["pr"] . "#" . $_POST["ca"];
        $_SESSION["carrito"] = $array;
    }

    var_dump($_SESSION);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            padding: 20px;
            background-color: grey;
            border-radius: 1em;
        }

        .c  {
            display: flex;

        }

        label {
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 20px 70px;ca

        }

        input {
            width: 50%;
        }

        button {
            display: block;
            width: 76%;
            padding: 10px;
            margin: 0 auto;
        }


    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="c"><label for="">Nombre Cliente<input type="text" name="cl"></label></div>
        <div class="c"><label for="">Nombre articulo<input type="text" name="ar"></label></div>
        <div class="c"><label for="">Precio<input type="number" name="pr"></label></div>
        <div class="c"><label for="">Cantidad<input type="number" name="ca"></label></div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        form {
            max-width: 300px;
            background-color: rgb(117, 117, 248);
            margin: 0 auto;
            border-radius: 1em;
        }
        .flex {
            display: flex;
            padding: 10px;
            color: white;
            font-weight: 600;
        }

        label {
            flex-basis: 40%;
        }

        button {
            position: relative;
            left: 75%;
            transform: translate(-50%,0%);
            padding: 10px 25px;
            margin: 10px;
        }

    </style>
</head>
<body>
<?php

use function PHPUnit\Framework\isEmpty;

        session_start();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $fp = fopen("logins.csv", "r");
            if (!$fp) {
                die("Error");
            }

            $nombreclave = $_SESSION["nombre"];
            
            $nuevonombre = $_POST["newname"];
            $nuevacontraseña = password_hash($_POST["newpass"], PASSWORD_DEFAULT);
            $nuevoresultado = "";
            while(!feof($fp)) {
                $linea = fgets($fp);
                if(!empty($linea)) {
                    $lol = explode("#", $linea);
                    $nombre = $lol[3];
                    if($nombre == $nombreclave) {
                        $nuevoresultado .= $lol[0] . "#" . $lol[1] . "#" . $lol[2] . "#" . $nuevonombre . "#" . $nuevacontraseña . "\n";
                    } else {
                        $nuevoresultado .= $linea;
                    }
                }
            }
            file_put_contents("logins.csv", $nuevoresultado);
            $_SESSION["nombre"] = $nuevonombre;
         }

?>
    <form action="<?php echo $_SERVER["PHP_SELF"] . "?user=" . $_SESSION["nombre"] ?>" method='post'>
        <div class="flex"><label for="">Nombre</label>
        <?php
            echo "<input type=\"text\" value=\"{$_SESSION["nombre"]}\" name=\"newname\">";
        ?>
        </div>
        <div class="flex">
            <label for="">Contraseña</label>
            <input type="password" name="newpass">
        </div>
        <button type="submit">Editar</button>

    </form>
</body>
</html>
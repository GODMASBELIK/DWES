
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
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST") {
    // $nombre = $_POST["n"];
    //   $apellido = $_POST["a"];
    //   $fecha = $_POST["f"];
      $login = $_POST["l"];
      $password = $_POST["p"];
      $fp = fopen("logins.csv", 'r');
      if (!$fp) {
        die("No se pudo abrir el archivo para escribir");
      }
      while(!feof($fp)) {
        $linea = fgets($fp);
        $lol = explode("#", $linea); 
        echo $password;
        if(password_verify($password,trim($lol[4])) && $login == $lol[3]) {
         echo "YUP";
         $_SESSION["logged"] = true;
         $_SESSION["nombre"] = $login;
         header("Location: cpanel.php");
         exit;
        } else {
            echo "nah";
        }
      }

}

if(isset($_GET["logout"])) {
 session_destroy();
 header("Location: login.php");
 exit;
}

?>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <!-- <div class="flex"><label for="">Nombre</label><input type="text" name="n"></div>
        <div class="flex"><label for="">Apellido</label><input type="text" name="a"></div>
        <div class="flex"><label for="">Fecha nacimiento</label><input type="date" name="f"></div> -->
        <div class="flex"><label for="">Login</label><input type="text" name="l" required></div>
        <div class="flex"><label for="">Password</label><input type="password" name="p" required></div>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>
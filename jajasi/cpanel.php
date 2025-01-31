

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

if(isset($_SESSION["logged"])) {
  echo "<h1>Hola {$_SESSION["nombre"]}!";
  echo "<h2></h2>";
  
} else {
    header("Location: login.php");
}

?>
    <a href="login.php?logout=true">Cerrar sesion</a>
    <a href="edit.php?user=<?php echo $_SESSION["nombre"]?>">editar</a>
</body>
</html>
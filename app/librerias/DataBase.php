<?php

include("../config/configurar.php");

class DataBase {
    private $host = DB_HOST; 
    private $usuario = DB_USUARIO; 
    private $password = DB_PASSWORD; 
    private $nombre_BD = DB_NOMBRE; 

    private $dbh;
    private $stmt;
    private $error;

    public function __construct() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->nombre_BD;

        $opciones = array(
            PDO::ATTR_PERSISTENT=>true,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        );
        
        try {
            $this->dbh = new PDO($dsn, $this->usuario, $this->password, $opciones);
            $this->dbh->exec('SET NAMES utf8');
            
        } catch(PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function borramePorfavor() {
        $query = "SELECT * FROM Usuarios";
        $result = $this->dbh->query($query);
    
        while($row = $result->fetch()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td><td>" . $row["Nombre"] . "</td><td>" . $row["Apellidos"] . "</td><td>" .$row["FechaDeNacimiento"] . "</td><td>" .$row["Login"] . "</td><td>" . $row["Password"] . "</td><td>" . $row["Grupo"] . "</td>";
            echo "</tr>";
            
        }
    }

    public function añadirUsuario($Name, $Apellidos, $Fecha, $Login, $Password, $Grupo) {
        $query = <<<_END
        INSERT INTO Usuarios(id, Nombre, Apellidos, FechaDeNacimiento, Login, Password, Grupo) VALUES ($Name, $Apellidos, $Fecha, $Login, $Password, $Grupo)
        >>>_END;
        $result = $this->dbh->query($query);
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        html {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

    table {
        border-collapse: collapse;
    }

    thead {
        background-color:rgb(140, 230, 233);
    }

    td, th {
        padding: 10px;
    }
        
        table, tr,td,th  {
            border: 1px solid black;
        }

        td {
            max-width: 100px;
            overflow: hidden;
            text-overflow:ellipsis;
        }

    </style>
</head>
<body>
    <table>
        <thead>
        <th>id</th>
        <th>nombre</th>
        <th>apellidos</th>
        <th>fecha</th>
        <th>login</th>
        <th>password</th>
        <th>grupo</th>
        </thead>
    <?php
$db = new DataBase();

$db->borramePorfavor();


?>
    </table>

</body>
</html>



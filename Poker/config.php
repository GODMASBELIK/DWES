<?php
// Configuración de la base de datos
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'poker_game';

$sql = new mysqli($host, $user, $password, $database);

// Verifica la conexión
if ($sql->connect_error) {
    die('Error de conexión: ' . $sql->connect_error);
}
?>
<?php
session_start();
include('config.php');

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$stmt = $sql->prepare("SELECT id_room, room_name, max_players, current_players, status FROM rooms WHERE status = 'waiting'");
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id_room, $room_name, $max_players, $current_players, $status);

echo "<h2>Salas de Póker Disponibles</h2>";
echo "<ul>";
while ($stmt->fetch()) {
    echo "<li>Nombre: $room_name | Jugadores: $current_players/$max_players | Estado: $status | <a href='join_room.php?id=$id_room'>Unirse</a></li>";
}
echo "</ul>";

$stmt->close();
?>
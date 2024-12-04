<?php
session_start();
include('config.php');

// Verificar si el usuario está logueado
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION["user_id"];
$room_id = $_SESSION['room_id'] ?? null;

// Verificar que el jugador esté en una sala
if ($room_id === null) {
    header("Location: index.php");
    exit();
}

// Eliminar al jugador de la sala
$stmt_leave = $sql->prepare("DELETE FROM players WHERE user_id = ? AND room_id = ?");
$stmt_leave->bind_param("ii", $user_id, $room_id);
$stmt_leave->execute();

// Decrementar el contador de jugadores en la sala
$stmt_update_room = $sql->prepare("UPDATE rooms SET current_players = current_players - 1 WHERE id_room = ?");
$stmt_update_room->bind_param("i", $room_id);
$stmt_update_room->execute();

// Eliminar la referencia de la sala de la sesión
unset($_SESSION['room_id']);

// Redirigir a la página principal
header("Location: index.php");
exit();
?>

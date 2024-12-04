<?php
session_start();
include('config.php');

// Verificar si el usuario está logueado
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION["user_id"];
$room_id = $_GET['room_id'] ?? null;

// Verificar si el usuario ya está en una sala
$stmt_check_user = $sql->prepare("SELECT room_id FROM players WHERE user_id = ?");
$stmt_check_user->bind_param("i", $user_id);
$stmt_check_user->execute();
$user_room_result = $stmt_check_user->get_result();
$user_room = $user_room_result->fetch_assoc();

if ($user_room) {
    // Si el usuario ya está en una sala, redirigirlo a esa sala
    header("Location: index.php");
    exit();
}

if ($room_id !== null) {
    // Verificar si la sala existe y si tiene espacio
    $stmt_room = $sql->prepare("SELECT id_room, room_name, current_players, max_players FROM rooms WHERE id_room = ? AND current_players < max_players");
    $stmt_room->bind_param("i", $room_id);
    $stmt_room->execute();
    $room_result = $stmt_room->get_result();
    $room = $room_result->fetch_assoc();

    if ($room) {
        // Si la sala existe y tiene espacio, unirse a la sala
        $stmt_join = $sql->prepare("INSERT INTO players (user_id, room_id) VALUES (?, ?)");
        $stmt_join->bind_param("ii", $user_id, $room_id);
        $stmt_join->execute();

        // Actualizar el número de jugadores en la sala
        $stmt_update_room = $sql->prepare("UPDATE rooms SET current_players = current_players + 1 WHERE id_room = ?");
        $stmt_update_room->bind_param("i", $room_id);
        $stmt_update_room->execute();

        // Guardar la sala en la sesión del usuario
        $_SESSION['room_id'] = $room_id;

        header("Location: index.php"); // Redirigir a la página principal con la sala
        exit();
    } else {
        echo "La sala no existe o está llena.";
    }
} else {
    echo "No se ha proporcionado un ID de sala válido.";
}
?>

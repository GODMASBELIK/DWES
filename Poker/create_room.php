<?php
session_start();
include('config.php');

// Verificar si el usuario está logueado
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $room_name = htmlspecialchars($_POST["room_name"]);
    $max_players = (int)$_POST["max_players"];

    if (empty($room_name) || $max_players < 2 || $max_players > 10) {
        echo "Por favor, ingrese un nombre de sala válido y un número de jugadores entre 2 y 10.";
        exit();
    }

    // Crear la sala
    $stmt = $sql->prepare("INSERT INTO rooms (room_name, creator_id, max_players, current_players) VALUES (?, ?, ?, 1)");
    $stmt->bind_param("sii", $room_name, $_SESSION["user_id"], $max_players);
    if ($stmt->execute()) {
        // Obtener el ID de la sala recién creada
        $room_id = $stmt->insert_id;
        // Agregar al creador como jugador en la sala
        $stmt_player = $sql->prepare("INSERT INTO players (user_id, room_id) VALUES (?, ?)");
        $stmt_player->bind_param("ii", $_SESSION["user_id"], $room_id);
        $stmt_player->execute();

        // Guardar la sala en la sesión
        $_SESSION['room_id'] = $room_id;

        echo "Sala creada con éxito. <a href='index.php'>Ver sala</a>";
    } else {
        echo "Error al crear la sala: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Sala de Póker</title>
</head>
<body>
    <h2>Crear una nueva sala de póker</h2>
    <form action="create_room.php" method="POST">
        <input type="text" name="room_name" placeholder="Nombre de la sala" required>
        <input type="number" name="max_players" min="2" max="10" placeholder="Número máximo de jugadores" required>
        <input type="submit" value="Crear Sala">
    </form>
</body>
</html>

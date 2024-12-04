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

// Si el jugador ya está en una sala, mostrar la sala actual
if ($room_id !== null) {
    // Obtener el nombre de la sala y los jugadores en esa sala
    $stmt_room = $sql->prepare("SELECT room_name FROM rooms WHERE id_room = ?");
    $stmt_room->bind_param("i", $room_id);
    $stmt_room->execute();
    $room_result = $stmt_room->get_result();
    $room = $room_result->fetch_assoc();

    // Obtener la lista de jugadores en la sala
    $stmt_players = $sql->prepare("SELECT u.username FROM players p JOIN users u ON p.user_id = u.id_user WHERE p.room_id = ?");
    $stmt_players->bind_param("i", $room_id);
    $stmt_players->execute();
    $players_result = $stmt_players->get_result();

    $players = [];
    while ($row = $players_result->fetch_assoc()) {
        $players[] = $row['username'];
    }
}

// Si no está en una sala, mostrar las salas disponibles para unirse
if ($room_id === null) {
    $stmt_rooms = $sql->prepare("SELECT id_room, room_name, current_players, max_players FROM rooms WHERE current_players < max_players");
    $stmt_rooms->execute();
    $rooms_result = $stmt_rooms->get_result();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala de Póker</title>
</head>
<body>

<h2>Bienvenido al juego de póker</h2>

<?php if ($room_id !== null): ?>
    <h3>Estás en la sala: <?php echo htmlspecialchars($room['room_name']); ?></h3>

    <h4>Jugadores en la sala:</h4>
    <ul>
        <?php foreach ($players as $player): ?>
            <li><?php echo htmlspecialchars($player); ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="leave_room.php">Salir de la sala</a>
<?php else: ?>
    <h3>Salas disponibles para unirse:</h3>
    <ul>
        <?php while ($room = $rooms_result->fetch_assoc()): ?>
            <li>
                <a href="join_room.php?room_id=<?php echo $room['id_room']; ?>">
                    Sala: <?php echo htmlspecialchars($room['room_name']); ?> - Jugadores: <?php echo $room['current_players']; ?>/<?php echo $room['max_players']; ?>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>

    <h3>Crear una nueva sala</h3>
    <form action="create_room.php" method="POST">
        <input type="text" name="room_name" placeholder="Nombre de la sala" required>
        <input type="number" name="max_players" min="2" max="10" placeholder="Número máximo de jugadores" required>
        <input type="submit" value="Crear Sala">
    </form>
<?php endif; ?>

</body>
</html>

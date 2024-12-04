const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");

const player = {
    x: 200,
    y: 200,
    size: 20,
    speed: 5
};

const enemies = [];
const enemySize = 20;
const enemySpeed = 1;
const enemyCount = 10;
let gameOver = false;

function createEnemies() {
    for (let i = 0; i < enemyCount; i++) {
        enemies.push({
            x: Math.random() * (canvas.width - enemySize),
            y: Math.random() * (canvas.height - enemySize),
            speedX: Math.random() < 0.5 ? enemySpeed : -enemySpeed,
            speedY: Math.random() < 0.5 ? enemySpeed : -enemySpeed
        });
    }
}

function update() {
    if (gameOver) return;

    // Mover enemigos
    enemies.forEach(enemy => {
        enemy.x += enemy.speedX;
        enemy.y += enemy.speedY;

        // Rebote de enemigos en los bordes
        if (enemy.x <= 0 || enemy.x >= canvas.width - enemySize) {
            enemy.speedX *= -1;
        }
        if (enemy.y <= 0 || enemy.y >= canvas.height - enemySize) {
            enemy.speedY *= -1;
        }
    });

    // Verificar colisiones
    enemies.forEach(enemy => {
        if (
            player.x < enemy.x + enemySize &&
            player.x + player.size > enemy.x &&
            player.y < enemy.y + enemySize &&
            player.y + player.size > enemy.y
        ) {
            gameOver = true;
        }
    });
}

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Dibujar jugador
    ctx.fillStyle = "blue";
    ctx.fillRect(player.x, player.y, player.size, player.size);

    // Dibujar enemigos
    ctx.fillStyle = "red";
    enemies.forEach(enemy => {
        ctx.fillRect(enemy.x, enemy.y, enemySize, enemySize);
    });

    if (gameOver) {
        ctx.fillStyle = "black";
        ctx.font = "30px Arial";
        ctx.fillText("Juego Terminado", 100, 200);
    }
}

function gameLoop() {
    update();
    draw();
    requestAnimationFrame(gameLoop);
}

function keyDownHandler(event) {
    if (gameOver) return;

    switch (event.key) {
        case "ArrowUp":
            player.y -= player.speed;
            break;
        case "ArrowDown":
            player.y += player.speed;
            break;
        case "ArrowLeft":
            player.x -= player.speed;
            break;
        case "ArrowRight":
            player.x += player.speed;
            break;
    }

    // Limitar el movimiento del jugador dentro del canvas
    player.x = Math.max(0, Math.min(canvas.width - player.size, player.x));
    player.y = Math.max(0, Math.min(canvas.height - player.size, player.y));
}

document.addEventListener("keydown", keyDownHandler);
createEnemies();
gameLoop();

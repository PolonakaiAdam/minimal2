<?php
require_once __DIR__ . '/config/config.php';

$pdo = new PDO(
    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
    DB_USER,
    DB_PASS
);

$pdo->exec("
    CREATE TABLE todos (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        done TINYINT(1) NOT NULL DEFAULT 0
    )
");

echo 'Tábla létrehozva!';

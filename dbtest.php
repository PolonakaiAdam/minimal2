<?php
require_once __DIR__ . '/config/config.php';

new PDO(
    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
    DB_USER,
    DB_PASS
) or die('NEM OK');

echo 'OK';

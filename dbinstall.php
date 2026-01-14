<?php
require_once __DIR__ . '/db.php';

$sql = file_get_contents(__DIR__ . '/db.sql');
$pdo->exec($sql);

echo 'Tábla létrehozva';

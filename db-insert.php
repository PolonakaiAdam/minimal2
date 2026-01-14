<?php
header('Content-Type: application/json');

// Adatbázis kapcsolat
$pdo = new PDO('mysql:host=localhost;dbname=todo_db;charset=utf8mb4', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// JSON beolvasása
$data = json_decode(file_get_contents('php://input'), true);

// Ha van title, beszúrjuk
if(!empty($data['todo'])){
    $stmt = $pdo->prepare("INSERT INTO todos (title) VALUES (:title)");
    $stmt->execute(['title' => $data['todo']]);
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    if (!empty($name)) {
        $stmt = $pdo->prepare("INSERT INTO personen (name) VALUES (:name)");
        $stmt->execute(['name' => $name]);
    }
}
header('Location: index.php');
exit;

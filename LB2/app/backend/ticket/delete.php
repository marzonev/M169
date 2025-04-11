<?php
session_start();
require_once '../db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: /auth/login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $ticketId = intval($_POST['id']);
    $userId = $_SESSION['user_id'];

    // Ticket checken, ob es dem User gehört
    $stmt = $pdo->prepare("SELECT * FROM tickets WHERE id = :id AND user_id = :user_id");
    $stmt->execute([
        'id' => $ticketId,
        'user_id' => $userId
    ]);
    $ticket = $stmt->fetch();

    if ($ticket) {
        $delete = $pdo->prepare("DELETE FROM tickets WHERE id = :id");
        $delete->execute(['id' => $ticketId]);
    }
}

header("Location: index.php"); // oder list.php, je nachdem wie die Seite heißt
exit;

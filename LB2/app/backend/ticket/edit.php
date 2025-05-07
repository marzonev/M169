<?php
require_once '../auth/session.php';
require_once '../db.php';

$userId = $_SESSION['user_id'] ?? null;

if (!$userId) {
    header("Location: /auth/login.php");
    exit;
}

// Ticket-ID aus der URL
$ticketId = $_GET['id'] ?? null;

if (!$ticketId) {
    echo "Keine Ticket-ID übergeben.";
    exit;
}

// Ticket aus der DB holen
$stmt = $pdo->prepare("SELECT * FROM tickets WHERE id = :id AND user_id = :user_id");
$stmt->execute(['id' => $ticketId, 'user_id' => $userId]);
$ticket = $stmt->fetch();

if (!$ticket) {
    echo "Ticket nicht gefunden oder kein Zugriff.";
    exit;
}

// Formular abschicken
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $dueDate = $_POST['due_date'] ?? null;
    $status = $_POST['status'] ?? 'open';

    $updateStmt = $pdo->prepare("
        UPDATE tickets 
        SET title = :title, description = :description, due_date = :due_date, status = :status 
        WHERE id = :id AND user_id = :user_id
    ");
    $updateStmt->execute([
        'title' => $title,
        'description' => $description,
        'due_date' => $dueDate,
        'status' => $status,
        'id' => $ticketId,
        'user_id' => $userId
    ]);

    header("Location: index.php");
    exit;
}
?>

<?php include '../header.php'; ?>
<h2>Ticket bearbeiten</h2>

<form method="POST">
  <label for="title">Titel:</label><br>
  <input type="text" id="title" name="title" value="<?= htmlspecialchars($ticket['title']) ?>" required><br><br>

  <label for="description">Beschreibung:</label><br>
  <textarea id="description" name="description" rows="4" cols="50"><?= htmlspecialchars($ticket['description']) ?></textarea><br><br>

  <label for="due_date">Fällig am:</label><br>
  <input type="date" id="due_date" name="due_date" value="<?= $ticket['due_date'] ?>"><br><br>

  <label for="status">Status:</label><br>
  <select id="status" name="status">
    <option value="open" <?= $ticket['status'] === 'open' ? 'selected' : '' ?>>Offen</option>
    <option value="in_progress" <?= $ticket['status'] === 'in_progress' ? 'selected' : '' ?>>In Bearbeitung</option>
    <option value="closed" <?= $ticket['status'] === 'closed' ? 'selected' : '' ?>>Geschlossen</option>
  </select><br><br>

  <button type="submit">Änderungen speichern</button>
</form>

<?php include '../footer.php'; ?>

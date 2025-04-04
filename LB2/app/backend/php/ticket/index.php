<?php
require_once '../auth/session.php';
require_once '../db.php';
include '../header.php';

$userId = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT * FROM tickets WHERE user_id = :id ORDER BY created_at DESC");
$stmt->execute(['id' => $userId]);
$tickets = $stmt->fetchAll();
?>

<h2>Meine Tickets</h2>

<form method="POST" action="create.php">
  <input type="text" name="title" placeholder="Titel" required>
  <input type="date" name="due_date">
  <button type="submit">Ticket erstellen</button>
</form>

<table>
  <tr>
    <th>Titel</th><th>Status</th><th>Fällig am</th><th>Aktion</th>
  </tr>
  <?php foreach ($tickets as $ticket): ?>
  <tr>
    <td><?= htmlspecialchars($ticket['title']) ?></td>
    <td><?= htmlspecialchars($ticket['status']) ?></td>
    <td><?= $ticket['due_date'] ?? '-' ?></td>
    <td>
      <form method="POST" action="delete.php" style="display:inline;">
        <input type="hidden" name="id" value="<?= $ticket['id'] ?>">
        <button type="submit">Löschen</button>
      </form>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<?php include '../footer.php'; ?>

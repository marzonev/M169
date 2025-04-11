<?php
require_once '../auth/session.php';
require_once '../db.php';
include '../header.php';

$userId = $_SESSION['user_id'] ?? null;

if (!$userId) {
    header("Location: /auth/login.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM tickets WHERE user_id = :id ORDER BY created_at DESC");
$stmt->execute(['id' => $userId]);
$tickets = $stmt->fetchAll();
?>

<h2>Meine Tickets</h2>

<!-- Ticket erstellen -->
<form method="POST" action="create.php" style="margin-bottom: 20px;">
  <input type="text" name="title" placeholder="Titel" required>
  <input type="date" name="due_date">
  <select name="status">
    <option value="open">Offen</option>
    <option value="in_progress">In Bearbeitung</option>
    <option value="closed">Geschlossen</option>
  </select>
  <button type="submit">Ticket erstellen</button>
</form>

<!-- Ticket-Tabelle -->
<table border="1" cellpadding="5" cellspacing="0">
  <thead>
    <tr>
      <th>Titel</th>
      <th>Status</th>
      <th>Fällig am</th>
      <th>Aktionen</th>
    </tr>
  </thead>
  <tbody>
    <?php if (count($tickets) === 0): ?>
      <tr><td colspan="4">Keine Tickets gefunden.</td></tr>
    <?php else: ?>
      <?php foreach ($tickets as $ticket): ?>
        <tr>
          <td><?= htmlspecialchars($ticket['title']) ?></td>
          <td><?= htmlspecialchars($ticket['status']) ?></td>
          <td><?= $ticket['due_date'] ?? '-' ?></td>
          <td>
            <form method="POST" action="delete.php" onsubmit="return confirm('Wirklich löschen?');" style="display:inline;">
              <input type="hidden" name="id" value="<?= $ticket['id'] ?>">
              <button type="submit">🗑️ Löschen</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>

<?php include '../footer.php'; ?>

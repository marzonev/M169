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

<a href="create.php" style="display: inline-block; margin-bottom: 20px; padding: 8px 16px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px;">
  ➕ Ticket erstellen
</a>

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
	  <td><?= htmlspecialchars($ticket['description']) ?></td>
          <td><?= $ticket['due_date'] ?? '-' ?></td>
          <td>
            <a href="edit.php?id=<?= $ticket['id'] ?>" style="padding: 5px 10px; background-color: #FFC107; color: white; text-decoration: none; border-radius: 4px; margin-right: 5px;">✏️ Bearbeiten</a>
            <form method="POST" action="delete.php" onsubmit="return confirm('Wirklich löschen?');" style="display:inline;">
             <input type="hidden" name="id" value="<?= $ticket['id'] ?>">
             <button type="submit" style="padding: 5px 10px; background-color: #DC3545; color: white; border: none; border-radius: 4px;">🗑️ Löschen</button>
            </form> 
          </td>
         </td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>

<?php include '../footer.php'; ?>

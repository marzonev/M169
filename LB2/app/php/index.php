<?php
require 'db.php';
$users = $pdo->query("SELECT * FROM users")->fetchAll();
?>

<h1>Neuen User hinzufügen</h1>
<form action="insert_user.php" method="POST">
  <input name="name" placeholder="Name" required>
  <button type="submit">Speichern</button>
</form>

<h1>Ticket für User erstellen</h1>
<form action="insert_ticket.php" method="POST">
  <select name="user_id" required>
    <option value="">User auswählen</option>
    <?php foreach ($users as $user): ?>
      <option value="<?= $user['id'] ?>"><?= htmlspecialchars($user['name']) ?></option>
    <?php endforeach; ?>
  </select>
  <input name="title" placeholder="Ticket Titel" required>
  <button type="submit">Ticket speichern</button>
</form>

<p><a href="list_users.php">Alle User</a></p>

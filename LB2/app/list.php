<?php
require 'db.php';
$eintraege = $pdo->query("SELECT * FROM personen ORDER BY id DESC")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Alle Namen</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Einträge</h1>
  <ul>
    <?php foreach ($eintraege as $e): ?>
      <li><?= htmlspecialchars($e['name']) ?></li>
    <?php endforeach; ?>
  </ul>
  <p><a href="index.php">Zurück</a></p>
</body>
</html>

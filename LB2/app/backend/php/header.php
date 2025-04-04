<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Ticket-System</title>
  <link rel="stylesheet" href="/backend/php/style.css">
</head>
<body>
<header>
  <h1>Ticket-System</h1>
  <nav>
    <?php if (isset($_SESSION['user_id'])): ?>
      Angemeldet als <?= htmlspecialchars($_SESSION['username']) ?> |
      <a href="/backend/php/auth/logout.php">Logout</a>
    <?php else: ?>
      <a href="/backend/php/auth/login.php">Login</a> |
      <a href="/backend/php/auth/register.php">Registrieren</a>
    <?php endif; ?>
  </nav>
  <hr>
</header>

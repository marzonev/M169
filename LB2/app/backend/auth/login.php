<?php
session_start();
require_once '../db.php';


$error = ''; # Error leerstellen

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']); # E-mail in string umwandeln
    $password = trim($_POST['password']); # Passwort in string umwandeln

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email"); # Datenbank Abfrage vorbereiten
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(); # Benutzer abholen

    if ($user && password_verify($password, $user['password'])) { # Password hashen und vergleichen
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: ../ticket/index.php"); # Wenn erfolgreich, nach index.php weiterleiten
        exit;
    } else {
        $error = "Login fehlgeschlagen."; # Fehler wenn fehlgeschlagen
    }
}
?> 
<?php include '../header.php'; ?>
<h2>Login</h2> 
<form method="POST">
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Passwort" required><br>
  <button type="submit">Login</button>
</form>
<p style="color:red;"><?= $error ?></p>
<p>Kein Account? <a href="register.php">Jetzt registrieren</a></p>
<?php include '../footer.php'; ?>

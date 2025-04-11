<?php
session_start();
require_once '../db.php';


$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: /backend/php/ticket/index.php");
        exit;
    } else {
        $error = "Login fehlgeschlagen.";
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

<?php
session_start();
require_once '../db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email OR username = :username");
    $stmt->execute([
        'email' => $_POST['email'],
        'username' => $_POST['username']
    ]);

    if ($stmt->fetch()) {
        $error = "Benutzername oder E-Mail existiert bereits.";
    } else {
        $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $insert = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:u, :e, :p)");
        $insert->execute([
            'u' => $_POST['username'],
            'e' => $_POST['email'],
            'p' => $hashed
        ]);

        header("Location: login.php");
        exit;
    }
}
?>

<?php include '../header.php'; ?>
<h2>Registrieren</h2>
<form method="POST">
  <input type="text" name="username" placeholder="Benutzername" required><br>
  <input type="email" name="email" placeholder="E-Mail" required><br>
  <input type="password" name="password" placeholder="Passwort" required><br>
  <button type="submit">Registrieren</button>
</form>
<p style="color:red;"><?= $error ?></p>
<p>Bereits registriert? <a href="login.php">Zum Login</a></p>
<?php include '../footer.php'; ?>

<?php
session_start();
require_once '../db.php'; // Datenbank verbindung abholen

if (!isset($_SESSION['user_id'])) {
    header("Location: /auth/login.php");
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { # Bearbeitung einreichen
    $title = trim($_POST['title']); # Variablen auffüllen 
    $description = trim($_POST['description']);
    $status = $_POST['status'] ?? 'open';
    $due_date = $_POST['due_date'] ?? null;

    if ($title === '' || $description === '') {
        $error = "Bitte fülle alle Pflichtfelder aus.";
    } else {
        $stmt = $pdo->prepare("INSERT INTO tickets (title, description, status, due_date, user_id)  # neue Dateneinreichen
                               VALUES (:title, :description, :status, :due_date, :user_id)");
        $stmt->execute([ # Abfrage ausführen
            'title' => $title,
            'description' => $description,
            'status' => $status,
            'due_date' => $due_date ?: null,
            'user_id' => $_SESSION['user_id']
        ]);
        $success = "Ticket erfolgreich erstellt.";
    }
}
?>

<?php include '../header.php'; ?>
<h2>Neues Ticket erstellen</h2>

<?php if ($error): ?>
    <p style="color:red;"><?= $error ?></p>
<?php elseif ($success): ?>
    <p style="color:green;"><?= $success ?></p>
<?php endif; ?>

<form method="POST">
    <input type="text" name="title" placeholder="Titel" required><br><br>

    <textarea name="description" placeholder="Beschreibung" required></textarea><br><br>
    
    <label>Status:</label>
    <select name="status">
        <option value="open" selected>Offen</option>
        <option value="in_progress">In Bearbeitung</option>
        <option value="closed">Geschlossen</option>
    </select><br><br>
    
    <label>Fälligkeitsdatum:</label>
    <input type="date" name="due_date"><br><br>
    
    <button type="submit">Ticket erstellen</button>
</form>

<?php include '../footer.php'; ?>

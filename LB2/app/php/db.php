<?php
$host = 'm169';
$db   = 'tododb';
$user = 'M169';
$pass = 's123456';
$charset = 'utf8';

$dsn = "pgsql:host=$host;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "<h2>Verbindung zur PostgreSQL-Datenbank erfolgreich!</h2>";
} catch (\PDOException $e) {
    echo "<h2>Verbindungsfehler:</h2>" . $e->getMessage();
}
?>

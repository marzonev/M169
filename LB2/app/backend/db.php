<?php #Credentials
$host = 'm169_postgres';
$db   = 'tododb';
$user = 'm169';
$pass = '123456';
$charset = 'utf8';

$dsn = "pgsql:host=$host;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options); # Verbindungsversuch mit Datenbank
    // Kein echo hier!
} catch (\PDOException $e) {
    echo "<h2>Verbindungsfehler:</h2>" . $e->getMessage();
    exit; # Bei Fehler Echo weitergeben 
}

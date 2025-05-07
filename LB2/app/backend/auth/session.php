<?php
session_start(); # Kontrolliert, ob es eine Session gibt, wenn nicht, zu login weiterleiten.
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit;
}
?>

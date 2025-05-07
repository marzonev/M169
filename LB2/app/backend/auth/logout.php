<?php
session_start();
session_destroy(); # Session zerstören
header("Location: login.php"); # zu login weiterleiten
exit;

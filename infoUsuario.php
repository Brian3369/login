<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

$usuario = $_SESSION['usuario'];

foreach ($usuario as $key => $value) {
    if ($key == 'clave') {
        echo "<div class='usuario-actual'>";
        echo "<p>Clave: " . htmlspecialchars($value) . "</p>";
        echo "</div>";
    } else {
        echo "<div class='usuario-actual'>";
        echo "<p>" . htmlspecialchars($key) . ": " . htmlspecialchars($value) . "</p>";
        echo "</div>";
    }
}
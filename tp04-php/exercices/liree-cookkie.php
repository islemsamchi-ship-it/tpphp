<?php
$nom = $_COOKIE['nom'] ?? 'Cookie absent';
$theme = $_COOKIE['theme'] ?? 'Cookie absent';
$langue = $_COOKIE['langue'] ?? 'Cookie absent';

echo "Nom : " . htmlspecialchars($nom) . "<br>";
echo "Thème : " . htmlspecialchars($theme) . "<br>";
echo "Langue : " . htmlspecialchars($langue);
?>
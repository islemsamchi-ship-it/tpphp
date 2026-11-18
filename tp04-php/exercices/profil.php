<?php
session_start();
$_SESSION['username'] = $username;
$_SESSION['connecte'] = true;
if (isset($_SESSION['username'])) {
    echo "Utilisateur connecté : " . $_SESSION['username'];
} else {
    echo "Aucun utilisateur connecté.";
}
?>
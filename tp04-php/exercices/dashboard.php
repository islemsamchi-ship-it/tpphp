<?php
require_once __DIR__ . '/fonctions.php';
session_start();
protegerPage();
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Tableau de bord</title><link rel="stylesheet" href="css/style.css"></head>
<body><div class="container">
<h1>Gestion des étudiants</h1>
<p>Bienvenue <?= htmlspecialchars($_SESSION['username']) ?></p>
<ul>
<li><a href="index.php">Liste des étudiants</a></li>
<li><a href="ajouter.php">Ajouter un étudiant</a></li>
<li><a href="rechercher.php">Rechercher un étudiant</a></li>
</ul>
<a href="logout.php">Se déconnecter</a>
</div></body></html>
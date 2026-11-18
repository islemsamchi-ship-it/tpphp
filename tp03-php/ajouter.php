<?php
session_start();
require_once __DIR__ . '/fonctions.php';
$_SESSION['etudiants'] = $_SESSION['etudiants'] ?? [];
$erreurs = [];
$nom = $prenom = $age = $formation = $moyenne = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $prenom = trim($_POST['prenom'] ?? '');
    $age = trim($_POST['age'] ?? '');
    $formation = trim($_POST['formation'] ?? '');
    $moyenne = trim($_POST['moyenne'] ?? '');

    $donnees = compact('nom', 'prenom', 'age', 'formation', 'moyenne');
    $erreurs = validerEtudiant($donnees);

    if (!$erreurs) {
        $_SESSION['etudiants'][] = $donnees;
        header('Location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><title>Ajouter</title><link rel="stylesheet" href="css/style.css"></head>
<body><main><h1>Ajouter un étudiant</h1>
<?php if ($erreurs): ?><ul class="erreurs"><?php foreach ($erreurs as $e): ?><li><?= h($e) ?></li><?php endforeach; ?></ul><?php endif; ?>
<form method="POST">
<label>Nom <input name="nom" value="<?= h($nom) ?>" required></label>
<label>Prénom <input name="prenom" value="<?= h($prenom) ?>" required></label>
<label>Âge <input type="number" name="age" value="<?= h($age) ?>" required></label>
<label>Formation <input name="formation" value="<?= h($formation) ?>" required></label>
<label>Moyenne <input type="number" step="0.01" name="moyenne" value="<?= h($moyenne) ?>" required></label>
<button type="submit">Enregistrer</button></form><p><a href="index.php">Retour</a></p></main></body></html>
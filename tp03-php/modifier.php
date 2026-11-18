<?php
session_start();
require_once __DIR__ . '/fonctions.php';
$_SESSION['etudiants'] = $_SESSION['etudiants'] ?? [];
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false || $id === null || !isset($_SESSION['etudiants'][$id])) {
    http_response_code(404); exit("Étudiant introuvable.");
}
$etudiant = $_SESSION['etudiants'][$id];
$erreurs = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach (['nom','prenom','age','formation','moyenne'] as $champ) {
        $etudiant[$champ] = trim($_POST[$champ] ?? '');
    }
    $erreurs = validerEtudiant($etudiant);
    if (!$erreurs) {
        $_SESSION['etudiants'][$id] = $etudiant;
        header('Location: index.php'); exit;
    }
}
?>
<!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><title>Modifier</title><link rel="stylesheet" href="css/style.css"></head>
<body><main><h1>Modifier un étudiant</h1>
<?php if ($erreurs): ?><ul class="erreurs"><?php foreach ($erreurs as $e): ?><li><?= h($e) ?></li><?php endforeach; ?></ul><?php endif; ?>
<form method="POST">
<label>Nom <input name="nom" value="<?= h($etudiant['nom']) ?>"></label>
<label>Prénom <input name="prenom" value="<?= h($etudiant['prenom']) ?>"></label>
<label>Âge <input type="number" name="age" value="<?= h($etudiant['age']) ?>"></label>
<label>Formation <input name="formation" value="<?= h($etudiant['formation']) ?>"></label>
<label>Moyenne <input type="number" step="0.01" name="moyenne" value="<?= h($etudiant['moyenne']) ?>"></label>
<button>Enregistrer les modifications</button></form><p><a href="index.php">Annuler</a></p></main></body></html>
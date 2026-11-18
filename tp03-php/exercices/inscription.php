<?php
$nom = $prenom = $age = $formation = $moyenne = "";
$erreurs = [];
$envoye = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($envoye) {
    $nom = trim($_POST['nom'] ?? '');
    $prenom = trim($_POST['prenom'] ?? '');
    $age = trim($_POST['age'] ?? '');
    $formation = trim($_POST['formation'] ?? '');
    $moyenne = trim($_POST['moyenne'] ?? '');

    if ($nom === '') $erreurs[] = "Le nom est obligatoire.";
    if ($prenom === '') $erreurs[] = "Le prénom est obligatoire.";
    if ($formation === '') $erreurs[] = "La formation est obligatoire.";

    if ($age === '' || filter_var($age, FILTER_VALIDATE_INT) === false) {
        $erreurs[] = "L'âge doit être un nombre entier.";
    } elseif ((int)$age < 16 || (int)$age > 40) {
        $erreurs[] = "L'âge doit être compris entre 16 et 40 ans.";
    }

    if ($moyenne === '' || !is_numeric($moyenne)) {
        $erreurs[] = "La moyenne doit être numérique.";
    } elseif ((float)$moyenne < 0 || (float)$moyenne > 20) {
        $erreurs[] = "La moyenne doit être comprise entre 0 et 20.";
    }
}
function resultat($moyenne) {
    return (float)$moyenne >= 10 ? "Admis" : "Ajourné";
}
function h($valeur) {
    return htmlspecialchars((string)$valeur, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Inscription étudiant</title></head>
<body>
<h1>Inscription d'un étudiant</h1>
<form method="POST">
    <label>Nom : <input name="nom" value="<?= h($nom) ?>"></label><br>
    <label>Prénom : <input name="prenom" value="<?= h($prenom) ?>"></label><br>
    <label>Âge : <input type="number" name="age" value="<?= h($age) ?>"></label><br>
    <label>Formation : <input name="formation" value="<?= h($formation) ?>"></label><br>
    <label>Moyenne : <input type="number" step="0.01" name="moyenne" value="<?= h($moyenne) ?>"></label><br>
    <button type="submit">Valider</button>
</form>
<?php if ($envoye && $erreurs): ?>
    <h2>Erreurs</h2><ul><?php foreach ($erreurs as $erreur): ?><li><?= h($erreur) ?></li><?php endforeach; ?></ul>
<?php elseif ($envoye): ?>
    <h2>Étudiant enregistré</h2>
    <p>Nom : <?= h($nom) ?></p><p>Prénom : <?= h($prenom) ?></p>
    <p>Âge : <?= h($age) ?> ans</p><p>Formation : <?= h($formation) ?></p>
    <p>Moyenne : <?= h($moyenne) ?> / 20</p><p>Résultat : <?= resultat($moyenne) ?></p>
<?php endif; ?>
</body></html>
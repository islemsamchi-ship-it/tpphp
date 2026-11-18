<?php
session_start();
require_once __DIR__ . '/fonctions.php';
$etudiants = $_SESSION['etudiants'] ?? [];
$terme = trim($_GET['nom'] ?? '');
$resultats = [];
if ($terme !== '') {
    foreach ($etudiants as $e) {
        if (stripos($e['nom'], $terme) !== false) $resultats[] = $e;
    }
}
?>
<!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><title>Recherche</title><link rel="stylesheet" href="css/style.css"></head>
<body><main><h1>Rechercher un étudiant</h1>
<form method="GET"><label>Nom <input name="nom" value="<?= h($terme) ?>"></label><button>Rechercher</button></form>
<?php if ($terme !== ''): ?><h2>Résultats</h2>
<?php if (!$resultats): ?><p>Aucun étudiant trouvé.</p><?php else: foreach ($resultats as $e): ?>
<p><?= h($e['nom']) ?> <?= h($e['prenom']) ?> — <?= h($e['formation']) ?> — <?= h($e['moyenne']) ?>/20</p>
<?php endforeach; endif; endif; ?>
<p><a href="index.php">Retour à la liste</a></p></main></body></html>
<?php
session_start();
require_once __DIR__ . '/fonctions.php';
$etudiants = $_SESSION['etudiants'] ?? [];
?>
<!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><title>Gestion des étudiants</title><link rel="stylesheet" href="css/style.css"></head>
<body><main><h1>Gestion des étudiants</h1>
<nav><a href="index.php">Liste des étudiants</a> | <a href="ajouter.php">Ajouter un étudiant</a> | <a href="rechercher.php">Rechercher un étudiant</a></nav>
<h2>Liste des étudiants</h2>
<?php if (!$etudiants): ?><p>Aucun étudiant enregistré.</p><?php else: ?>
<table><thead><tr><th>Nom</th><th>Prénom</th><th>Âge</th><th>Formation</th><th>Moyenne</th><th>Résultat</th><th>Actions</th></tr></thead><tbody>
<?php foreach ($etudiants as $i => $e): ?><tr>
<td><?= h($e['nom']) ?></td><td><?= h($e['prenom']) ?></td><td><?= h($e['age']) ?></td><td><?= h($e['formation']) ?></td><td><?= h($e['moyenne']) ?></td><td><?= resultat($e['moyenne']) ?></td>
<td><a href="modifier.php?id=<?= $i ?>">Modifier</a> | <a href="supprimer.php?id=<?= $i ?>" onclick="return confirm('Supprimer cet étudiant ?')">Supprimer</a></td>
</tr><?php endforeach; ?></tbody></table><?php endif; ?>
</main></body></html>
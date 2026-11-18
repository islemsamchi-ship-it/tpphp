<?php
// Activité 19 : mini-projet de gestion des étudiants.
require_once "fonctions.php";

$etudiants = [
    ["nom" => "tounsi", "prenom" => "Ahmed", "age" => 20, "moyenne" => 14.5],
    ["nom" => "Ali", "prenom" => "Sami", "age" => 21, "moyenne" => 11.5],
    ["nom" => "Ben Salah", "prenom" => "Nour", "age" => 19, "moyenne" => 16],
    ["nom" => "Trabelsi", "prenom" => "Mariem", "age" => 20, "moyenne" => 9.5],
    ["nom" => "Mansouri", "prenom" => "Yassine", "age" => 22, "moyenne" => 12.75],
    ["nom" => "Gharbi", "prenom" => "Ines", "age" => 19, "moyenne" => 17]
];

$recherche = trim($_GET["nom"] ?? "");
$minimum = $_GET["minimum"] ?? "";
$etudiantTrouve = ($recherche !== "") ? rechercherEtudiant($etudiants, $recherche) : null;
$etudiantsFiltres = ($minimum !== "" && is_numeric($minimum))
    ? filtrerParMoyenne($etudiants, (float)$minimum)
    : [];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des étudiants</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 20px; }
        th, td { border: 1px solid #777; padding: 8px; text-align: left; }
        th { background: #e8eef8; }
        section { margin: 25px 0; }
    </style>
</head>
<body>
<h1>Gestion des étudiants</h1>

<p><strong>Nombre d'étudiants :</strong> <?= count($etudiants) ?></p>
<p><strong>Moyenne de la classe :</strong> <?= number_format(calculerMoyenneClasse($etudiants), 2) ?></p>
<p><strong>Nombre d'admis :</strong> <?= compterAdmis($etudiants) ?></p>

<section>
<h2>Liste des étudiants</h2>
<table>
<tr><th>Nom</th><th>Prénom</th><th>Âge</th><th>Moyenne</th><th>Résultat</th><th>Appréciation</th></tr>
<?php foreach ($etudiants as $etudiant) { afficherEtudiant($etudiant); } ?>
</table>
</section>

<section>
<h2>Recherche par nom</h2>
<form method="get">
    <label>Nom : <input type="text" name="nom" value="<?= htmlspecialchars($recherche) ?>"></label>
    <button type="submit">Rechercher</button>
</form>
<?php if ($recherche !== ""): ?>
    <?php if ($etudiantTrouve !== null): ?>
        <p>Étudiant trouvé :</p>
        <table>
        <tr><th>Nom</th><th>Prénom</th><th>Âge</th><th>Moyenne</th><th>Résultat</th><th>Appréciation</th></tr>
        <?php afficherEtudiant($etudiantTrouve); ?>
        </table>
    <?php else: ?>
        <p>Étudiant introuvable.</p>
    <?php endif; ?>
<?php endif; ?>
</section>

<section>
<h2>Filtrer selon une moyenne minimale</h2>
<form method="get">
    <label>Moyenne minimale :
        <input type="number" name="minimum" min="0" max="20"  >
    </label>
    <button type="submit">Filtrer</button>
</form>
<?php if ($minimum !== "" && is_numeric($minimum)): ?>
    <table>
    <tr><th>Nom</th><th>Prénom</th><th>Âge</th><th>Moyenne</th><th>Résultat</th><th>Appréciation</th></tr>
    <?php foreach ($etudiantsFiltres as $etudiant) { afficherEtudiant($etudiant); } ?>
    </table>
    <?php if (count($etudiantsFiltres) === 0) echo "<p>Aucun étudiant ne correspond au critère.</p>"; ?>
<?php endif; ?>
</section>

<section>
<h2>Meilleur étudiant</h2>
<?php $meilleur = trouverMeilleurEtudiant($etudiants); ?>
<?php if ($meilleur !== null): ?>
    <p><?= htmlspecialchars($meilleur["prenom"] . " " . $meilleur["nom"]) ?>
       — moyenne : <?= $meilleur["moyenne"] ?></p>
<?php endif; ?>
</section>
</body>
</html>
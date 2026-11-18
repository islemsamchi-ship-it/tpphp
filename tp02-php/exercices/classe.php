<?php
// Exercice 2 — Gestion d'une classe
$etudiants = [
    ["nom"=>"Khediri", "prenom"=>"Ahmed", "age"=>20, "formation"=>"Informatique", "moyenne"=>14.5],
    ["nom"=>"Ali", "prenom"=>"Sami", "age"=>21, "formation"=>"Informatique", "moyenne"=>11.5],
    ["nom"=>"Ben Salah", "prenom"=>"Nour", "age"=>19, "formation"=>"Informatique", "moyenne"=>16],
    ["nom"=>"Trabelsi", "prenom"=>"Mariem", "age"=>20, "formation"=>"Informatique", "moyenne"=>9.5],
    ["nom"=>"Mansouri", "prenom"=>"Yassine", "age"=>22, "formation"=>"Informatique", "moyenne"=>12.75],
    ["nom"=>"Gharbi", "prenom"=>"Ines", "age"=>19, "formation"=>"Informatique", "moyenne"=>17],
    ["nom"=>"Jaziri", "prenom"=>"Omar", "age"=>20, "formation"=>"Informatique", "moyenne"=>8],
    ["nom"=>"Saidi", "prenom"=>"Rania", "age"=>21, "formation"=>"Informatique", "moyenne"=>13],
    ["nom"=>"Haddad", "prenom"=>"Amine", "age"=>20, "formation"=>"Informatique", "moyenne"=>15],
    ["nom"=>"Bouzid", "prenom"=>"Lina", "age"=>19, "formation"=>"Informatique", "moyenne"=>10.5]
];

function afficherTousLesEtudiants($etudiants) {
    foreach ($etudiants as $etudiant) {
        echo htmlspecialchars($etudiant["nom"] . " " . $etudiant["prenom"])
            . " | Âge : " . $etudiant["age"]
            . " | Formation : " . htmlspecialchars($etudiant["formation"])
            . " | Moyenne : " . $etudiant["moyenne"] . "<br>";
    }
}

function moyenneClasse($etudiants) {
    if (count($etudiants) === 0) return 0;
    $somme = 0;
    foreach ($etudiants as $etudiant) $somme += $etudiant["moyenne"];
    return $somme / count($etudiants);
}

function compterEtudiantsAdmis($etudiants) {
    $nombre = 0;
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] >= 10) $nombre++;
    }
    return $nombre;
}

function rechercherParNom($etudiants, $nom) {
    foreach ($etudiants as $etudiant) {
        if (strcasecmp($etudiant["nom"], $nom) === 0) return $etudiant;
    }
    return null;
}

function filtrerEtudiants($etudiants, $minimum) {
    $liste = [];
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] >= $minimum) $liste[] = $etudiant;
    }
    return $liste;
}

echo "<h1>Exercice 2 — Gestion d'une classe</h1>";
echo "<h2>Liste des étudiants</h2>";
afficherTousLesEtudiants($etudiants);

echo "<h2>Moyenne de la classe</h2>";
echo number_format(moyenneClasse($etudiants), 2) . "<br>";

echo "<h2>Nombre d'étudiants admis</h2>";
echo compterEtudiantsAdmis($etudiants) . "<br>";

echo "<h2>Recherche de Khediri</h2>";
$etudiantTrouve = rechercherParNom($etudiants, "Khediri");
if ($etudiantTrouve !== null) {
    echo htmlspecialchars($etudiantTrouve["prenom"] . " " . $etudiantTrouve["nom"]);
} else {
    echo "Étudiant introuvable.";
}

echo "<h2>Étudiants ayant une moyenne >= 14</h2>";
afficherTousLesEtudiants(filtrerEtudiants($etudiants, 14));
?>
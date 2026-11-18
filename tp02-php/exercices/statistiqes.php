<?php
// Exercice 3 — Statistiques
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

function meilleureMoyenne($etudiants) {
    if (count($etudiants) === 0) return null;
    $max = $etudiants[0]["moyenne"];
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] > $max) $max = $etudiant["moyenne"];
    }
    return $max;
}

function plusFaibleMoyenne($etudiants) {
    if (count($etudiants) === 0) return null;
    $min = $etudiants[0]["moyenne"];
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] < $min) $min = $etudiant["moyenne"];
    }
    return $min;
}

function compterMoyennesSuperieuresA14($etudiants) {
    $nombre = 0;
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] >= 14) $nombre++;
    }
    return $nombre;
}

function pourcentageAdmis($etudiants) {
    if (count($etudiants) === 0) return 0;
    $nombreAdmis = 0;
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] >= 10) $nombreAdmis++;
    }
    return ($nombreAdmis / count($etudiants)) * 100;
}

echo "<h1>Exercice 3 — Statistiques</h1>";
echo "Meilleure moyenne : " . meilleureMoyenne($etudiants) . "<br>";
echo "Plus faible moyenne : " . plusFaibleMoyenne($etudiants) . "<br>";
echo "Nombre d'étudiants ayant une moyenne >= 14 : "
    . compterMoyennesSuperieuresA14($etudiants) . "<br>";
echo "Pourcentage d'étudiants admis : "
    . number_format(pourcentageAdmis($etudiants), 2) . "%<br>";
?>
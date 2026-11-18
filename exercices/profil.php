<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profil étudiant</h1>
    <?php
    $prenom="Islem";
    $nom="Samchi";
    $age="19";
    $formation="Inforamtique";
    $annee="2026";
    echo "<p> Nom complet :".$prenom." ".$nom. "</p>";
    echo "<p> Age : ".$age ." ans</p>";
    echo "<p> Formation :". $formation. "</p>";
    echo "<p> Année : ".$annee. "</p>";
    ?>
    <?php
    $moyenne=14.5;
    echo "<p>Moyenne :". $moyenne . "</p>";
    if ($moyenne >=10){
        echo "<p>Résultat : Année validée </p>";
    }else{
        echo "<p>Résulat : Année non validée </p>";
    }
    ?>
</body>
</html>
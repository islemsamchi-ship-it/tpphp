<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Mon premier programme PHP</title>
    </head>
    <body>
        <h1>Bienvenue dans mon application PHP</h1>
        <p>Nom : <?php $nom="Samchi";echo $nom; ?></p>
        <p>Prénom : <?php $Prénom="Islem";echo $Prénom; ?></p>
        <p>Formation  :<?php $formation="Informatique";echo $formation; ?></p>
        <p>Niveau d'étude : <?php $niveau="2";echo $niveau; ?></p>
        <p>Année universitaire : <?php $annee="2026-2027";echo $annee; ?></p>
        <?php
        $nom="Ahmed";
        $age=20;
        $taille=1.75;
        $etudiant=true;
        var_dump($nom);
        var_dump($age);
        var_dump($taille);
        var_dump($etudiant);
        ?>
        <?php
        $a=15;
        $b=4;
        $somme=$a+$b;
        $difference=$a-$b;
        $produit=$a*$b;
        $quotient=$a/$b;
        $reste=$a%$b;
        $carre=$a*$a;
        $moyenne=$somme/2;
        echo"<p>Somme : $somme</p>";
        echo"<p>Differene : $difference</p>";
        echo "<p> Produit : $produit</p>";
        echo "<p> Quotient : $quotient </p>";
        echo"<p>reste : $reste</p>";
        echo"<p>carre : $carre</p>";
        echo"<p>moyenne : $moyenne</p>";
        ?>
        <?php
        $prenom="Ahmed";
        $nom="Ali";
        $nomComplet=$prenom." ".$nom;
        $phrase="Bonjour"." ".$nomComplet.", "."bienvenue"." "."dans"." "."le"." "."cours"." "."de"." "."développement"." "."web"." "."côté"." "."serveur.";
        echo $phrase;
        ?>
        <?php
        $note=14.14;
        echo "Note: ". $note ."<br>";
        if ($nte<10){
            echo "Ajourné";
        }else{
            echo "admis";
        }
        echo "<br><br>";
        if($note <10){
            echo "Ajourné";
        }elseif($note >=10 && $note<12){
            echo "Passable";
        }elseif($note >=12 && $note<14){
            echo "assez bien";
        }elseif($note>=14 && $note<16){
            echo "Bien";
        }else{
            echo "très bien";
        }
    ?>
    <?php
        for($i=1;$i<=20;$i++){
            if($i%2==0){
                echo"$i ";
            }
        }
    ?>
    <?php
    for($i=1;$i<=10;$i++){
        $res=5*$i;
        echo"5 x $i =$resultat<br>";
    }
    ?>
    <?php
    for ($i=10;$i>=1;$i--){
        echo "$i";
    }

    ?>
    </body>
</html>

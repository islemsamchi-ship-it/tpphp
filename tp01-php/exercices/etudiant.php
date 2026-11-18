<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des etudiant</title>
</head>
<body>
    <h1>Formulaire étudiant</h1>
    <form method="get">
        Nom:
        <input type="text" name="nom" required>
        <br><br>
        $Prénom
        <input type="text" name="prenom" required>
        <br><br>
        Age :
        <input type="number" name="age" required>
        <br><br>
        Formation :
        <input type="text" name="formation" required>
        <br><br>
        Moyenne :
        <input type="number" name="moyenne" required>
        <br><br>
        <button type="submit">Envoyer</button>
    </form>
    <?php
    if(isset($_GET['nom'])&& isset($_GET['prenom'])
        && isset($_GET['age'])&& isset($_GET['formation'])
        && isset($_GET['moyenne'])){
            $nom=$_GET['nom'];
            $prenom=$_GET['prenom'];
            $formation=$_GET['formation'];
            $moyenne=$_GET['moyenne'];
            echo "<h2> FICHE ETUDIANT </h2>";
            echo"<p> Nom :$nom</p>";
            echo"<p> Prénom :$prenom</p>";
            echo"<p> Age :$age</p>";
            echo"<p> Formation :$formation</p>";
            echo"<p> Moyenne :$moyenne</p>";
            if($moyenne >=10){
                echo "<p> résulat : Année validée </p>";
            }else{
                echo"<p>Résulat:Année non validée </p>";
            }
    }
    
    ?></body>
</html>
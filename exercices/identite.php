<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Carte d'identité numérique</h2>
    <form action="" method="post">
        <label for="">Nom :</label>
        <input type="text" name="nom"required>
        <br><br>
        <label for="">Prenom :</label>
        <input type="text" name="prenom"required>
        <br><br>
        <label for="">Date de naissance :</label>
        <input type="date" name="dn"required>
        <br><br>
        <label for="">Ville :</label>
        <input type="text" name="ville"required>
        <br><br>
        <label for="">Profession :</label>
        <input type="text" name="prof"required>
        <br><br>
        <button type="submit" name="afficher">Afficher la carte</button>
    </form>
    <?php
    if (isset($_POST['afficher'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $date=$_POST['date'];
        $ville=$_POST['ville'];
        $prof=$_POST['prof'];
        echo "<h2> Carte d'identité numérique </h2>";
        echo "<p><b>Nom:</b>$nom</p>";
        echo "<p><b>Prénom:</b>$prenom</p>";
        echo "<p><b>Date de naissance:</b>$date</p>";
        echo "<p><b>Ville:</b>$ville</p>";
        echo "<p><b>Profession:</b>$prof</p>";
        }
    ?>
</body>
</html>
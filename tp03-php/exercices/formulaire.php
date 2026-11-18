<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Activité 1 - Formulaire</title></head>
<body>
<h1>Premier formulaire</h1>
<form action="" method="GET">
    <label>Nom : <input type="text" name="nom"></label><br>
    <label>Prénom : <input type="text" name="prenom"></label><br>
    <label>Âge : <input type="number" name="age"></label><br>
    <label>Formation : <input type="text" name="formation"></label><br>
    <button type="submit">Envoyer</button>
</form>
<?php

if (isset($_GET['nom']) && isset($_GET['prenom'])&& isset($_GET['age'])&& isset($_GET['formation'])){
    $nom = $_GET['nom'];
    echo "Nom : " . $nom;
    $prenom = $_GET['prenom'];
    echo " Prénom : " . $prenom;
    $age = $_GET['age'];
    echo " Age : " . $age;
    $formation  = $_GET['formation'];
    echo " Formation : " . $formation;
}else {
    echo "<p>Veuillez remplir le formulaire.</p>";
}
?>
</body>
</html>

<!--ACTIVITÉ 4--
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Activité 1 - Formulaire</title></head>
<body>
<h1>Premier formulaire</h1>
<form action="" method="POST">
    <label>Nom : <input type="text" name="nom"></label><br>
    <label>Prénom : <input type="text" name="prenom"></label><br>
    <label>Âge : <input type="number" name="age"></label><br>
    <label>Formation : <input type="text" name="formation"></label><br>
    <button type="submit">Envoyer</button>
</form>
<?php

if (isset($_POST['nom']) && isset($_POST['prenom'])&& isset($_POST['age'])&& isset($_POST['formation'])){
    $nom = $_POST['nom'];
    echo "Nom : " . $nom;
    $prenom = $_POST['prenom'];
    echo " Prénom : " . $prenom;
    $age = $_POST['age'];
    echo " Age : " . $age;
    $formation  = $_POST['formation'];
    echo " Formation : " . $formation;
}else {
    echo "<p>Veuillez remplir le formulaire.</p>";
}
?>
</body>
</html>
-->



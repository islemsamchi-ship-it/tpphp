<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Recherche GET</title></head>
<body>
<h1>Recherche</h1>
<form method="GET">
    <input type="text" name="mot" placeholder="Votre recherche">
    <button type="submit">Rechercher</button>
</form>
<?php
if (isset($_GET['mot'])) {
    $mot = htmlspecialchars(trim($_GET['mot']), ENT_QUOTES, 'UTF-8');
    echo "<p>Recherche : $mot</p>";
}
?>
</body></html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication </title>
</head>
<body>
    <form  method="post">
        <label>Entrez un nombre :</label>
        <input type="number" name="nombre"required>
        <button type="submit" name="calculer">Afficher </button>
    </form>
    <?php
    if (isset($_POST['calculer']))
{
    $n=(int) $_POST['nombre'];
    echo "<h3> Table de $n :</h3>";
    echo "<table border='1'  >";
    echo "<tr><th>Calcul</th><th>Résulat</th><t/r>";
    for ($i=0;$i<=10;$i++){
        $res=$n*$i;
        echo "<tr>";
        echo "<td>$n x $i </td>";
        echo "<td>$res</td>";
        echo "</tr>";

    }
    echo "</table>";
}
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <form  method="post">
        <label>Premier nombre</label>
        <input type="number" name="n1"required>
        <br><br>
        <label>Deuxième nombre</label>
        <input type="number" name="n2"required>
        <br><br>
        <button type="submit" name="calculer">calculer</button>

        
    </form>
    <?php
    if(isset($_POST['calculer'])){
        $a=(float) $_POST['n1'];
        $b=(float) $_POST['n2'];
        echo "<h3>Résulats </h3>";
        echo "somme :".($a + $b)."<br>";
        echo "Différence :".($a - $b)."<br>";
        echo "Produit :".($a * $b)."<br>";
        if($b!=0){
            echo "Quotient :" .($a / $b)."<br>";
            echo "Reste : ".fmod($a,$b). "<br>";
        }else{
            echo "Division impossible: le deuxième nombre est zéro.";
        }

    }
    ?>
</body>
</html>
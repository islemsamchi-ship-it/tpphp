<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Entrez Note1 :</label>
        <input type="number" name="n1"required>
        <label>Entrez Note2 :</label>
        <input type="number" name="n2"required>
        <label>Entrez Note3 :</label>
        <input type="number" name="n3"required>
        <button type="submit" name="calculer">calculer</button>



    </form>
    <?php
    if(isset($_POST['calculer'])){
        $n1=(float) $_POST['n1'];
        $n2=(float) $_POST['n2'];
        $n3=(float) $_POST['n3'];
        $moy=($n1+$n2+$n3)/3;
        echo"<h3>Moyenne :".round($moy,2)."/20</h3>";
        if($moy <10){
            echo "insuffisant";
        }elseif($moy >=10 && $moy<12){
            echo "Passable";
        }elseif($moy >=12 && $moy<14){
            echo "assez bien";
        }elseif($moy>=14 && $moy<16){
            echo "Bien";
        }else{
            echo "très bien";
        }
    }
    ?>
</body>
</html>
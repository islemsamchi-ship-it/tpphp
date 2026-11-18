<?php
session_start();
$_SESSION['nom']="tounsi";
$_SESSION['prenom'] = "Ali";
$_SESSION['formation'] = "Informatique";
$_SESSION['age']="19";
$_SESSION['email']="alitounsi@gmail.com";
echo "Session crées ."
?>
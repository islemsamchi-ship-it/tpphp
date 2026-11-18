********************Compte rendu tp2 ******************************
ACTIVITE 1)
1/Le tableau contient 4 éléments
2/L'indicedu premier élément est 0
3/L'indicedu dernier élément est 3
4/echo $etudiants[2]; affiche Nour
5/$etudiants[4]correspond à un indice inexistant puisque le tdernier indice du tableau est 3
ACTIVITE 2)
1)count() retourne le nombre d'éléments du tableau
2)on utilise < pour éviter d'accéder à un indice inéxistant
3)On utilise count() au lieu d'écrire directement 4 afin que le programme fonctionne fonctionne même si la taille du tableau
ACTIVITE 3)
=>forsearch est plus pratique pour parcourir tous les éléments d'un tableau sans gérer manuellement indices.
ACTIVITE 4)
?php
$etudiants=["ahmed","Sami","Nour","Amine","oussema"];
foreach($etudiants as $etudiant){
    echo "<p>$etudiant</p>";
}
array_push($etudiants, "Yassine");
array_pop($etudiants);
count($etudiants);
?>
ACTIVITE 5:
<?php
$etudiants=["ahmed","Sami","Nour","Amine"];
if (in_array("Nour",$etudiants)){
    echo "Nour existe dans le tableau .";
}
$nomRecherche="Islem";
if (in_array($nomRecherche,$etudiants)){
    echo "Etudiant trouvé .";
}
else{
    echo "Etudiant non trouvé";
}
?>
ACTIVITE 6;
<?php 
$etudiant = [
"nom" => "Khediri",
"prenom" => "Ahmed",
"age" => 20,
"formation" => "Informatique",
"moyenne" => 14.5
"téléphone" => 28259571,
"ville" => "beni khiar nabeul",
"niveau" => "2 éme dsi",
];
echo "<p>Nom : {$etudiant['nom']}</p>";
echo "<p>Prénom : {$etudiant['prenom']}</p>";
echo "<p>Âge : {$etudiant['age']}</p>";
echo "<p>Formation : {$etudiant['formation']}</p>";
echo "<p>Moyenne : {$etudiant['moyenne']}</p>";
echo "<p>téléphone ;{$etudiant['téléphone']}</p>";
echo "<p>ville : {$etudiant['ville']}</p>";
echo "<p>niveau : {$etudiant['niveau']}</p>";

ACTIVITÉ 7:
<?php
$etudiants = [
[
"nom" => "Khediri",
"prenom" => "Ahmed",
"age" => 20,
"moyenne" => 14.5
],
[
"nom" => "Ali",
"prenom" => "Sami",
"age" => 21,
"moyenne" => 11.5
],
[
"nom" => "Ben Salah",
"prenom" => "Nour",
"age" => 19,
"moyenne" => 16
]
];
foreach($etudiant as $etudiant){
    echo "<p> $etudiant </p>";
}
?>

ACTIVITÉ 8:
?php
$etudiants = [
[
"nom" => "Khediri",
"prenom" => "Ahmed",
"age" => 20,
"moyenne" => 14.5
],
[
"nom" => "Ali",
"prenom" => "Sami",
"age" => 21,
"moyenne" => 11.5
],
[
"nom" => "Ben Salah",
"prenom" => "Nour",
"age" => 19,
"moyenne" => 16
]
];
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Prénom</th><th>Age</th><th>Moyenne</th></tr>";
foreach($etudiants as $etudiants){
    echo"<tr>";
    echo "<td>{$etudiants['nom']}</td>";
    echo "<td>{$etudiants['prenom']}</td>";
    echo "<td>{$etudiants['age']}</td>";
    echo "<td>{$etudiants['moyenne']}</td>";
    echo "</tr>";

}
echo "</table>";
?>
ACTIVITÉ 9:
<?php 
function afficherbonjour(){
    echo "Bonjour !";
}
afficherbonjour();
function afficherbonjour($nom){
    echo "Bonjour ". $nom;
}
afficherbonjour("islem");
?>

1)le paramétre permet de transmettre une valeur à la fonction
2)une fonction évite de répéter le même code et facilite sa réutilisation 
ACTIVITÉ 10:
=>echo affiche directement une valeur ,tandsis que return renvoie une valuer que l'on peut réutilister
dans le programme

ACTIVITÉ 14:
1)la fonction possède un seul paramétre $etudiant
2)$etudiant représente le tableau contenant les étudiants
3)foreach permet  de parcourir chaque étudiant
4)la fonction retourne la moyenne générale de la classe

ACTIVITÉ 18:
1)Séparer les fonctions permet d’organiser le programme, de rendre le code plus lisible et plus facile à maintenir. Une fonction écrite une seule fois peut être réutilisée dans plusieurs pages PHP. Cela évite aussi de répéter le même code

2)require_once inclut et exécute le contenu d’un fichier PHP. Le fichier n’est inclus qu’une seule fois, même si require_once est appelé plusieurs fois. Cela évite notamment les redéfinitions de fonctions.

3)
../ signifie « remonter au dossier parent ». Dans exercices/etudiants.php, le fichier fonctions.php se trouve dans le dossier parent. On écrit donc require_once "../fonctions.php".
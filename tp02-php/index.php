<?php 
$etudiants=["ahmed","Sami","Nour","Amine"];
echo $etudiants[0];
?>
//Activité 2 
<?php
$etudiants=["ahmed","Sami","Nour","Amine"];
for ($i=0;$i<count($etudiants);$i++){
    echo "<p>$etudiants[$i]</p>";
}
?>
//Activité 3
<?php
foreach ($etudiants as $etudiant) {
echo "<p>$etudiant</p>";
}
?>
//Activité 4

<?php
$etudiants[] = "Amine";
array_push($etudiants, "Yassine");
array_pop($etudiants);
?>

<?php
$etudiants=["ahmed","Sami","Nour","Amine","oussema"];
foreach($etudiants as $etudiant){
    echo "<p>$etudiant</p>";
}
array_push($etudiants, "Yassine");
array_pop($etudiants);
count($etudiants);
?>
//Activité 5
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

//Activité 6:
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


?>

//Activité 7:
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
//activité 8
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
?>()
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
<?php
function additionner($a,$b){
    return $a+$b;
}
$res=additionner(10,20);
echo $res;
function calculerMoyenne($note1,$note2,$note3){
    return ($note1 + $note2 + $note3) /3;
}
calculerMoyenne(12,5,17);
function determineResulat($moyenne){
    if ($moyenne>=10){
        return "Admis";
    }
    return "Ajourné";
}
function appreciation($moyenne){
    if ($moyenne<10){
        return "Insuffisant";
    }elseif ($moyenne<12){
        return "Passable";
    }elseif($moyenne<14){
        return "Assez bien";
    }elseif($moyenne<16){
        return "bien";
    }
    return "Trés bien";

}
?>
<?php
function afficherEtudiant($etudiant)
{
echo "<p>Nom : {$etudiant['nom']}</p>";
echo "<p>Prénom : {$etudiant['prenom']}</p>";
echo "<p>Âge : {$etudiant['age']}</p>";
echo "<p>Moyenne : {$etudiant['moyenne']}</p>";
echo "<p>Résultat : " .
determinerResultat($etudiant['moyenne']) . "</p>";
echo "<p>Appréciation : " .
appreciation($etudiant['moyenne']) . "</p>";
}
?>

<?php
function calculerMoyenneClasse($etudiants)
{
$somme = 0;

foreach ($etudiants as $etudiant) {
$somme += $etudiant["moyenne"];
}
return $somme / count($etudiants);
}
?>
<?php
function rechercherEtudiant($etudiants, $nom)
{
foreach ($etudiants as $etudiant) {
if ($etudiant["nom"] === $nom) {
return $etudiant;
}
}

return null;
$etudiant = rechercherEtudiant($etudiants, "Khediri");
if ($etudiant !== null) {
afficherEtudiant($etudiant);
} else {
echo "Étudiant introuvable.";
}
?>

<?php
function obtenirAdmis($etudiants)
{
$admis = [];

foreach ($etudiants as $etudiant) {
if ($etudiant["moyenne"] >= 10) {
$admis[] = $etudiant;
}
}
return $admis;
}
?>

<?php
function filtrerParMoyenne($etudiants,$moyenneMinimale){
    $resultat=[];
    foreach($etudiants as $etudiants){
        if($etudiant["Moyenne"]>=$moyenneMinimale){
            $resultat[]=$etudiants;

        }
    }return $resultat;
}
$etudiantsBienClasses=filtrerParMoyenne($etudiants,14);
?>

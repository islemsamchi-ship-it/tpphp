<?php
$notes = [12, 15, 9, 14, 16];
function calculerSomme($notes)
{
    $somme = 0;
    foreach ($notes as $note) {
        $somme += $note;
    }
    return $somme;
}
function calculerMoyenneNotes($notes)
{
    if (count($notes) === 0) return 0;
    return calculerSomme($notes) / count($notes);
}
function trouverMaximum($notes)
{
    if (count($notes) === 0) return null;
    $maximum = $notes[0];
    foreach ($notes as $note) {
        if ($note > $maximum) $maximum = $note;
    }
    return $maximum;
}

function trouverMinimum($notes)
{
    if (count($notes) === 0) return null;
    $minimum = $notes[0];
    foreach ($notes as $note) {
        if ($note < $minimum) $minimum = $note;
    }
    return $minimum;
}

function compterNotesAdmissibles($notes)
{
    $nombre = 0;
    foreach ($notes as $note) {
        if ($note >= 10) $nombre++;
    }
    return $nombre;
}

echo "<h1>Gestion des notes</h1>";
echo "Notes : " . implode(", ", $notes) . "<br>";
echo "Somme : " . calculerSomme($notes) . "<br>";
echo "Moyenne : " . calculerMoyenneNotes($notes) . "<br>";
echo "Maximum : " . trouverMaximum($notes) . "<br>";
echo "Minimum : " . trouverMinimum($notes) . "<br>";
echo "Nombre de notes >= 10 : " . compterNotesAdmissibles($notes) . "<br>";
?>
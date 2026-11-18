<?php
function resultat($moyenne) {
    return (float)$moyenne >= 10 ? "Admis" : "Ajourné";
}
function h($valeur) {
    return htmlspecialchars((string)$valeur, ENT_QUOTES, 'UTF-8');
}
function validerEtudiant(array $donnees): array {
    $erreurs = [];
    foreach (['nom', 'prenom', 'formation'] as $champ) {
        if (trim($donnees[$champ] ?? '') === '') {
            $erreurs[] = "Le champ $champ est obligatoire.";
        }
    }
    $age = $donnees['age'] ?? '';
    if ($age === '' || filter_var($age, FILTER_VALIDATE_INT) === false ||
        (int)$age < 16 || (int)$age > 40) {
        $erreurs[] = "L'âge doit être un entier compris entre 16 et 40 ans.";
    }
    $moyenne = $donnees['moyenne'] ?? '';
    if ($moyenne === '' || !is_numeric($moyenne) ||
        (float)$moyenne < 0 || (float)$moyenne > 20) {
        $erreurs[] = "La moyenne doit être comprise entre 0 et 20.";
    }
    return $erreurs;
}
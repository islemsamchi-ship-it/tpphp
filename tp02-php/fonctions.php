function afficherbonjour(){
    echo "Bonjour !";
}
function afficherbonjour($nom){
    echo "Bonjour ". $nom;
}
function additionner($a,$b){
    return $a+$b;
}
function calculerMoyenne($note1,$note2,$note3){
    return ($note1 + $note2 + $note3) /3;
}
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

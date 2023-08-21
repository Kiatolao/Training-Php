<?php

//fonction de base
/* function bonjour ($name) {
    echo "Bonjour $name";
}

bonjour ("Jean \n");
bonjour ('Marie-Thérèse'); */

//meme fonctions stockée
/* function bonjour ($name) {
    return "Bonjour $name";
}

$salutation = bonjour ("Jean \n");
echo $salutation; */

// alternative
/* $lastName = 'doe';
function bonjour ($name = null, $lastName) {
    if ($name === null) {
        return "Bonjour \n";
    }
    return "Bonjour $name $lastName \n";
}

echo bonjour (' Jean', $lastName); */

//variable global (mauvaise pratique)
/* $lastName = 'doe';
function bonjour ($name = null) {
    global $lastName;
    if ($name === null) {
        return "Bonjour \n";
    }
    return "Bonjour $name $lastName \n";
}

echo bonjour (' Jean', $lastName); */

// exo repondre oui/non

function repondre_oui_non($phrase) {
    while (true) {
        $reponse =readline($phrase.'oui ou non?');
    if ($reponse === 'oui') {
        return true;
    } elseif ($reponse === 'non') {
        return false;
    } 
    }

}

$resultat = repondre_oui_non ('Voulez-vous continuer? ');
var_dump($resultat);


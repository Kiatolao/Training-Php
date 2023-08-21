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

function demande_creneaux () {
    
while (true) {
    
    $ouverture = readline('Entrez les horaires d\'ourveture du magasin ');
    $fermeture = readline('Entrez les horaires de fermeture du magasin ');
    if ($ouverture > $fermeture) {
        echo "L'horaire d'ouverture ne peut être plus grande que l'horaire de fermeture";
    } else {
        $creneaux[] = [$ouverture, $fermeture];
        $action = readline("Souhaitez vous changer la plage horaire? (o/n)");
        if ($action === 'n') {
            break;
        }
    }
}

return [$ouverture, $fermeture];

}

$resultat = repondre_oui_non ('Voulez-vous continuer? ');
$crenau = demande_creneaux();
var_dump($resultat);


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
$lastName = 'doe';
function bonjour ($name = null, $lastName) {
    if ($name === null) {
        return "Bonjour \n";
    }
    return "Bonjour $name $lastName \n";
}

echo bonjour (' Jean', $lastName);
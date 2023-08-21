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
function bonjour ($name = null) {
    if ($name === null) {
        return "Bonjour \n";
    }
    return 'Bonjour' . $name ."\n";
}

echo bonjour ();
echo bonjour (' Jean');
<?php

/* //Boucle while
$chiffre = null;

while($chiffre !== 17) {
    $chiffre = (int)readline('Entrez un le bon chiffre entre 1 et 20 : ');
    break;
}

echo "Bravo vous avez trouvé le bon chiffre"; */

/* //Boucle for

for ($i = 0; $i < 10; $i++) {
    echo "- $i \n";
} */

/* //Boucle for array

$notes = [13, 17, 15];

for ($i = 0; $i < 3; $i++) {
    echo '-' . $notes[$i] . "\n";
} */

/* //Boucle foreach

$notes = [13, 17, 15];

foreach ($notes as $note) {
    echo '-' . $note . "\n";
};

$eleves= [
    'cm2' => 'Mathurin',
    'grande section' => 'Antoine'
];

foreach ($eleves as $key => $eleve) {
    echo "$eleve est dans la classe $key \n";
} */

//other exempple foreach
/* $eleves = [
    'cm2' => ['Mathurin', 'Amine', 'Thais', 'Lea'],
    'grande section' => ['Antoine', 'Leonard', 'Michel']
];

foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe : \n" ;
    foreach ($listEleves as $eleve) {
        echo "- $eleve\n";
    }
    echo "\n";
}
 */

//Exercice foreach

/*
Demander à l utilisateur de taper une note ou "fin" pour terminer
Creer un tableau pour rentrez les notes (penser à $note[])
A la fin afficher la liste de notes
*/

/*
Tant que l utilisateur ne tape pas "fin"
    On ajoute la note tapée dans un tableau
Pour chaque note dans notes
    on affiche la note
*/

/* $notes = [];

while (true) {
    $action = readline("Entrez une note ou taper 'fin' pour terminer : ");
    if ($action === 'fin'){
        break;
    } else {
        $notes[] = (int)$action;
    }
};

foreach ($notes as $note) {
    echo "- $note \n";
} */


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

echo "Le magasin sera ouvert de ";
foreach($creneaux as $k => $creneau) {
    if ($k > 0) {
        echo ' et de ';
    }
    echo $creneau[0] . 'h à ' . $creneau[1] . 'h';
}

/* $input = readline("Entrez une heure d'ouverture: ");
$creneauTrouve =false;

foreach ($creneaux as $creneau) {
    if ($input >= $creneau[0] && $input < $creneau[1]) {
        $creneauTrouve = true;
        break;
    }
}

if ($creneauTrouve) {
    echo "Le magasin est ouvert";
} else {
    echo "Le magasin sera fermé";
}
 */


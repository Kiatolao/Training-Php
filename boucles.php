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
$eleves = [
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

$horaires = [];
$jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];

for ($i = 0; $i < 5; $i++) {
    $action = readline("Entrez l'horaire pour $jours[$i] ");
}

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
    echo "";
}

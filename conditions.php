<?php

//Condition qui affiche la moyenne

/*
$notes = (int)readline('Quelle est votre note ?: ');

if ($notes >10) {
    echo 'Bravo vous avez la moyenne';
} elseif ($notes === 10) {
    echo 'Vous avez juste la moyenne';
}
 else {
    echo 'Dommage vous n\'avez pas la moyenne';
}
*/

//Condition switch

/* $action = (int)readline('Entrez votre action: (1: attaquer, 2: défendre, 3: passer mon tour)');
switch ($action) {
    case 1:
        echo 'J\'attaque';
        break;
    case 2:
        echo 'Je défends';
        break;
    case 3:
        echo 'Je passe mon tour';
        break;
    default:
        echo 'Commande inconnue';
        break;
} */

//Condition horaire d'ouverture
$heure = (int)readline('Entrez une heure: ');

if (( $heure >=9 && $heure <= 12) || ( $heure >=14 && $heure <=17)) {
    echo 'Le magasin est ouvert';
} else {
    echo 'Le magasin est fermé';
}

/*
TRUE && TRUE = TRUE
TRUE && FALSE = FALSE
FALSE && FALSE = FALSE

TRUE || TRUE = TRUE
TRUE || FALSE = TRUE
FALSE || FALSE = FALSE
*/
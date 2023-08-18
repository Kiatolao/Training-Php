<?php

//Fonction qui affiche la moyenne
$notes = readline('Quelle est votre note ?: ');

if ($notes >=10) {
    if ($notes == 10 ){
        echo 'Vous avez juste la moyenne';
    } else {
    echo 'Bravo vous avez la moyenne';
    }
} else {
    echo 'Dommage vous n\'avez pas la moyenne';
}

//fonction ineractive



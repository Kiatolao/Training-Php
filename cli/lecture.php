<?php

/*
 connaitre le chemin d'un path et le placer dans un dir spécifique
 pour remonter un dossier 
 var_dump (dirname(__DIR__,x));
 */
var_dump(__DIR__);
$fichier = __DIR__. DIRECTORY_SEPARATOR . 'demo.csv';

$size= @file_put_contents ($fichier,"\nSalut");
if($size === false){
    echo'Impossible d\'ecrire le fichier';
} else {
    echo 'Ecriture reussie';
}

/* 
@ sert a rendre l'écriture silencieuse mais il faudra gérer le cas avec une condition par exemple
pour executer la commande 
php cli/lecture.php
on peut ajouter file_put_contents ($fichier,'Salut!', FILE_APPEND) 
pour ajouter le texte existant sans le remplacer;
*/

echo file_get_contents ($fichier);


//Pour lire les gros fichier
$ressource= fopen($fichier, 'r');
$k= 0;
while ($line = fgets($ressource)) {
    $k++;
    if ($k === 1230) {
        echo $line;
        break;
    }
}
fclose($fichier);
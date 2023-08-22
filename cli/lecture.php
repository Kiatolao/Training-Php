<?php

/*
 connaitre le chemin d'un path et le placer dans un dir spécifique
 pour remonter un dossier 
 var_dump (dirname(__DIR__,x));
 */
var_dump(__DIR__);
$fichier = __DIR__. DIRECTORY_SEPARATOR . 'demo.txt';

$size= file_put_contents ($fichier,'Salut!');
if($size === false){
    echo'Impossible d\'ecrire le fichier';
} else {
    echo 'Ecriture reussie';
}

/* 
pour executer la commande 
php cli/lecture.php
on peut ajouter file_put_contents ($fichier,'Salut!', FILE_APPEND) 
pour ajouter le texte existant sans le remplacer;
*/
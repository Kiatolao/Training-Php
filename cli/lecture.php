<?php

// connaitre le chemin d'un path et le placer dans un dir spécifique
var_dump(__DIR__);
$fichier = __DIR__. DIRECTORY_SEPARATOR . 'demo.txt';

file_put_contents ($fichier,'Salut!');
/* 
pour executer la commande 
php cli/lecture.php
on peut ajouter file_put_contents ($fichier,'Salut!', FILE_APPEND) 
pour ajouter le texte existant sans le remplacer;
*/
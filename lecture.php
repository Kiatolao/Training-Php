<?php
file_put_contents ('demo.txt', 'Salut!');

/* 
pour executer la commande 
php lecture.php
*/

// connaitre le chemin d'un path et le placer dans un dir spécifique
var_dump(__DIR__);
$fichier = __DIR__. DIRECTORY_SEPARATOR . '\\C:\Users\kiato\Documents\0- Formation Web developper full stack\PHP\training\Training-Php\lecture';
<?php

// Fonction invert
/* $action = readline('Entrez un mot pour vérifier si c\'est un palindrome : ');

$inverse = strtolower(strrev($action));
if (strtolower($action) === $inverse) {
    echo $action . ' est palindrome';
} else {
    echo $action . ' n\'est pas palindrome ';
} */


//Fonction somme/moyenne

/* $notes = [17, 13, 19];
$moyenne = round(array_sum($notes) / count($notes), 2);
echo"La moyenne sera de : $moyenne"; */

/*
Attention aux variables par reference
Ici a variable &$notes (fonction mutable) sera aussi modifiée contrainement à $notes
*/

/* $notes  = [14, 20, 19];
$notes2 = &$notes;
$notes[] = 11;
var_dump($notes, $notes2);
 */

 //Fonction filtre à insulte 

 $action = readline('Entrez un phrase: ');
 $insultes= ['merde', 'con'];

foreach ($insultes as $insulte) {
    $replace = str_repeat('*', strlen($insulte));
    $action = str_replace($insulte, $replace, $action);
}
echo "$action";
<?php

// Fonction invert
$action = (string)readline('Entrez un mot pour vérifier si c\'est un palindrome : ');

$inverse = strtolower(strrev($action));
if (strtolower($action) === $inverse) {
    echo $action . ' est palindrome';
} else {
    echo $action . ' n\'est pas palindrome ';
}
?>
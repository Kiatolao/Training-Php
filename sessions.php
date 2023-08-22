<?php

//basic session
session_start();
$_SESSION['role'] = 'administrateur';

//effacer clé role
unset($_SESSION['role']);

// Sauvegarder des informatiosn
$_SESSION['user'] = [
    'user' => 'Jhon',
    'id' => 12345
];
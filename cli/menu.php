<?php
$menu = __DIR__ . DIRECTORY_SEPARATOR . 'menu.txt';
$menuList = file_get_contents($menu);
echo $menuList;
?>

<h1> Liste des menus</h1>



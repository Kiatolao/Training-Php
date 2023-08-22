<?php
$menu = __DIR__ . DIRECTORY_SEPARATOR . 'menu.csv';
$lignes = file($menu);
foreach ($lignes as $k => $ligne) {
    $lignes[$k]= explode("\t", trim($ligne));
}
?>

<h1> Liste des menus</h1>

<?php foreach ($lignes  as $ligne) : ?>
    <?php if (count($ligne) === 1) : ?>
        <h2> <?= $ligne[0]; ?></h2></br>
    <?php else : ?>
        <p> <?= $ligne[0]; ?></br>
        <?= $ligne[1]; ?>
        </p>   
    <?php endif; ?>
<?php endforeach; ?>    
   



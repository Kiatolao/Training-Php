<?php
//nombre à faire deviner
$deviner =150;
// mise en place de chiffre
$error= null;
$succes= null;
$value = null;
if (isset($_POST['chiffre'])){
    $value = htmlentities($_POST['chiffre']);
    if ($value > $deviner) {
        $error = 'Votre chiffre est trop grand';
    } elseif ($value< $deviner) {
        $error = 'Votre chiffre est trop petit ';
    } else {
        $succes = "Bravo, vous avez trouvez le bon chiffre $deviner";
    }
    
}

?>

<?php if ($error) :?>
    <div class="alert">
        <?= $error ?>
    </div>
<?php elseif ($succes) :?>
    <div class="alert">
        <?= $succes ?>
    </div>
<?php endif ?>

<form action="/jeu.php" method="POST">
    <input type="number" name="chiffre[]" placeholder="Entrez un numbre entre 0 et 1000" value="<?= $value ?>">
    <button type="submit">Submit</button>
</form> 

<?php

/* version bordelique
<?php if (isset($_GET['chiffre'])) :?>
    <?php if ($_GET['chiffre'] > $deviner): ?>
        <p>Votre chiffre est trop grand</p>
    <?php elseif ($_GET['chiffre'] < $deviner): ?>
        <p>Votre chiffre est trop petit</p>
    <?php else :?>
        <p>Bravo! Vous avez trouvé le bon chiffre!</p>
    <?php endif; ?>
<?php endif; ?>
<form action="/jeu.php" method="GET">
    <input type="number" name="chiffre" placeholder="Entrez un numbre entre 0 et 1000" value="<?php if (isset($_GET['chiffre'])) {echo htmlentities($_GET['chiffre']);} ?>">
    <button type="submit">Submit</button>
</form> 
*/
?>
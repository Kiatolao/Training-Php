<?php
//nombre à faire deviner
$deviner =150;
?>

<!-- recupère le nombre -->
<pre>
    <?php var_dump($_GET['chiffre']) ?>
</pre>

<!-- input user -->
<?php if ($_GET['chiffre'] > $deviner): ?>
    <p>Votre chiffre est trop grand</p>
<?php elseif ($_GET['chiffre'] < $deviner): ?>
    <p>Votre chiffre est trop petit</p>
<?php else :?>
    <p>Bravo! Vous avez trouvé le bon chiffre!</p>
<?php endif; ?>

<form action="jeu.php" method="GET">
    <input type="number" name="chiffre" placeholder="Entrez un numbre entre 0 et 1000" value="<?= htmlentities($_GET['chiffre'])?>">
    <button type="submit">Submit</button>
</form>
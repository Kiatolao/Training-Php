<?php
$chiffre = null;

while($chiffre !== 17) {
    $chiffre = (int)readline('Entrez un le bon chiffre entre 1 et 20 : ');
}

echo "Bravo vous avez trouvé le bon chiffre";
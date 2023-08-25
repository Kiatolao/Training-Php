<?php

define ('CRENEAUX', [
    [8, 12],
    [14, 19]
]);
CRENEAUX;
function creneaux_html (array $creneaux) {
    $ouverture = [9, 13];
    $fermeture = [12, 17];
    implode(",", $ouverture, $fermeture);
};
$creneaux = creneaux_html(CRENEAUX);
?>




<div>
    <div>
    <h1>Horaires</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati officia, odit, minima iure culpa qui dolorum consectetur quod ducimus perspiciatis est voluptates quos, officiis rem!</p>
        <div>
            Le magasin sera ouvert de à
        </div>
    </div>
</div>
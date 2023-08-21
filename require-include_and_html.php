<?php
$title = 'Web';
$nav = 'index';
include 'fonctionsUser.php';

 /* demande_creneaux (); */
?>

<!-- Voir les infos server en preformaté -->
<pre>
  <?php print_r ($_SERVER)?>
</pre>



<!-- Implémentation exemeple -->

 <title><?php if (isset($title)) {echo $title;} else {echo 'Titre de ma page';} ?> </title> 

<title>
    <?php if (isset($title)):?>
      <?= $title ?>
      <!-- '< ?= est égal à echo -->
      <?php else : ?>
        Mon site
      <?php endif ?>  
</title>

<!-- changer l état de la page active -->

<li class= 'nav' <?php if ($nav === 'index'): ?> active<?php endif?>>
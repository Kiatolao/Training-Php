<?php
 include 'fonctionsUser.php';

 /* demande_creneaux (); */
?>

<!-- Implémentation exemeple -->

 <title><?php if (isset($title)) {echo $title;} else {echo 'Titre de ma page';} ?> </title> 

<title>
    <?php if (isset($title)):?>
      <?php echo $title; ?>
      <?php else : ?>
        Mon site
      <?php endif ?>  
</title>
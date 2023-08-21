<?php
$title = 'Web';
include 'fonctionsUser.php';

//creation d une fonction avec HEREDOC pour un meilleur formatage 
function nav_items (string $lien, string $title): string {
$classe = 'nav-item';
if ($_SERVER['SCRIPT_NAME'] === $lien) {
  $classe = $classe . 'active';
}
return <<<HTML
'<li class="$classe">
    <a class= "nav-link"  href="$lien">$title</a>
</li>'; 
HTML; 
}

?>

<!-- Voir les infos server en preformaté pour connaitre SCRIPT_NAME-->
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

<?= nav_items('/index.php', 'Accueil'); ?>
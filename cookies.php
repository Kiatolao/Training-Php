<?php
$name = null;
// changer la variable name pour se deconnecter
if(!empty($_GET['action']) && $_GET['action'] === 'deconnecter'){
    unset($_COOKIE['utilisateur']);
    //retour dans le passé pour effacer le cookie
    setcookie('utilsateur', '', time() -3600);
}

//pour un tableau  utilisateur voir: serialize/unserialize
if(!empty($_COOKIE['utilisateur'])){
    $name = $_COOKIE['utilisateur'];
}
if (!empty($_POST['name'])) {
    setcookie('utilisateur', $_POST['name'], time() + 60*60*24);
}

?>

<?php if ($name) : ?>
    <!-- html entities pour securiser l'entrée -->
    <h1>Bonjour <?=htmlentities($name)?></h1>
    <a href="cookies.php?action=deconnecter">Se déconnecter</a>
    <?php else :?>
<form action="" method="post">
    <div>
        <input type="text" name="name" placeholder="Entrez votre nom">
        <button>Envoyer</button>
    </div>
</form>
<?php endif; ?>
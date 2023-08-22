<?php
$error = null;
$succes = null;
$email = null;
if (!empty($_POST['email'])){
    $email = $_POST['email' ];
        if (filter_var ($email, FILTER_VALIDATE_EMAIL)) {
            $succes = 'L\'email à bien été enregistrée';
            $file = __DIR__ . DIRECTORY_SEPARATOR . 'emails' . DIRECTORY_SEPARATOR . date('Y-m-d') . '.txt';
            file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
        } else {
            $error = 'Erreur, email invalide';
        }
}
?>

<h1> Test</h1>
<?php if ($error) : ?>
    <div>
        <?= $error; ?>
    </div>
<?php endif ?>

<?php if ($succes) : ?>
    <div>
        <?= $succes ?>
    </div>
<?php endif ?>

<form action= "/newsletter.php" method="post" >
    <div>
        <p>La newsletter est INCROYABLE</p>
        <input type="email" name="email" placeholder="Entrez votre email" value="<?= htmlentities($email) ?>">
        <button>S'inscrire</button>
    </div>
</form>
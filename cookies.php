<?php
// basic cookie line 
setcookie('utilisateur', 'jhon', time() + 60*60*24);
var_dump ($_COOKIE);

?>

<form action="" method="post">
    <div>
        <input type="text" name="champs" placeholder="Entrez votre nom">
        <button>Envoyer</button>
    </div>
</form>
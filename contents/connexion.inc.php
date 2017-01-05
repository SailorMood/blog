<?php
if (isset($_POST['send'])){
    User::connexion();
} else{
    $e = "Ahah vous n'avez pas dit le mot magique !";
    Log::writeCSV($e);
}

?>
<h1>Connexion</h1>
<form method="post" action="index.php">
    <label for="pseudo">Pseudo :<input type="text" name="pseudo"></label><br>
    <label for="password">Mot de passe :<input type="password" name="password"></label><br>
    <input type="submit" name="send">
</form>
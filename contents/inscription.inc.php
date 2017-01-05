<?php

    if (isset($_POST['submitted'])){
        User::inscription();
    } else{
        $e = "Ahah vous n'avez pas dit le mot magique !";
        Log::writeCSV($e);
    }

?>

<form method="post" action="index.php">
    <label for="pseudo">Pseudo :<input type="text" name="pseudo"></label><br>
    <label for="mail">Email :<input type="mail" name="mail"></label><br>
    <label for="password">Mot de passe :<input type="password" name="password"></label><br>
    <label for="lastname">Nom :<input type="text" name="lastname"></label><br>
    <label for="firstname">Prénom :<input type="text" name="firstname"></label><br>
    <input type="submit" name="submitted">
</form>



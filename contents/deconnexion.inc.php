<?php
if (isset($_POST['deconnect'])){
    User::deconnexion();
} else{
    $e = "Ahah vous n'avez pas dit le mot magique !";
    Log::writeCSV($e);
}

?>
<h1>Déconnexion</h1>
<form method="post" action="index.php">
    <input type="submit" name="deconnect" value="Déconnexion">
</form>

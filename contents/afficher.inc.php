<h1>Afficher liste</h1>
<form method="post" action="index.php">
    <input type="submit" name="affiche" value="Afficher">
</form>
<?php
if (isset($_POST['affiche'])){
    Article::afficher();
} else{
    $e = "Ahah vous n'avez pas dit le mot magique !";
    Log::writeCSV($e);
}

?>

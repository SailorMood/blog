<?php
if (isset($_POST['modif'])){
    Article::modifier();
} else{
    $e = "Ahah vous n'avez pas dit le mot magique !";
    Log::writeCSV($e);
}
?>
<h1>Modifier article</h1>
<form method="post" action="index.php">
    <label>Id :</label><input type="number" name="id"><br>
    <label>Titre :</label><input type="text" name="titre"><br>
    <label>Contenu :</label><input type="text" name="contenu"><br>
    <label>Date :</label><input type="date" name="date"><br>
    <label>Chapo :</label><input type="text" name="chapo"><br>
    <input type="submit" name="modif" value="Modifier">
</form>

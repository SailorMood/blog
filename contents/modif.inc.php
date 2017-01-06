<?php
if (isset($_POST['modif'])){
    Article::modifier();
} else{
    $e = "Ahah vous n'avez pas dit le mot magique !";
    Log::writeCSV($e);
}
?>
<h1>Modifier liste</h1>
<form method="post" action="index.php">
    <input type="submit" name="modif" value="Modifier">
</form>

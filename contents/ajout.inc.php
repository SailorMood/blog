<?php
if (isset($_POST['sendArticle'])){
    Article::poster();
} else{
    $e = "Ahah vous n'avez pas dit le mot magique !";
    Log::writeCSV($e);
}
?>
<h1>Ajouter article</h1>
<form action="index.php" method="post">
    <input type="submit" name="sendArticle">
</form>
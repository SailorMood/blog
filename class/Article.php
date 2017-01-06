<?php
class Article
{
    public $id;
    public $titre;
    public $contenu;
    public $date;
    public $chapo;

    public static function afficher(){
        $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");
        $sql = "SELECT * FROM article";
        $listeArticle = $instance->query($sql)->fetchAll();

        for ($i=0; $i<count($listeArticle); $i++){
        $id = $listeArticle[$i]['id'];
        $titre = $listeArticle[$i]['titre'];
        $contenu = $listeArticle[$i]['contenu'];
        $date = $listeArticle[$i]['date'];
        $chapo = $listeArticle[$i]['chapo'];
        echo '<h2>'.$titre.'</h2>', $contenu.'<br>', $date.'<br>', $chapo;
    }
    }

    public static function modifier(){
        $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");
        $sql = "UPDATE article
SET id = '".$_POST['id']."'titre='".$_POST['titre']."',contenu='".$_POST['contenu']."',date=".$_POST['date']."
WHERE id = ".$_POST['id'];


    $updateSuccess = $instance->exec($sql);

    if ($updateSuccess) {
    $message = "Article modifié !";
    } else {
    $message = "L'article n'a pas été modifié !";
    }
        echo $message;

    }

    public static function poster(){
        $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");

        $query = $instance->prepare("INSERT INTO article ( id, titre, contenu, date, chapo)
VALUES (:id, :titre, :contenu, :date, :chapo)");

        $insertSuccess = $query->execute(array(
            "id" => NULL,
            "titre" => "Multipass",
            "contenu" => "joli multipass taxi 5 element share your base is belong to us",
            "date" => $posttime = date('Y-m-d h:i:s'),
            "chapo" => "chapi chapo"

        ));
        if ($insertSuccess) {
            $message = "WINNER !";
        } else {
            $message = "MEUH MEUH !";
        }
    }
}


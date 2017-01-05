<?php

class User
{
    private $id;
    public $pseudo;
    private $mail;
    protected $password;
    public $lastname;
    public $firstname;


    public static function inscription(){

        $pseudo = $_POST['pseudo'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");

        $query = $instance->prepare("INSERT INTO user ( pseudo, mail, password, lastname, firstname)
VALUES (:pseudo, :mail, :password, :lastname, :firstname)");

        $insertSuccess = $query->execute(array(
            "pseudo" => $_POST['pseudo'],
            "mail" => $_POST['mail'],
            "password" => $_POST['password'],
            "lastname" => $_POST['lastname'],
            "firstname" => $_POST['firstname']
        ));

        if ($insertSuccess) {
            $message = "WINNER !";
        } else {
            $message = "Ahah nope !";
            Log::writeCSV($e);
        }
    }

    public static function connexion(){


        if (isset($_POST['pseudo']) && isset($_POST['password'])) {

            $sql = "SELECT *
  FROM user
  WHERE pseudo='".$_POST['pseudo']."'
  AND password='".$_POST['password']."'";
            $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");
            $user = $instance->query($sql)->fetch();

            if ($user) {
                $_SESSION['user'] = array(
                    "pseudo" => $user['pseudo'],
                    "userId" => $user['id']
                );
                $connected = true;
                $message = "Connecté !";
            } else {
                $message = "identifiants incorrect !";
            }
        }
    }

    public static function deconnexion(){
        unset($_SESSION['user']);
    }
}



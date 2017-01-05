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
        var_dump($_POST);
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
        $connected = false;

        if (isset($_POST['email']) && isset($_POST['password'])) {

            $sql = "SELECT *
  FROM user
  WHERE mail='".$_POST['mail']."'
  AND password='".$_POST['password']."'";
            $user = $instance->query($sql)->fetch();

            if ($user) {
                $_SESSION['user'] = array(
                    "lastname" => $user['lastname'],
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



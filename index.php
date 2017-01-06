<?php
require ('./class/Autoload.php');
spl_autoload_register('Autoload::classAutoloader');
require('common/pdo.php');
session_start();

//include('./class/Log.php');

//try
//{
//    throw new Exception("Error");
//} catch(Exception $e){
//    Log::writeCSV($e);
//}
include('contents/inscription.inc.php');
include('contents/connexion.inc.php');
include('contents/deconnexion.inc.php');
include('contents/ajout.inc.php');
include('contents/afficher.inc.php');
include('contents/modif.inc.php');

if(isset($_SESSION['user'])){
    echo 'Salut ' . $_SESSION['user']['pseudo'];
}

?>



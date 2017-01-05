<?php
require ('./class/Autoload.php');
spl_autoload_register('Autoload::classAutoloader');
require('common/pdo.php');

//include('./class/Log.php');

//try
//{
//    throw new Exception("Error");
//} catch(Exception $e){
//    Log::writeCSV($e);
//}
include('contents/inscription.inc.php');
var_dump($instance);
?>



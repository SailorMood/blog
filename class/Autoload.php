<?php
class Autoload
{
    private static $classDirectory = './class/';

    public static function classAutoloader($class){
        $path = static::$classDirectory . "$class.php";
        if(file_exists($path) && is_readable($path)){
            require $path;
        }
    }
}
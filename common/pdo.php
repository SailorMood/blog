<?php

try {
    $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");
} catch (Exception $e) {
    Log::writeCSV($e);
}
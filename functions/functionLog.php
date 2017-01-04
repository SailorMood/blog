<?php

$file = "C:\wamp64\www\Blog\log\log.txt";
$data = "Il faut qué ça mâche !";
$date = date("d/m/y - H:i : ");

file_put_contents($file, $date.$data);

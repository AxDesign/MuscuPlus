<?php

$host = 'localhost';
$dbname = 'muscu';
$user = 'root';
$pass = '';

try{
    $bdd = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $pass);
}
catch (Exception $e){
    echo "Erreur : " . $e->getMessage();
}
?>
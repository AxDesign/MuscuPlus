<?php

if($_SERVER['SERVER_NAME'] == 'muscuplus'){
    $host = 'localhost';
    $dbname = 'muscuplus';
    $user = 'root';
    $pass = '';
} elseif ($_SERVER['SERVER_NAME'] == 'muscuplus.axdesign.fr'){
    $host = 'localhost';
    $dbname = 'roph7540_muscuplus';
    $user = 'roph7540_muscuplus';
    $pass = '9j294^Nc@B*GCpsS';
}


try{
    $bdd = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $pass);
}
catch (Exception $e){
    echo "Erreur : " . $e->getMessage();
}
?>
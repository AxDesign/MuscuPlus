<?php
if($_SERVER['SERVER_NAME'] == 'muscuplus'){
    require_once('config/config_db_local.php');
} elseif ($_SERVER['SERVER_NAME'] == 'muscuplus.axdesign.fr'){
    require_once('config/config_db_online.php');
}


try{
    $bdd = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e){
    $errorIt = $e;
    $errorMsg = "Erreur, impossible de se connecter à la base de donnée";
}
?>
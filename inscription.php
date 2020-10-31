<?php
require_once('bdd/db.php');

session_start();

if(isset($_POST['inscription'])){
    
    $valid = true;
    
    $uLastName = htmlentities((trim($_POST['u_lastName'])));
    $uName = htmlentities((trim($_POST['u_name'])));
    $uAge = htmlentities((trim($_POST['u_age'])));
    $uEmail = htmlentities((trim($_POST['u_email'])));
    $uPassword = htmlentities((trim($_POST['u_password'])));
    $uVerifPassword = htmlentities((trim($_POST['u_verifPassword'])));

    require_once("model/inc_inscription_model.php");
}

require_once("view/inc_inscription_view.php");
?>

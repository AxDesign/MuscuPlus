<?php
require_once('bdd/db.php');

session_start();

if(isset($_POST['inscription'])){
    
    $valid = true;
    
    $key = "";
    $uLastName = htmlspecialchars(trim($_POST['u_lastName']));
    $uName = htmlspecialchars(trim($_POST['u_name']));
    $uAge = htmlspecialchars(trim($_POST['u_age']));
    $uEmail = htmlspecialchars(trim($_POST['u_email']));
    $uPassword = htmlspecialchars(trim($_POST['u_password']));
    $uVerifPassword = htmlspecialchars(trim($_POST['u_verifPassword']));

    require_once("model/inc_inscription_model.php");
}

require_once("view/inc_inscription_view.php");
?>

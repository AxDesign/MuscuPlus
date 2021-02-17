<?php
$errorIt;
$errorMsg;
/*--- INSCRIPTION ---*/
require_once('bdd/db.php');
session_start();
require_once("model/inc_inscription_model.php");

if(isset($_POST['inscription'])){
    //Valide si l'utilisateur a remplie toutes les condition d'inscriptions
    $valid = true;
    
    //Variable utilisateur d'inscription
    $userLastName = htmlspecialchars(trim($_POST['u_lastName']));
    $userName = htmlspecialchars(trim($_POST['u_name']));
    $userAge = htmlspecialchars(trim($_POST['u_age']));
    $userEmail = htmlspecialchars(trim($_POST['u_email']));
    $userPassword = htmlspecialchars(trim($_POST['u_password']));
    $userCheckPassword = htmlspecialchars(trim($_POST['u_verifPassword']));
    $key = "";
    $errorMsg;
    $errorIt;
    
    //Process d'inscription
    CheckUserInscription();
    if($valid){
        CanInscription();

        if(empty($errorIt)){
            header("location:index.php"); 
        }
    }
}

require_once("view/inc_inscription_view.php");
require_once("sendMailError.php");

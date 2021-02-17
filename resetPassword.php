<?php
$errorIt;
$errorMsg;
require_once('bdd/db.php');
session_start();

if(isset($_POST['resetPassword'])){
    $valid = true;
    $email = $_POST['user_email_resetPassword'];

    require_once("model/inc_resetPassword_model.php");
}

require_once("view/inc_resetPassword_view.php");
require_once("sendMailError.php");

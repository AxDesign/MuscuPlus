<?php
require_once('bdd/db.php');
session_start();

if(isset($_POST['modifiedPassword'])){
    $valid = true;
    $email = $_GET['email'];
    $newPassword = $_POST['newpassword'];
    $verifPassword = $_POST['verifpassword'];
    require_once("model/inc_changePassword_model.php");
}

require_once("view/inc_changePassword_view.php");
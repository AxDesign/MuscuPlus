<?php
$errorIt;
$errorMsg;
require_once('bdd/db.php');

if(isset($_GET['name'], $_GET['key']) AND !empty($_GET['name'] AND !empty($_GET['key']))){
    require_once('model/inc_confirmation_model.php');
}

require_once("view/inc_confirmation_view.php");
require_once("sendMailError.php");

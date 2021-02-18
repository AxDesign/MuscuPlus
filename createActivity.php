<?php
$errorIt;
$errorMsg;
require_once('bdd/db.php');
session_start();
require_once('model/inc_createActivity_model.php');

if(isset($_POST['activity-name'])){
    $activityName = $_POST['activity-name'];
    $red = random_int(0,255);
    $green = random_int(0,255);
    $blue = random_int(0,255);
    CreateActivity();
}

require_once('view/inc_main_view.php');
require_once("sendMailError.php");

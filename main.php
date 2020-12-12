<?php
require_once('bdd/db.php');
session_start();
require_once('model/inc_newActivityName_model.php');
require_once('model/inc_main_model.php');

if(isset($_POST['btn-new-activity'])){
    $red = random_int(0,255);
    $green = random_int(0,255);
    $blue = random_int(0,255);
    NewActivity();
}
$activityList;
DisplayActivity();
require_once('view/inc_main_view.php');

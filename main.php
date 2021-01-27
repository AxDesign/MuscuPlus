<?php
require_once('bdd/db.php');
session_start();
require_once('model/inc_main_model.php');

if(isset($_POST['activityIdDelete']) && isset($_POST['activityNameDelete'])){
    $activityId = $_POST['activityIdDelete'];
    $activityName = $_POST['activityNameDelete'];
    DeleteActivity();
}

$activityList;
DisplayActivity();

require_once('view/inc_main_view.php');
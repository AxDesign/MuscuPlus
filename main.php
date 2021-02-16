<?php
require_once('bdd/db.php');
session_start();
require_once('model/inc_main_model.php');

if(isset($_GET['activityIdDelete']) && isset($_GET['activityNameDelete'])){
    $activityId = $_GET['activityIdDelete'];
    $activityName = $_GET['activityNameDelete'];
    DeleteActivity();
}

$activityList;
DisplayActivity();

$time = [];
CalculateTimeOfActivity();

require_once('view/inc_main_view.php');
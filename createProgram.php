<?php
require_once('bdd/db.php');
session_start();
require_once('model/inc_createProgram_model.php');

if(isset($_POST['programName'])){
    $activityName = $_POST['activityName'];
    $activityId = $_POST['activityId'];
    $programName = $_POST['programName'];
    $exerciseTime = $_POST['exerciseTime'];
    CreateProgram();
}

require_once('view/inc_createProgram_view_json.php');

<?php
require_once('bdd/db.php');
session_start();
require_once('model/inc_createProgram_model.php');

echo $_POST['activityId'];
echo $_POST['activityName'];

if(isset($_POST['program-name'])){
    $activityName = $_POST['activityName'];
    $activityId = $_POST['activityId'];
    $programName = $_POST['program-name'];
    CreateProgram();
}

// Ma vue :
header("location:activity.php");
//require_once('view/inc_program_view.php');
?>
<?php
$errorIt;
$errorMsg;
require_once('bdd/db.php');
session_start();
require_once('model/inc_createExercise_model.php');


if(isset($_POST['exerciseName'])){
    $idActivity = $_POST['activityList'];
    $exerciseName = $_POST['exerciseName'];
    if(empty($_POST['recallDate'])){
        $recallDate = 0;
    } else {
        $recallDate = $_POST['recallDate'];
    }
    if(empty($_POST['recallTime'])){
        $recallTime = 0;
    } else {
        $recallTime = $_POST['recallTime'];
    }
    if(empty($_POST['exerciseDistance'])){
        $exerciseDistance = 0;
    } else{
        $exerciseDistance = $_POST['exerciseDistance'];
    }
    if(empty($_POST['exerciseSeries'])){
        $exerciseSeries = 0;
    } else {
        $exerciseSeries = $_POST['exerciseSeries'];
    }
    if(empty($_POST['exerciseTime'])){
        $exerciseTime = 0;
    } else {
        $exerciseTime = $_POST['exerciseTime'];
    }
    if(empty($_POST['exerciseRepetitions'])){
        $exerciseRepetitions = 0;
    }else {
        $exerciseRepetitions = $_POST['exerciseRepetitions'];
    }
    if(empty($_POST['recallDate'])){
        CreateExercice();
    } else {
        CreateRecallExercice();
    }
}

require_once('view/inc_createExercise_view_json.php');
require_once("sendMailError.php");

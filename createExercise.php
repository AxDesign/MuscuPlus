<?php
require_once('bdd/db.php');
session_start();
require_once('./model/inc_createExercise_model.php');

if(isset($_POST['exerciseName'])){
    $idActivity = $_POST['activityId'];
    $exerciseName = $_POST['exerciseName'];
    $exerciseSeries = $_POST['exerciseSeries'];
    
    if(empty($_POST['exerciseTime'])){
        $exerciseTime = 0;
        $exerciseRepetitions = $_POST['exerciseRepetitions'];
    } else {
        $exerciseRepetitions = 0;
        $exerciseTime = $_POST['exerciseTime'];
    }

    CreateExercice();
}

require_once('view/inc_createExercise_view_json.php');
<?php
require_once('bdd/db.php');
session_start();
require_once('./model/inc_exercise_model.php');

$programId = $_GET['programId'];
$activityId = $_GET['activityId'];
$activityName = $_GET['activityName'];
$programName = $_GET['programName'];

if(isset($_GET['exerciseIdDelete'])){
    $exerciseIdDelete = $_GET['exerciseIdDelete'];
    DeleteExercise();
}

$exoList;
DisplayExercise();

require_once('view/inc_exercise_view.php');
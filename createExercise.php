<?php
require_once('bdd/db.php');
session_start();
require_once('./model/inc_createExercise_model.php');

if(isset($_POST['exerciseName'])){
    $idActivity = $_POST['activityId'];
    $idProgram = $_POST['programId'];
    $exerciseName = $_POST['exerciseName'];
    CreateProgram();
}

require_once('view/inc_createExercise_view_json.php');
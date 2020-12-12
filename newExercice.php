<?php
require_once('bdd/db.php');
session_start();
require_once('model/inc_newExercice_model.php');


$activity = $_GET['exercise'];
if(isset($_POST['btn-new-exercice'])){
    $name = $_POST['new-exercice-name'];
    $numberSeries = $_POST['number-series'];
    $numberRepetitions = $_POST['number-repetitions'];
    $time = $_POST['time'];
    SendExercice();
}
$exerciceList;
DisplayExercices();

require_once('view/inc_activity_view.php');

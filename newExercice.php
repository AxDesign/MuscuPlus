<?php
require_once('bdd/db.php');
session_start();

if(isset($_POST['btn-new-exercice'])){
    $name = $_POST['new-exercice-name'];
    $numberSeries = $_POST['number-series'];
    $numberRepetitions = $_POST['number-repetitions'];
}
require_once('model/inc_newExercice_model.php');

require_once('view/inc_activity_view.php');

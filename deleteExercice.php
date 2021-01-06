<?php
require_once('bdd/db.php');
session_start();

$activity = $_GET['nameActivity'];
if(isset($_POST['deleteExercice'])){
    $exerciceDelete = $_GET['nameExerciceDelete'];
    $idExerciceDelete = $_GET['idExerciceDelete'];
}
require_once('model/inc_deleteExercice_model.php');
require_once('view/inc_deleteExercice_view.php');
<?php
require_once('bdd/db.php');
session_start();
require_once('model/inc_main_model.php');
$activityList;
DisplayActivity();


$time = [];
CalculateTimeOfActivity();

$repetitions = [];
CalculateRepetitionsOfActivity();

require_once('view/inc_statistiques_view.php');
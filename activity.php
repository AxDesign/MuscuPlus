<?php
require_once('bdd/db.php');
session_start();
require_once('model/inc_program_model.php');

$activityId = $_GET['activityId'];
$activityName = $_GET['activityName'];

$programList;
DisplayProgram();

require_once('view/inc_program_view.php');
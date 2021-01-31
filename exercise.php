<?php
require_once('bdd/db.php');
session_start();

$programId = $_GET['programId'];
$programName = $_GET['programName'];

require_once('view/inc_exercise_view.php');
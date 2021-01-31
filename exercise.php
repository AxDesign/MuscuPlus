<?php
require_once('bdd/db.php');
session_start();

$programName = $_GET['programName'];

require_once('view/inc_exercise_view.php');
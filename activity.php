<?php
require_once('bdd/db.php');
session_start();

$activity = $_GET['exerciseActivity'];

require_once('model/inc_newExercice_model.php');
require_once('view/inc_activity_view.php');
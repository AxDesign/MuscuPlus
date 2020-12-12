<?php
require_once('bdd/db.php');
session_start();
require_once('model/inc_newExercice_model.php');

$activity = $_GET['exerciseActivity'];
DisplayExercices();
require_once('view/inc_activity_view.php');
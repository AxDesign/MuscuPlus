<?php
require_once('bdd/db.php');
session_start();
require_once('model/inc_createActivity_model.php');

if(isset($_POST['activity-name'])){
    $activityName = $_POST['activity-name'];
    CreateActivity();
}

require_once('view/inc_main_view.php');
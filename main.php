<?php
require_once('bdd/db.php');
session_start();
require_once('model/inc_main_model.php');

if(isset($_POST['btn-new-activity'])){
    $nameActivity = htmlentities(trim($_POST['new-activity-name']));
    VerificationNewActivity($nameActivity);
}

require_once('view/inc_main_view.php');

?>
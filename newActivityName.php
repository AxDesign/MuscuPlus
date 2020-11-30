<?php
require_once('bdd/db.php');
session_start();

if(isset($_POST['btn-new-activity'])){
    $newActivityName = $_POST['new-activity-name'];
}
require_once('model/inc_newActivityName_model.php');

require_once('view/inc_main_view.php');

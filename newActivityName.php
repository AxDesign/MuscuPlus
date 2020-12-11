<?php
require_once('bdd/db.php');

if(isset($_POST['btn-new-activity'])){
    $newActivityName = $_POST['new-activity-name'];
}
require_once('main.php');

require_once('view/inc_main_view.php');

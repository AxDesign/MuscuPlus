<?php
require_once('bdd/db.php');
session_start();

if($_SESSION['admin'] == true){
    require_once('model/inc_dashboard_model.php');
}
require_once('view/inc_dashboard_view.php');
?>
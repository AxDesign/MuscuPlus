<?php
require_once('bdd/db.php');
session_start();

if(isset($_POST['deleteActivity'])){
    $activityDelete = $_GET['nameActivityDelete'];
    $idActivityDelete = $_GET['idActivityDelete'];
}
require_once('model/inc_deleteActivity_model.php');
require_once('view/inc_deleteActivity_view.php');
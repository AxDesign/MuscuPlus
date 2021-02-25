<?php
$errorIt;
$errorMsg;
require_once('bdd/db.php');
session_start();
require_once('model/notificationEmail_model.php');

date_default_timezone_set('Europe/Paris');
$actualDate = date('Y-m-d H:i' . ':00');

RecoverDate();

require_once("sendMailError.php");

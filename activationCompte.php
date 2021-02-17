<?php
require_once("model/inc_activation_compte_model.php");

if(isset($_GET['reset'])){
    reSendEmail();
}
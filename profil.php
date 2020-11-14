<?php
require_once('bdd/db.php');
session_start();

if($_SESSION['admin'] == true){
    require_once('model/inc_profil_model.php');
}

if(isset($_SESSION['id'])){
    if(isset($_POST['modified'])){
        $newLastName = htmlentities(trim($_POST['newlastname']));
        $newName = htmlentities(trim($_POST['newname']));
        $newAge = htmlentities(trim($_POST['newage']));
        $newEmail = htmlentities(trim($_POST['newemail']));
        $newPassword = htmlentities(trim($_POST['newpassword']));
        $verifPassword = htmlentities(trim($_POST['verifpassword']));
        require_once('model/inc_profil_model.php');
    }

    // $arryToExtract = array("profil_TITLE" => "Paramètres");
    // extract($arryToExtract, EXTR_PREFIX_SAME);
    require_once('view/inc_profil_view_1.php');
    require_once('view/inc_content_parametres.php');
    require_once('view/inc_profil_view_2.php');
}

?>
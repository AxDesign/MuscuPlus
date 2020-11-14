<?php
require_once('bdd/db.php');
session_start();

// $arryToExtract = array("profil_TITLE" => "Statistiques");
// extract($arryToExtract, EXTR_PREFIX_SAME);


require_once('view/inc_profil_view_1.php');
require_once('view/inc_content_statistiques.php');
require_once('view/inc_profil_view_2.php');
?>
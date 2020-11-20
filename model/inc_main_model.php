<?php
function VerificationNewActivity($nameActivity){
    $valid = true;

    if(empty($nameActivity)){
        $valid = false;
        $errorNameActivity = "Le champ ne peux pas être vide";
    }
    
    if(strlen($nameActivity) > 255){
        $valid = false;
        $errorNameActivity = "Le nom est trop long !";
    }

    return $valid;
}
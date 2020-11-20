<?php
function VerificationConnexionUser(){
    global $bdd,
        $userEmailConnexion,
        $userPasswordConnexion,
        $errorEmailUser,
        $errorPasswordUser,
        $errorConnexionUser,
        $valid;

    if(empty($userEmailConnexion)){
        $valid = false;
        $errorEmailUser = "Le champ d'email ne peux pas être vide";
    }
    
    if(strlen($userEmailConnexion) > 255){
        $valid = false;
        $errorEmailUser = "Le champ d'email est trop long !";
    }
    
    if(empty($userPasswordConnexion)){
        $valid = false;
        $errorPasswordUser = "Le champ de mot de passe ne peux pas être vide";
    }
    
    if(strlen($userPasswordConnexion) > 255){
        $valid = false;
        $errorPasswordUser = "Le champ de mot de passe est trop long !";
    }
    
    $requestConnexion =  $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ? AND password = ?');
    $requestConnexion->execute(array($userEmailConnexion, $userPasswordConnexion));
    $requestConnexion = $requestConnexion->fetch();
    if($requestConnexion['id'] == ""){
        $valid = false;
        $errorConnexionUser = "Le mail ou le mot de passe est incorrecte";
    }
}
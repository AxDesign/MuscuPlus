<?php
function VerificationUserConnexion(){
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
    
    $passwordHash = password_hash($userPasswordConnexion, PASSWORD_DEFAULT);
    //On test la connexion
    try{
        $requestConnexion =  $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $requestConnexion->execute(array($userEmailConnexion));
        
        if($requestConnexion->rowCount() == 1){
            while($donneeConnexion = $requestConnexion->fetch()){
                switch (password_verify($userPasswordConnexion, $donneeConnexion['password'])){
                    case "":
                        $valid = false;
                        $errorConnexionUser = "Le mail ou le mot de passe est incorrecte";
                        break;
                    case 1:
                        $valid = true;
                }
            }
        } else {
            $valid = false;
            $errorConnexionUser = "Le mail ou le mot de passe est incorrecte";
        }
    }catch (Exception $e) {
        $errorIt = $e;
        $errorMsg = 'Une erreur innatendue est survenue lors de la connexion à la base de donnée. Le service technique a été informé. Veuillez retenter plus tard.';
    }


}
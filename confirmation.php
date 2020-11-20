<?php
require_once('bdd/db.php');

if(isset($_GET['name'], $_GET['key']) AND !empty($_GET['name'] AND !empty($_GET['key']))){
    $userName = htmlspecialchars(urldecode($_GET['name']));
    $key = intval($_GET['key']);

    $confirmUser = $bdd->prepare("SELECT * FROM utilisateurs WHERE name = ? AND confirmkey = ?");
    $confirmUser->execute(array($userName, $key));
    $userExist = $confirmUser->rowCount();

    if($userExist == 1){
        $user = $confirmUser->fetch();
        if($user['valid'] == 0){
           $updateUser = $bdd->prepare("UPDATE utilisateurs SET valid = 1 WHERE name = ? AND confirmkey = ?");
           $updateUser->execute(array($userName, $key));
           echo "Votre compte a bien étais confirmé";
        }else{
            echo "Votre compte a déjà étais confirmé";
        }
    }else{
        echo "L'utilisateur n'existe pas !";
    }
}

<?php
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
       $validAccount = "Votre compte a bien étais confirmé";
    }else{
        $reValidAccount = "Votre compte a déjà était confirmé";
    }
}else{
    $notValidAccount = "L'utilisateur n'existe pas !";
}
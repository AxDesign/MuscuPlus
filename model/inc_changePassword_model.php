<?php
if(strlen($newPassword) > 255){
    $valid = false;
    $errPasswordUser = "Le champ de mot de passe est trop long !";
}
if(empty($verifPassword)){
    $valid = false;
    $errVerifPasswordUser = "Le champ de vérification du mot de passe ne peux pas être vide";
}
if($verifPassword != $newPassword){
    $valid = false;
    $errVerifPasswordUser = "Le mot de passe et le mot de passe de vérification ne sont pas les même !";
}

if($valid){
    $insertNewPassword = $bdd->prepare("UPDATE utilisateurs SET password=? WHERE email=?");
    $insertNewPassword->execute(array($newPassword, $email));
    header("location:index.php");
}
<?php
if(empty($email)){
    $valid = false;
    $errorUserEmail = "Le champ d'email ne peux pas être vide";
}

if(strlen($email) > 255){
    $valid = false;
    $errorUserEmail = "Le champ d'email est trop long !";
}
if($valid){
    $req = $bdd->prepare('SELECT * FROM users WHERE email = ?');
    $req->execute(array($email));
    $req = $req->fetch();
    if($req['email'] == $email){
        require_once("mail/mailResetPassword.php");
        header("location:index.php");
    }
}
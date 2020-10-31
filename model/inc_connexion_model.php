<?php
if(empty($uEmail)){
    $valid = false;
    $errEmailUser = "Le champ d'email ne peux pas être vide";
}

if(strlen($uEmail) > 255){
    $valid = false;
    $errEmailUser = "Le champ d'email est trop long !";
}

if(empty($uPassword)){
    $valid = false;
    $errPasswordUser = "Le champ de mot de passe ne peux pas être vide";
}

if(strlen($uPassword) > 255){
    $valid = false;
    $errPasswordUser = "Le champ de mot de passe est trop long !";
}

$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ? AND password = ?');
$req->execute(array($uEmail, $uPassword));
$req = $req->fetch();
if($req['id'] == ""){
    $valid = false;
    $errConnexion = "Le mail ou le mot de passe est incorrecte";
}

if($valid){
    header('location: main.php');
}
?>
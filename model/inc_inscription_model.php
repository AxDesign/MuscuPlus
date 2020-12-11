<?php
//Vérification des données envoyé par l'utilisateur
if(empty($userLastName)){
    $valid = false;
    $errLastNameUser = "Le champ de nom ne peux pas être vide";
}


if(strlen($userLastName) > 30){
    $valid = false;
    $errLastNameUser = "Le champ de nom est trop long !";
}

if(empty($userName)){
    $valid = false;
    $errNameUser = "Le champ de prénom ne peux pas être vide";
}

if(strlen($userName) > 30){
    $valid = false;
    $errNameUser = "Le champ de prénom est trop long !";
}

if(empty($userAge)){
    $valid = false;
    $errAgeUser = "Le champ d'age ne peux pas être vide";
}
if($userAge > 100 || $userAge < 5){
    $valid = false;
    $errAgeUser = "Votre age est incorrect";
}

if(empty($userEmail)){
    $valid = false;
    $errEmailUser = "Le champ d'email ne peux pas être vide";
}

if(strlen($userEmail) > 255){
    $valid = false;
    $errEmailUser = "Le champ d'email est trop long !";
}

if(empty($userPassword)){
    $valid = false;
    $errPasswordUser = "Le champ de mot de passe ne peux pas être vide";
}

if(strlen($userPassword) > 255){
    $valid = false;
    $errPasswordUser = "Le champ de mot de passe est trop long !";
}

if(empty($userCheckPassword)){
    $valid = false;
    $errVerifPasswordUser = "Le champ de vérification du mot de passe ne peux pas être vide";
}

if(strlen($userCheckPassword) > 255){
    $valid = false;
    $errVerifPasswordUser = "Le champ de vérification du mote de passe est trop long !";
}

if($userCheckPassword != $userPassword){
    $valid = false;
    $errVerifPasswordUser = "Le mot de passe et le mot de passe de vérification ne sont pas les même !";
}

if($userCheckPassword == $userPassword){
    $lengthkey = 12;
    for($i=1; $i<$lengthkey; $i++){
        $key .= mt_rand(0,9);
    }
}
if($valid){
    $req = $bdd->prepare('INSERT INTO utilisateurs(lastName, name, age, email, password, confirmkey) VALUES(:lastName, :name, :age, :email, :password, :confirmkey)');
    $req->execute(array(
        'lastName' => $userLastName,
        'name' => $userName,
        'age' => $userAge,
        'email' => $userEmail,
        'password' => $userPassword,
        'confirmkey' => $key
    ));
    require_once("mail/mailConfirmation.php");
    header("location:index.php");
}
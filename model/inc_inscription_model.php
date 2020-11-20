<?php
if(empty($uLastName)){
    $valid = false;
    $errLastNameUser = "Le champ de nom ne peux pas être vide";
}


if(strlen($uLastName) > 30){
    $valid = false;
    $errLastNameUser = "Le champ de nom est trop long !";
}

if(empty($uName)){
    $valid = false;
    $errNameUser = "Le champ de prénom ne peux pas être vide";
}

if(strlen($uName) > 30){
    $valid = false;
    $errNameUser = "Le champ de prénom est trop long !";
}

if(empty($uAge)){
    $valid = false;
    $errAgeUser = "Le champ d'age ne peux pas être vide";
}
if($uAge > 100 || $uAge < 5){
    $valid = false;
    $errAgeUser = "Votre age est incorrect";
}

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

if(empty($uVerifPassword)){
    $valid = false;
    $errVerifPasswordUser = "Le champ de vérification du mot de passe ne peux pas être vide";
}

if(strlen($uVerifPassword) > 255){
    $valid = false;
    $errVerifPasswordUser = "Le champ de vérification du mote de passe est trop long !";
}

if($uVerifPassword != $uPassword){
    $valid = false;
    $errVerifPasswordUser = "Le mot de passe et le mot de passe de vérification ne sont pas les même !";
}

if($uVerifPassword == $uPassword){
    $lengthkey = 12;
    for($i=1; $i<$lengthkey; $i++){
        $key .= mt_rand(0,9);
    }
}
if($valid){
    $req = $bdd->prepare('INSERT INTO utilisateurs(lastName, name, age, email, password, confirmkey) VALUES(:lastName, :name, :age, :email, :password, :confirmkey)');
    $req->execute(array(
        'lastName' => $uLastName,
        'name' => $uName,
        'age' => $uAge,
        'email' => $uEmail,
        'password' => $uPassword,
        'confirmkey' => $key
    ));
    require_once("mailConfirmation.php");
    header("location:index.php");
}
<?php
/* CONNEXION */
require_once('bdd/db.php');
session_start();
require_once("model/inc_connexion_model.php");


if(isset($_POST['connexion'])){
    //Valide si l'utilisateur a remplie toutes les condition de connexion
    $valid = true;

    //Variable utilisateur de connexion
    $userEmailConnexion = htmlspecialchars((trim($_POST['user_email_connexion'])));
    $userPasswordConnexion = htmlspecialchars((trim($_POST['user_password_connexion'])));
    
    //Process de connexion
    VerificationUserConnexion();
    if($valid){
        header('location: main.php');
    }

    //On récupère toutes les données utilisateurs nécéssaire pour la session !
    $requestDataUser = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ?');
    $requestDataUser->execute(array($_POST["user_email_connexion"]));
    $userData = $requestDataUser->fetch();
    $_SESSION['id'] = $userData['id'];
    $_SESSION['admin'] = $userData['admin'];
    $_SESSION['lastName'] = $userData['lastName'];
    $_SESSION['name'] = $userData['name'];
    $_SESSION['age'] = $userData['age'];
    $_SESSION['email'] = $userData['email'];
    $_SESSION['password'] = $userData['password'];
    $_SESSION['confirmAccount'] = $userData['valid'];
}

require_once("view/inc_connexion_view.php");

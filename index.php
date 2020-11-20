<?php
require_once('bdd/db.php');

session_start();

if(isset($_POST['connexion'])){
    
    $valid = true;

    $userEmailConnexion = htmlentities((trim($_POST['user_email_connexion'])));
    $userPasswordConnexion = htmlentities((trim($_POST['user_password_connexion'])));

    $errorEmailUser = '';
    $errorPasswordUser = '';
    $errorConnexionUser = '';
    
    require_once("model/inc_connexion_model.php");
    VerificationConnexionUser();
    if($valid){
        header('location: main.php');
    }

    //On récupère toutes les données utilisateurs nécéssaire !
    $requestUser = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ?');
    $requestUser->execute(array($_POST["user_email_connexion"]));
    $dataUser = $requestUser->fetch();
    $_SESSION['id'] = $dataUser['id'];
    $_SESSION['admin'] = $dataUser['admin'];
    $_SESSION['lastName'] = $dataUser['lastName'];
    $_SESSION['name'] = $dataUser['name'];
    $_SESSION['age'] = $dataUser['age'];
    $_SESSION['email'] = $dataUser['email'];
    $_SESSION['password'] = $dataUser['password'];
}

require_once("view/inc_connexion_view.php");

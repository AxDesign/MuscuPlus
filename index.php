<?php
require_once('bdd/db.php');

session_start();

if(isset($_POST['connexion'])){
    
    $valid = true;

    $uEmail = htmlentities((trim($_POST['u_email'])));
    $uPassword = htmlentities((trim($_POST['u_password'])));

    //On récupère toutes les données utilisateurs nécéssaire !
    $reqUser = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ?');
    $reqUser->execute(array($_POST["u_email"]));
    $dataUser = $reqUser->fetch();
    $_SESSION['id'] = $dataUser['id'];
    $_SESSION['admin'] = $dataUser['admin'];
    $_SESSION['lastName'] = $dataUser['lastName'];
    $_SESSION['name'] = $dataUser['name'];
    $_SESSION['age'] = $dataUser['age'];
    $_SESSION['email'] = $dataUser['email'];
    $_SESSION['password'] = $dataUser['password'];
    
    require_once("model/inc_connexion_model.php");
}

require_once("view/inc_connexion_view.php");
?>
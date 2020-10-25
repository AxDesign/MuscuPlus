<?php
include('bdd/db.php');

if(isset($_POST['inscription'])){

    $valid = true;

    $uNom = htmlentities((trim($_POST['u_nom'])));
    $uPrenom = htmlentities((trim($_POST['u_prenom'])));
    $uAge = htmlentities((trim($_POST['u_age'])));
    $uEmail = htmlentities((trim($_POST['u_email'])));
    $uPassword = htmlentities((trim($_POST['u_password'])));
    $uVerifPassword = htmlentities((trim($_POST['u_verifPassword'])));

    if(empty($uNom)){
        $valid = false;
        $errNomUser = "Le champ de nom ne peux pas être vide";
    }

    if(strlen($uNom) > 30){
        $valid = false;
        $errNomUser = "Le champ de nom est trop long !";
    }

    if(empty($uPrenom)){
        $valid = false;
        $errPrenomUser = "Le champ de prénom ne peux pas être vide";
    }

    if(strlen($uPrenom) > 30){
        $valid = false;
        $errPreomUser = "Le champ de prénom est trop long !";
    }

    if(empty($uAge)){
        $valid = false;
        $errAgeUser = "Le champ d'age ne peux pas être vide";
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

    if($valid){
        $req = $bdd->prepare('INSERT INTO utilisateurs(nom, prenom, age, email, password) VALUES(:nom, :prenom, :age, :email, :password)');
        $req->execute(array(
            'nom' => $uNom,
            'prenom' => $uPrenom,
            'age' => $uAge,
            'email' => $uEmail,
            'password' => $uPassword
        ));

        echo 'Inscription réussi !';
    }

}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>S'inscrire</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <form id="inscription" method="post">
            <label>Nom :</label>
            <input type="text" name="u_nom" id="u_nom">
            <label>Prenom :</label>
            <input type="text" name="u_prenom" id="u_prenom">
            <label>Age :</label>
            <input type="number" name="u_age" id="u_age">
            <label>Email :</label>
            <input type="email" name="u_email" id="u_email">
            <label>Mot de Passe :</label>
            <input type="password" name="u_password" id="u_password">
            <label>Vérification du mot de passe :</label>
            <input type="password" name="u_verifPassword" id="u_verifPassword">

            <button type="submit" name="inscription">S'inscrire</button>
            <a href="connexion.php">
                <p>Vous êtes déja inscrit ?</p>
            </a>
        </form>
    </body>
</html>
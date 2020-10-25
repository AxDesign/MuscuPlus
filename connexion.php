<?php
include('bdd/db.php');

if(isset($_POST['connexion'])){
    
    $valid = true;

    $uEmail = htmlentities((trim($_POST['u_email'])));
    $uPassword = htmlentities((trim($_POST['u_password'])));

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

    if($valid){
        $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ?');
        $req->execute(array($uEmail));

        while ($donnees = $req->fetch()){
            if($uEmail == $donnees['email'] && $uPassword == $donnees['password']){
                header("location:index.php");
            }
            /*if($donnees['email'] == false){
                echo 'Vous nêtes pas enregisté sur le site !';
            }*/
            if($uEmail == $donnees['email'] && $uPassword != $donnees['password']){
                header("location:connexion.php");
                $errConnexion = 'Votre mot de passe ne correspond pas à l\'adresse email';

            }
        }


    }
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Se Connecter</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <form id="connexion" method="post">
            <label>Email :</label>
            <input type="email" name="u_email" id="u_email">
            <label>Mot de Passe :</label>
            <input type="password" name="u_password" id="u_password">

            <button type="submit" name="connexion">Se Connecter</button>
        </form>
    </body>
</html>
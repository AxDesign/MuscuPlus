<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Se Connecter</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <form id="connexion" method="post">
            <label>Email :</label>
            <input type="email" name="u_email" id="u_email">
            <?php 
                if(isset($errEmailUser)){
                    echo "<div>" . $errEmailUser . "</div>";
                }
            ?>

            <label>Mot de Passe :</label>
            <input type="password" name="u_password" id="u_password">
            <?php 
                if(isset($errPasswordUser)){
                    echo "<div>" . $errPasswordUser . "</div>";
                }
                if(isset($errConnexion)){
                    echo "<div>" . $errConnexion . "</div>";
                }
            ?>

            <button type="submit" name="connexion">Se Connecter</button>

            <a href="inscription.php">
                <p>Vous n'êtes pas encore inscrit ?</p>
            </a>
        </form>
    </body>
</html>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Se Connecter</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
    </head>

    <body id="connexion">
        <form class="box-connexion" method="post">
            <h1>Connexion</h1>
            
            <!-- EMAIL -->
            <div class="text-box">
                <i class="fas fa-user"></i>
                <input type="email" placeholder="Email" name="user_email_connexion">
            </div>
            <?php 
                if(isset($errorEmailUser)){
                    echo "<div class='err'>" . $errorEmailUser . "</div>";
                }
            ?>

            <!-- PASSWORD -->
            <div class="text-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Mot de Passe" name="user_password_connexion">
            </div>
            <?php 
                if(isset($errorPasswordUser)){
                    echo "<div class='err'>" . $errorPasswordUser . "</div>";
                }
                if(isset($errorConnexionUser)){
                    echo "<div class='err'>" . $errorConnexionUser . "</div>";
                }
            ?>

            <!-- SUBMIT BUTTON -->
            <button class="btn-submit" type="submit" name="connexion">Se Connecter</button>

            <a href="inscription.php">
                Vous n'êtes pas encore inscrit ?<br />
            </a>
            <a href="resetPassword.php">
                Vous avez perdu votre mot de passe ?
            </a>
        </form>
    </body>
</html>
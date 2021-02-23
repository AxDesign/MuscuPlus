<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Se Connecter</title>
        
        <!-- Font Adobe -->     <link rel="stylesheet" href="https://use.typekit.net/cmp3lqm.css">

        <!-- CSS -->
        <!--- Mes Styles --->   <link rel="stylesheet" href="css/general.css">

        <!-- JS -->
        <!--- Icones --->       <script defer src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php require_once('view/inc_error_msg_view.php'); ?>
        <section class="connexion">
            <h1>Connexion</h1>
            <form class="connexion__form" method="post">
                
                <?php
                    if(isset($errorConnexionUser)){
                        echo "<div class='error'>" . $errorConnexionUser . "</div>";
                    }
                ?>
                <!-- EMAIL -->
                <div class="text-box">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email" name="user_email_connexion">
                    <?php 
                        if(isset($errorEmailUser)){
                            echo "<div class='error'>" . $errorEmailUser . "</div>";
                        }
                    ?>
                </div>
    
                <!-- PASSWORD -->
                <div class="text-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Mot de Passe" name="user_password_connexion">
                    <?php 
                        if(isset($errorPasswordUser)){
                            echo "<div class='error'>" . $errorPasswordUser . "</div>";
                        }
                    ?>
                </div>
    
                <!-- SUBMIT BUTTON -->
                <div class="footer">
                    <button class="btn-submit" type="submit" name="connexion">Se Connecter</button>
                    
                    <a href="inscription.php">
                        <p>Vous n'êtes pas encore inscrit ?</p>
                    </a>
                    <a href="resetPassword.php">
                        <p>Vous avez perdu votre mot de passe ?</p>
                    </a>
                </div>
            </form>
        </section>
    </body>
</html>
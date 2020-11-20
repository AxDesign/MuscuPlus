<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Récupération de Mot de Passe</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
    </head>

    <body id="connexion">
        <form class="box-connexion" method="post">
            <h1>Récupération de Mot de Passe</h1>
            
            <div class="text-box">
                <i class="fas fa-user"></i>
                <input type="email" placeholder="Email" name="user_email_resetPassword">
            </div>
            <?php 
                if(isset($errorEmailUser)){
                    echo "<div class='err'>" . $errorEmailUser . "</div>";
                }
            ?>

            <button class="btn-submit" type="submit" name="resetPassword">Réinitialisé</button>
        </form>
    </body>
</html>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Récupération de Mot de Passe</title>
        
        <!-- Font Adobe -->     <link rel="stylesheet" href="https://use.typekit.net/cmp3lqm.css">

        <!-- CSS -->
        <!--- Mes Styles --->   <link rel="stylesheet" href="css/general.css">

        <!-- JS -->
        <!--- Icones --->       <script defer src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php require_once('view/inc_error_msg_view.php'); ?>
        <a id="recuperation-btn-back" href="index.php">
            <i class="fas fa-arrow-left btn-back-page"></i>
        </a>
        <section class="recuperation">
            <h2 id="recuperation">Récupération</h2>
            <form class="recuperation__form" method="post">
                <div class="text-box">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email" name="user_email_resetPassword">
                </div>
                <?php 
                if(isset($errorEmailUser)){
                    echo "<div class='error'>" . $errorEmailUser . "</div>";
                }
                ?>

                <div class="footer">
                    <button class="btn-submit" type="submit" name="resetPassword">Réinitialisé</button>
                </div>
            </form>
        </section>
    </body>
</html>
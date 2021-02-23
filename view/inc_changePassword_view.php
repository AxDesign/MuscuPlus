<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Récupération de Mot de Passe</title>
        
        <!-- Font Adobe -->     <link rel="stylesheet" href="https://use.typekit.net/cmp3lqm.css">

        <!-- CSS -->
        <!--- Mes Styles --->   <link rel="stylesheet" href="css/general.css">

        <!-- JS -->
        <!--- Icones --->       <script defer src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
    </head>

    <body id="connexion">
        <?php require_once('view/inc_error_msg_view.php'); ?>
        <form class="box-connexion" method="post">
            <h1>Récupération de Mot de Passe</h1>
            
            <div class="text-box">
                <input type="password" name="newpassword" placeholder="Mot de passe">
            </div>
            <div class="text-box">
                <input type="password" name="verifpassword" placeholder="Confirmation">
            </div>
            <button class="btn-submit" type="submit" name="modifiedPassword">Modifier</button>
        </form>
    </body>
</html>
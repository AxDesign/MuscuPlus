<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        
        <!-- Font Adobe -->     <link rel="stylesheet" href="https://use.typekit.net/cmp3lqm.css">

        <!-- CSS -->
        <!--- Mes Styles --->   <link rel="stylesheet" href="css/general.css">
    </head>

    <body id="confirmation">
        <?php require_once('view/inc_error_msg_view.php'); ?>
        <?php
            if(isset($validAccount)){?>
                <p class='validAccount'><?=$validAccount?></p>
                <p>Veuillez vous reconnectez :)</p>
            <?php }
            if(isset($reValidAccount)){ ?>
                <p class='validAccount'><?=$reValidAccount?></p>
                <p>Veuillez vous reconnectez :)</p>
            <?php }
            if(isset($notValidAccount)){ ?>
                <p class='notValidAccount'><?=$notValidAccount?></p>
                <p>Veuillez vous inscrire :)</p>
            <?php } ?>
        <div class="back">
            <a href="/index.php"><i class="fas fa-chevron-left"></i><span>Retour</span></a>
        </div>
    </body>
</html>
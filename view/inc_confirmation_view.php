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

    <body>
        <?php require_once('view/inc_error_msg_view.php'); ?>
        <section class="confirmation">
            <?php if(isset($validAccount)){?>
                <div class="confirmation__validAccount">
                    <p><?=$validAccount?></p>
                    <p>Veuillez vous reconnectez :)</p>
                </div>
            <?php } if(isset($reValidAccount)){ ?>
                <div class="confirmation__reValidAccount">
                    <p><?=$reValidAccount?></p>
                    <p>Veuillez vous reconnectez :)</p>
                </div>
            <?php } if(isset($notValidAccount)){ ?>
                <div class="confirmation__notValidAccount">
                    <p><?=$notValidAccount?></p>
                    <p>Veuillez vous inscrire :)</p>
                </div>
            <?php } ?>
            <a href="/index.php"><i class="fas fa-chevron-left"></i><span>Retour</span></a>
        </section>
    </body>
</html>
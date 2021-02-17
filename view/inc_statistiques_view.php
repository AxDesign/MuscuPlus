<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/laptop.css">
        <link rel="stylesheet" href="https://use.typekit.net/cmp3lqm.css">
        <script defer src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
        <script defer src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script defer src="js/main.js"></script>
    </head>

    <body id="main">
        <?php require_once('view/inc_error_msg_view.php'); ?>
        <!-- HEADER -->
        <!-- BANDEAU SI UTILISATEUR NON COMFIRMÉ -->
        <?php require_once('view/inc_activation_compte_view.php'); ?>
        <header>
            <a href="main.php">
                <i class="fas fa-arrow-left btn-back-page"></i>
            </a>
            <?php require_once("view/inc_main_header_view.php"); ?>
        </header>


        <!-- MAIN -->
        <section class="main-container">
            
            <!-- STATISTIQUES -->
            <section class="flex-main statistique">
                <?php
                if(isset($activityList)){ ?>
                    <h2>Temps</h2>
                    <canvas id="statTime" width="600" height="300"></canvas>
                    <h2>Temps et Distances</h2>
                    <canvas id="statTimeDist" width="600" height="300"></canvas>
                    <h2>Séries et Répétitions</h2>
                    <canvas id="statRep" width="600" height="300"></canvas>
                    <?php } else { ?>
                <p>Aucune données trouvées pour le moment</p>
                <?php } ?>
            </section>
        </section>
        <?php
            require_once('view/inc_footer_view.php');
        ?>

        <?php require_once("view/inc_main_statistiques_script_view.php") ?>
    </body>
</html>
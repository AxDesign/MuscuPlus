<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        
        <!-- Font Adobe -->     <link rel="stylesheet" href="https://use.typekit.net/cmp3lqm.css">

        <!-- CSS -->
        <!--- Carousel --->     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
        <!--- Mes Styles --->   <link rel="stylesheet" href="css/general.css">

        <!-- JS -->
        <!--- Icones --->       <script defer src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
        <!--- Statistiques ---> <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
        <!--- Jquery --->       <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!--- Vue.js --->       <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <!--- Mes Scripts --->  <script defer src="js/main.js"></script>
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

        <?php
        require_once("view/inc_main_statistiques_script_view.php");
        // NAV BAR
        require_once('view/inc_nav_bar_view.php');
        require_once('view/inc_footer_view.php');
        ?>
    </body>
</html>
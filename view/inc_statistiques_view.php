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
        <!--- Mes Scripts --->  <script defer src="js/main.js"></script>
    </head>

    <body id="main">
        <?php require_once('view/inc_error_msg_view.php'); ?>
        <!-- HEADER -->
        <!-- BANDEAU SI UTILISATEUR NON COMFIRMÉ -->
        <?php require_once('view/inc_activation_compte_view.php'); ?>
        <header>
            <?php require_once("view/inc_main_header_view.php"); ?>
        </header>


        <!-- MAIN -->
        <section class="statistiques">
            
            <!-- STATISTIQUES -->
            <section class="statistiques__section">
                <section class="statistiques__section__time">
                    <h2>Temps</h2>
                    <?php if(isset($activityList)){ ?>
                        <canvas id="statTime" width="16" height="11"></canvas>
                    <?php } else { ?>
                        <p class="none-data">Aucune donnée disponible</p>
                    <?php } ?>
                </section>
                <section class="statistiques__section__distance">
                    <h2>Temps et Distances</h2>
                    <?php if(isset($activityList)){ ?>
                        <canvas id="statTimeDist" width="16" height="11"></canvas>
                    <?php } else { ?>
                        <p class="none-data">Aucune donnée disponible</p>
                    <?php } ?>
                </section>
                <section class="statistiques__section__repetition">
                    <h2>Séries et Répétitions</h2>
                    <?php if(isset($activityList)){ ?>
                        <canvas id="statRep" width="16" height="11"></canvas>
                    <?php } else { ?>
                        <p class="none-data">Aucune donnée disponible</p>
                    <?php } ?>
                </section>
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
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
        <!--- Carousel --->     <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>
        <!--- Mes Scripts --->  <script defer src="js/main.js"></script>
    </head>

    <body>
        <?php require_once('view/inc_error_msg_view.php'); ?>
        <!-- HEADER -->
        <!-- BANDEAU SI UTILISATEUR NON COMFIRMÉ -->
        <?php require_once('view/inc_activation_compte_view.php'); ?>
        <header>
            <?php require_once("view/inc_main_header_view.php"); ?>
        </header>


        <!-- MAIN -->
        <section class="home">

            
            <!-- ACTIVITY -->
            <section class="home__section-activity">
                <h2>Mes activitées</h2>
                <!-- owl-carousel -->
                <div class='home__section-activity__carousel owl-carousel'>
                    <?php
                    if(isset($activityList)){
                        foreach($activityList as $activity){?>
                            <!-- activity -->
                            <div class='home__section-activity__carousel__tab'>
                                <a href="exercise.php?activityId=<?=$activity['id_activity']?>&activityName=<?=$activity['name']?>">
                                    <?=$activity['name']?>
                                </a>
                                <!-- Icone Delete activity -->
                                <a class="home__section-activity__carousel__tab__trash" href="main.php?activityIdDelete=<?=$activity['id_activity']?>&activityNameDelete=<?=$activity['name']?>">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                            <?php } 
                    } ?>
                </div>
                <?php if(!isset($activityList)){ ?>
                    <p class="none-data">Aucune activitée crée pour le moment</p>
                <?php } ?>
            </section>
            <!-- CREATION RAPIDE D'EXERCICES -->
            <?php if(isset($activityList)){ ?>
            <section class="home__section-exercise">
                <h2>Créer un exercice</h2>
                <form class="home__section-exercise__form" id="home__section-exercise__form">
                    <!-- activity -->
                    <div class="home__section-exercise__form__checkbox">
                        <div class="home__section-exercise__form__checkbox__recall">
                            <label for="">Créer un rappel : </label>
                            <input type="checkbox" name="recall" id="recall" onclick="RecallChecked()">
                        </div>
                        <div class="home__section-exercise__form__checkbox__time">
                            <label for="isTime">Temps : </label>
                            <input type="checkbox" name="isTime" id="isTime" onclick="TimeIsChecked()">
                        </div>
                        <div class="home__section-exercise__form__checkbox__distance">
                            <label>Temps et Distances : </label>
                            <input type="checkbox" name="isDistanceAndTime" id="isDistanceAndTime" onclick="TimeAndDistanceIsChecked()">
                        </div>
                    </div>
                    <select name="activityList" id="activityList">
                        <?php
                        if(isset($activityList)){
                            foreach($activityList as $activity){?>
                                <option value=<?=$activity['id_activity']?>><?=$activity['name']?></option>
                        <?php }
                        }?>
                    </select>
                    <div class="home__section-exercise__form__input">
                        <input class="inputFastExo" type="text" name="exerciseName" id="exerciseName" placeholder="Nom de l'exercice" autocomplete="off">
                        <input class="inputFastExo" type="number" name="exerciseSeries" id="exerciseSeries" placeholder="Nombres de séries">
                        <input class="inputFastExo" type="number" name="exerciseRepetitions" id="exerciseRepetitions" placeholder="Nombres de Répétitions">
                        <input class="inputFastExo hidden" type="number" name="exerciseTime" id="exerciseTime" placeholder="Durée de l'exercice">
                        <input class="inputFastExo hidden" type="number" name="exerciseDistance" id="exerciseDistance" placeholder="Distance">
                        <input class="inputFastExo hidden" type="date" name="recallDate" id="recallDate">
                        <input class="inputFastExo hidden" type="time" name="recallTime" id="recallTime">
                    </div>
                    <button type="submit">Créer</button>
                    <div class="send-exercise-succes hidden">
                        <div class="send-exercise-succes__content">
                            <i class="fas fa-arrow-left btn-back-page" onclick="ClosePopUpExercice()"></i>
                            <p>Votre exercice à bien était enregistré</p>
                        </div>
                    </div>
                </form>

            </section>
            <?php } ?>
            
            <!-- STATISTIQUES -->
            <section class="home__section-statistiques">
                <h2>Mes statistiques</h2>
                <?php
                if(isset($activityList)){ ?>
                    <canvas class="home__section-statistiques__time" id="statTime" width="16" height="11"></canvas>
                    <?php } else { ?>
                    <p class="none-data">Aucune données trouvées pour le moment</p>
                <?php } ?>
            </section>
        </section>
        
        <!-- POP-UP NEW ACTIVITY -->
        <section class="pop-up">
            <div class="pop-up__content">
                <div class="pop-up__content__header">
                    <i class="fas fa-arrow-left btn-back" onclick="ClosePopUp()"></i>
                </div>
                <div class="pop-up__content__main">
                    <h2>Créer une nouvelle activitée</h2>
                    <form action="createActivity.php" method="post">
                        <input type="text" name="activity-name" class="activity-name" placeholder="Nom de l'activité" autocomplete="off">
                        <button type="submit">Créer</button>
                    </form>
                </div>
            </div>
        </section>
        
        <?php
        require_once("view/inc_main_statistiques_script_view.php");
        // NAV BAR
        require_once('view/inc_nav_bar_view.php');
        require_once('view/inc_footer_view.php');
        ?>
    </body>
</html>
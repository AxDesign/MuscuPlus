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
        <section class="exercise">

            <!-- EXERCICES -->
            <section class="exercise__section">
                <h2>Mes Exercices</h2>
                <div class="exercise__section__container">
                    <?php
                    if(isset($exoList)){
                        $exerciseNumber = 1;
                        foreach($exoList as $exo){?>

                            <div class="exercise__section__container__tab">
                                <div class="exercise__section__container__tab__number">
                                    <p><?=$exerciseNumber?></p>
                                </div>
                                <div class="exercise__section__container__tab__main">
                                    <p>
                                        <?=$exo['exoName']?>
                                    </p>
                                    <p>
                                        <?php if($exo['exoTime'] == 0 && $exo['exoDistance'] == 0){?>
                                            <?=$exo['exoSeries']?> x <?=$exo['exoRepetitions']?> répétitions.
                                        <?php } if($exo['exoTime'] >= 1 && $exo['exoDistance'] == 0) { ?>
                                            <?=$exo['exoTime']?> min.
                                        <?php } if($exo['exoTime'] >= 1 && $exo['exoDistance'] >= 1) { ?>
                                            <?=$exo['exoDistance']?> km en <?=$exo['exoTime']?> min.
                                        <?php } ?>
                                    </p>
                                </div>
                                <div class="exercise__section__container__tab__icones">
                                    <a href="exercise.php?exerciseIdDelete=<?=$exo['idExo']?>&activityId=<?=$activityId?>&activityName=<?=$activityName?>">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                    <?php $exerciseNumber++;
                        }
                    } else { ?>
                        <p class="none-data">Aucune donnée trouvée pour le moment</p> <?php
                    } ?>
                </div>
            </section>
        </section>
        
        <!-- POP-UP NEW ACTIVITY -->
        <section class="pop-up">
            <div class="pop-up__content">
                <div class="pop-up__content__header">
                    <i class="fas fa-arrow-left btn-back" onclick="ClosePopUp()"></i>
                </div>
                <div class="pop-up__content__main">
                    <h2>Créer un exercice</h2>
                    <form class="pop-up__content__main__form" id="createExerciseForm">
                        <div class="pop-up__content__main__form__checkbox">
                            <div class="pop-up__content__main__form__checkbox__time">
                                <label>Temps : </label>
                                <input type="checkbox" name="isTime" id="isTime" onclick="TimeIsChecked()"><br />
                            </div>
                            <div class="pop-up__content__main__form__checkbox__distance">
                                <label>Temps et Distances : </label>
                                <input type="checkbox" name="isDistanceAndTime" id="isDistanceAndTime" onclick="TimeAndDistanceIsChecked()"><br />
                            </div>
                        </div>

                        <input type="hidden" name="activityId" value=<?=$activityId?>>
                        <input class="inputFastExo" type="text" name="exerciseName" id="exerciseName" placeholder="Nom de l'exercice">
                        <input class="inputFastExo" type="number" name="exerciseSeries" id="exerciseSeries" placeholder="Nombres de séries">
                        <input class="inputFastExo" type="number" name="exerciseRepetitions" id="exerciseRepetitions" placeholder="Nombres de Répétitions">
                        <input class="exerciseHidden inputFastExo" type="number" name="exerciseTime" id="exerciseTime" placeholder="Durée de l'exercice">
                        <input class="exerciseHidden inputFastExo" type="number" name="exerciseDistance" id="exerciseDistance" placeholder="Distance"><br />
                        <button type="submit">Créer</button>
                    </form>
                </div>
            </div>
        </section>

        <?php
        //NAV BAR
        require_once('view/inc_nav_bar_view.php');
        require_once('view/inc_footer_view.php');
        ?>
    </body>
</html>
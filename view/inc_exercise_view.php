<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="https://use.typekit.net/cmp3lqm.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/laptop.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
        <script defer src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>
        <script defer src="js/main.js"></script>
    </head>

    <body id="main">
        <!-- HEADER -->
        <header>
            <a href="main.php">
                <i class="fas fa-arrow-left btn-back-page"></i>
            </a>
            <?php require_once("view/inc_main_header_view.php"); ?>
        </header>

        <!-- BANDEAU SI UTILISATEUR NON COMFIRMÉ -->
        <?php
            if($_SESSION['confirmAccount'] == 0){ ?>
                <section class="no-confirm-account">
                    <p>Veillez activé votre compte !</p>
                </section>
            <?php } ?>

        <!-- MAIN -->
        <section class="main-container">

            <!-- EXERCICES -->
            <section class="flex-exercise exercise">
                <h2>Mes Exercices</h2>
                <div class="exercise-container">
                    <?php
                    if(isset($exoList)){
                        $exerciseNumber = 1;
                        foreach($exoList as $exo){?>

                            <div class="exercise-tab">
                                <div class="exerciseNumber">
                                    <p><?=$exerciseNumber?></p>
                                </div>
                                <div class="exercise-tab-main">
                                    <p>
                                        <?=$exo['exoName']?>
                                    </p>
                                    <p>
                                        <?php
                                        if($exo['exoTime'] == 0){?>
                                            <?=$exo['exoSeries']?> x <?=$exo['exoRepetitions']?> répétitions.
                                        <?php } else { ?>
                                            <?=$exo['exoSeries']?> x <?=$exo['exoTime']?> min.
                                        <?php } ?>
                                    </p>
                                </div>
                                <div class="exercise-icone">
                                    <a href="exercise.php?exerciseIdDelete=<?=$exo['idExo']?>&activityId=<?=$activityId?>&activityName=<?=$activityName?>">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                    <?php $exerciseNumber++;
                        }
                    } else { ?>
                        <p>Aucune donnée trouvée pour le moment</p> <?php
                    } ?>
                </div>
            </section>
        </section>
        
        <!-- POP-UP NEW ACTIVITY -->
        <section class="pop-up">
            <div class="content-pop">
                <div class="header-pop">
                    <i class="fas fa-arrow-left btn-back" onclick="ClosePopUp()"></i>
                </div>
                <div class="pop-up-main">
                    <h2>Créer un nouvel exercice</h2>
                    <form id="createExerciseForm">
                        <input type="hidden" name="activityId" id="activityId" value="<?=$activityId?>">
                        <input type="text" name="exerciseName" id="exerciseName" placeholder="Nom de l'exercice">
                        <input type="number" name="exerciseSeries" id="exerciseSeries" placeholder="Nombres de séries">
                        <input class="exerciseTimeDisplay" type="number" name="exerciseRepetitions" id="exerciseRepetitions" placeholder="Nombres de Répétitions">
                        <input class="exerciseTimeHidden" type="number" name="exerciseTime" id="exerciseTime" placeholder="Durée de l'exercice"><br />
                        <input type="checkbox" name="isTime" id="isTime" onclick="IsChecked()"><br />
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
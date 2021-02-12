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
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
        <script defer src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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

            <!-- PROGRAMMES -->
            <section class="flex-program program">
                <h2>Mes Programmes</h2>
                <div class='program-container'>
                    <?php
                    if(isset($programList)){
                        $programNumber = 1;
                        foreach($programList as $program){?>
                            <div class="program-tab">
                                <div class="programNumber">
                                    <p><?=$programNumber?></p>
                                </div>
                                <div class="program-tab-main">
                                    <p>
                                        <?=$program['programName']?>
                                    </p>
                                        <?php $numberExercise = CountExercises($program['programId']) ?>
                                    <p>
                                        <?= $numberExercise ?> Exercices
                                    </p>
                                </div>
                                <div class="program-icone">
                                    <a href="exercise.php?activityId=<?=$activityId?>&activityName=<?=$activityName?>&programId=<?=$program['programId']?>&programName=<?=$program['programName']?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fas fa-play"></i>
                                    </a>
                                    <a href="activity.php?activityId=<?=$activityId?>&activityName=<?=$activityName?>&programIdDelete=<?=$program['programId']?>">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                    <?php   $programNumber++;
                        }
                    } else { ?>
                        <p>Aucune donnée trouvée pour le moment</p> <?php
                    } ?>
                </div>
            </section>
        </section>

        <?php
            require_once('view/inc_footer_view.php');
        ?>
        <i class="fas fa-plus btn-create" onclick="DisplayPopUp()"></i>
        
        <!-- POP-UP NEW ACTIVITY -->
        <section class="pop-up">
            <div class="content-pop">
                <div class="header-pop">
                    <i class="fas fa-arrow-left btn-back" onclick="ClosePopUp()"></i>
                </div>
                <div class="pop-up-main">
                    <h2>Créer un nouveau programme</h2>
                    <form id="createProgramForm">
                        <input type="hidden" name="activityId" value="<?=$activityId?>">
                        <input type="hidden" name="activityName" value="<?=$activityName?>">
                        <input type="text" name="programName" id="programName" placeholder="Nom du programme">
                        <button type="submit">Créer</button>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
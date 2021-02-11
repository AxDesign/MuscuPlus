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
        <!-- HEADER -->
        <header>
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

            <section>
                <form id="createFastExercise">
                    <!-- activity -->
                    <select name="activityList" id="activityList">
                        <?php
                        if(isset($activityList)){
                            foreach($activityList as $activity){?>
                                <option value=<?=$activity['id_activity']?>><?=$activity['name']?></option>
                        <?php }
                        }?>
                    </select>
                    <button type="button" onclick="DisplayPopUpHomeActivity()">+</button>

                    <!-- program -->
                    <select name="programList" id="programList">
                        <?php
                        if(isset($programList)){
                            foreach($programList as $program){?>
                                <option value=<?=$program['programId']?>><?=$program['programName']?></option>
                        <?php }
                        }?>
                    </select>
                    <button type="button" onclick="DisplayPopUpHomeProgram()">+</button>

                    <input type="text" name="exerciseName" id="exerciseName" placeholder="Nom de l'exercice">
                    <input type="number" name="exerciseSeries" id="exerciseSeries" placeholder="Nombres de séries">
                    <input class="exerciseTimeDisplay" type="number" name="exerciseRepetitions" id="exerciseRepetitions" placeholder="Nombres de Répétitions">
                    <input class="exerciseTimeHidden" type="number" name="exerciseTime" id="exerciseTime" placeholder="Durée de l'exercice">
                    <input type="checkbox" name="isTime" id="isTime" onclick="IsChecked()">
                    <button type="submit">Créer</button>
                </form>

                <section class="popUpActivity">
                        <p>Créer une nouvelle activitée</p>
                        <form action="createActivity.php" method="post">
                            <label>Nom: </label>
                            <input type="text" name="activity-name" class="activity-name">
                            <button type="submit">Créer</button>
                        </form>
                        <button type="button" onclick="ClosePopUpHomeActivity()">Retour</button>
                </section>

                <section class="popUpProgram">
                        <p>Créer un nouveau programme dans <span id="activitySelected"></span></p>
                        <form id="createFastProgram">
                            <label>Nom: </label>
                            <input type="text" name="program-name" class="program-name">
                            <button type="submit">Créer</button>
                        </form>
                        <button type="button" onclick="ClosePopUpHomeProgram()">Retour</button>
                </section>

            </section>

            <!-- ACTIVITY -->
            <section class="flex-main activity">
                <h2>Mes activitées</h2>
                <div class='activity-tabs'>
                    <?php
                    if(isset($activityList)){
                        foreach($activityList as $activity){?>
                            <!-- activity -->
                            <div class='activity-tab'>
                                <a href="activity.php?activityId=<?=$activity['id_activity']?>&activityName=<?=$activity['name']?>">
                                    <?=$activity['name']?>
                                </a>
                                <!-- Icone Delete activity -->
                                <a class="trash-activity" href="main.php?activityIdDelete=<?=$activity['id_activity']?>&activityNameDelete=<?=$activity['name']?>">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                            <?php } 
                    } else { ?>
                    <p>Aucune activitée crée pour le moment</p>
                    <?php } ?>
                </div>
            </section>
            
            <!-- STATISTIQUES -->
            <section class="flex-main statistique">
                <?php
                if(isset($activityList)){ ?>
                    <a href="statistiques.php">
                        <h2>Mes statistiques</h2>
                    </a>
                    <canvas id="graph1" width="600" height="300"></canvas>
                    <?php } else { ?>
                <h2>Mes statistiques</h2>
                <p>Aucune données trouvées pour le moment</p>
                <?php } ?>
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
                    <h2>Créer une nouvelle activitée</h2>
                    <form action="createActivity.php" method="post">
                        <label>Nom: </label>
                        <input type="text" name="activity-name" class="activity-name">
                        <button type="submit">Créer</button>
                    </form>
                </div>
            </div>
        </section>

        <?php require_once("view/inc_main_statistiques_script_view.php") ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="../css/style.css"><link rel="stylesheet" href="https://use.typekit.net/cmp3lqm.css">
        <script defer src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
        <script defer src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script defer src="js/main.js"></script>
    </head>

    <body id="main">
        <!-- HEADER -->
        <?php require_once("view/inc_main_header_view.php"); ?>

        <!-- BANDEAU SI UTILISATEUR NON COMFIRMÉ -->
        <?php
            if($_SESSION['confirmAccount'] == 0){ ?>
                <section class="no-confirm-account">
                    <p>Veillez activé votre compte !</p>
                </section>
            <?php } ?>

            <!-- MAIN -->
            <section class="main-container">
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
                        <p class="p1">Aucune activitée crée pour le moment</p>
                        <?php } ?>
                    </div>
                </section>
                
                <!-- STATISTIQUES -->
            <section class="flex-main statistique">
                <h2>Mes statistiques</h2>
                <p>Aucune donnée trouvée pour le moment</p>
            </section>

            <i class="fas fa-plus" onclick="DisplayPopUp()"></i>
        
            <!-- POP-UP NEW ACTIVITY -->
            <section class="pop-up">
                <i class="fas fa-arrow-left" onclick="ClosePopUp()"></i>
                <h2>Créer une nouvelle activitée</h2>
                <form action="createActivity.php" method="post">
                    <label>Nom: </label>
                    <input type="text" name="activity-name" id="activity-name">
                    <button type="submit">Créer</button>
                </form>
            </section>
        </section>
    </body>
</html>
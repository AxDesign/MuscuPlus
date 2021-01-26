<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
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

            <!-- STATISTIQUES -->
            <section class="flex-main statistique">
                <h2>Mes statistiques</h2>
                <p>Aucune donnée trouvée pour le moment</p>
            </section>

            <!-- LAST TRAINING -->
            <section class="flex-main last-training">
                <h2>Mon dernier entrainement</h2>
                <p class="p2">Aucun entrainement fait pour le moment</p>
            </section>

            <!-- ACTIVITY -->
            <section class="flex-main activity">
                <h2>Mes activitées</h2>
                <?php
                if(isset($activityList)){
                    foreach($activityList as $activity){?>
                        <p><?=$activity['name']?></p>
                <?php } 
                } else { ?>
                <p class="p1">Aucune activitée crée pour le moment</p>
                <?php } ?>
                <i class="fas fa-plus" onclick="DisplayActivityPopUp()"></i>
            </section>
        
            <!-- POP-UP NEW ACTIVITY -->
            <section class="pop-up_activity">
                <i class="fas fa-arrow-left" onclick="CloseActivityPopUp()"></i>
                <h2>Créer une nouvelle activitée</h2>
                <form action="createActivity.php" method="post">
                    <label>Nom: </label>
                    <input type="text" name="activity-name" id="activity-name">
                    <button type="submit">Créer</button>
                </form>
            </section>
        </section>

        <script src="js/main.js"></script>
    </body>
</html>
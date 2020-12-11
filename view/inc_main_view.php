<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
    </head>

    <body id="main">
        <?php require_once("view/inc_main_header_view.php"); ?>
        <?php
            if($_SESSION['confirmAccount'] == 0){
                    echo '<section class="no-confirm-account">';
                    echo "<p>Veillez activé votre compte !</p>";
                    echo '</section>';
                }
            ?>
        <section class="main-container">
            <section class="flex-main statistique">
                <?php require_once('view/inc_main_statistiques.php'); ?>
                <!-- <p>Aucune données trouvées pour le moment</p> -->
            </section>
            
            <section class="flex-main last-training">
                <h2>Mon dernier entrainement</h2>
                <p class="p2">Aucun entrainement faire pour le moment</p>
            </section>

            <section class="flex-main activity">
                <h2>Mes activitées</h2>

                <?php
                    if(isset($_POST['create-activity-name'])){
                        include_once('view/inc_newActivityName_view.php');
                    }

                    if(isset($activityList)){
                        foreach($activityList as $activity){?>

                            <form class="iconeBinActivity" action='deleteActivity.php?nameActivityDelete=<?=$activity['name']?>' method="post">
                                <a href='activity.php?exerciseActivity=<?=$activity['name']?>'><p><?=$activity['name']?></p></a>
                                <button type="submit" name="deleteActivity">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        <?php }
                    }else{?>
                        <?php echo '<p class="p1">Aucune activitées crée pour le moment</p>'; ?><?php
                    }
                ?>

                <form action="newActivityName.php" method="post">
                    <button type="submit" class="btn-create-activity" name="create-activity-name">
                        <i class="fas fa-plus-square"></i>
                    </button>
                </form>

            </section>

        </section>
        <footer>
            <nav class="right-column">
                <a href="index.php" class="btn-logout">Déconnexion</a>
                <a href="profil.php">
                    <i class="fas fa-cog"></i>
                </a>
            </nav>
        </footer>

        <?php require_once('view/inc_main_statistiques_script_view.php') ?>
        <!-- <script type="text/javascript" src="/main_statistiques.js"></script> -->
    </body>
</html>
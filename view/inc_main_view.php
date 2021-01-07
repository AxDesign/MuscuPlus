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
            <?php
                if(isset($activityList)){
                     require_once('view/inc_main_statistiques.php');
                } else { ?>
                <p>Aucune données trouvées pour le moment</p>
                <?php } ?>
            </section>
            
            <!-- LAST TRAINING -->
            <section class="flex-main last-training">
                <h2>Mon dernier entrainement</h2>
                <table>
                    <tr>
                        <th>Activité</th>
                        <th>Nom</th>
                        <th>Nombres de Séries</th>
                        <th>Nombres de Répétitions</th>
                        <th>Temps</th>
                    </tr>
                    <tr>
                        <td><?=$donneeLastTraining['activity']?></td>
                        <td><?=$donneeLastTraining['name']?></td>
                        <td><?=$donneeLastTraining['numberSeries']?></td>
                        <td><?=$donneeLastTraining['numberRepetition']?></td>
                        <td><?=$donneeLastTraining['time']?></td>
                    </tr>
                </table>
                <!-- <p class="p2">Aucun entrainement faire pour le moment</p> -->
            </section>

            <!-- ACTIVITY -->
            <section class="flex-main activity">
                <h2>Mes activitées</h2>

                <?php
                    if(isset($_POST['create-activity-name'])){
                        include_once('view/inc_newActivityName_view.php');
                    }

                    if(isset($activityList)){
                        foreach($activityList as $activity){?>
                            <!-- ICONE DE SUPPRESSION DES ACTIVITÉES -->
                            <form class="iconeTrashActivity" action='deleteActivity.php?nameActivityDelete=<?=$activity['name']?>&idActivityDelete=<?=$activity['id']?>' method="post">
                                <a href='activity.php?exerciseActivity=<?=$activity['id']?>'>
                                    <p><?=$activity['name']?></p>
                                </a>
                                <button type="submit" name="deleteActivity">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        <?php }
                    }
                    if(isset($activityList) || isset($_POST['create-activity-name'])){
                        //Si une activité existe ou que le bouton de création d'activité à étais appuyé, ne rien afficher
                        } else {?>
                            <p class="p1">Aucune activitées crée pour le moment</p>
                    <?php } ?>

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
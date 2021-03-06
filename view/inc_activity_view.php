<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
    </head>

    <body id="activity">
        <?php require_once("view/inc_main_header_view.php"); ?>

        <section class="activity-container">
            <section class="flex-activity exercice">
                <h2>Mes Exercices de <?=$activity?></h2>
                <?php
                if(isset($exerciceList)){ ?>
                    <table>
                        <tr>
                            <th>Nom</th>
                            <th>Nombres de Séries</th>
                            <th>Nombres de Répétition</th>
                            <th>Temps</th>
                        </tr>
                <?php } ?>
                <?php
                    
                    //Afficher les exercice depuis la base de données
                    if(isset($exerciceList)){
                        foreach($exerciceList as $exercice){ ?>
                            <!-- ICONE DE SUPPRESSION DES EXERCICE -->
                            <form class="iconeTrashExercice" action='deleteExercice.php?nameActivity=<?=$activity?>&nameExerciceDelete=<?=$exercice['name']?>&idExerciceDelete=<?=$exercice['id_exo']?>' method="post">
                                    <tr>
                                        <td><?=$exercice['name']?></td>
                                        <td><?=$exercice['numberSeries']?></td>
                                        <td><?=$exercice['numberRepetition']?></td>
                                        <td><?=$exercice['time']?></td>
                                        <td class='btn-suppr'>
                                            <button type="submit" name="deleteExercice">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </form>
                                <?php }
                    } ?>
                    </table>
                    <?php
                    if(isset($exerciceList) || isset($_POST['create-exercice'])) {
                        //Si un exercice existe ou que le bouton de création d'exercice à étais appuyé, ne rien afficher
                    } else{ ?>
                        <p class="p2">Aucun exercice créé pour le moment</p>
                    <?php }
                        
                    //Créer un nouvel exercice
                    if(isset($_POST['create-exercice'])){
                        include_once('view/inc_newExercice_view.php');
                    }
                    ?>
                <!-- BOUTTON DE CRÉATION D'EXERCICES -->
                <form action="newExercice.php?exercise=<?=$activity?>" method="post">
                    <button type="submit" class="btn-create-exercice" name="create-exercice">
                        <i class="fas fa-plus-square create-exercice"></i>
                    </button>
                </form>
            </section>
        </section>
    </body>
</html>
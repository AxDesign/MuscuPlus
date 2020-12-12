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
                    
                    //Afficher les exercice depuis la base de données
                    if(isset($exerciceList)){
                        foreach($exerciceList as $exercice){ ?>
                            <p><?=date('D d F H:i:s', $exercice['date'])?> <?=$exercice['name']?> <?=$exercice['numberSeries']?> <?=$exercice['numberRepetition']?> <?=$exercice['time']?></p>
                            <?php }
                    }else {?>
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
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <script defer src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
        <script defer src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script defer src="js/main.js"></script>
    </head>

    <body id="main">
        <!-- HEADER -->
        <header>
            <a href="activity.php?activityId=<?=$_GET['activityId']?>&activityName=<?=$_GET['activityName']?>">
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
                        foreach($exoList as $exo){?>
                            <p><?=$exo['exoName']?></p>
                    <?php }
                    } else { ?>
                        <p>Aucune donnée trouvée pour le moment</p> <?php
                    } ?>
                </div>
            </section>
                <i class="fas fa-plus btn-create" onclick="DisplayPopUp()"></i>
        </section>
        
        <!-- POP-UP NEW ACTIVITY -->
        <section class="pop-up">
            <div class="content-pop">
                <div class="header-pop">
                    <i class="fas fa-arrow-left btn-back" onclick="ClosePopUp()"></i>
                    <h2>Créer un nouvel exercice</h2>
                </div>
                <form id="createExerciseForm">
                    <label>Nom: </label>
                    <input type="hidden" name="activityId" id="activityId" value="<?=$activityId?>">
                    <input type="hidden" name="programId" id="programId" value="<?=$programId?>">
                    <input type="text" name="exerciseName" id="exerciseName">
                    <button type="submit">Créer</button>
                </form>
            </div>
        </section>
    </body>
</html>
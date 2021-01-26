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

            <!-- PROGRAMMES -->
            <section class="flex-main statistique">
                <h2>Mes Programmes</h2>
                <p>Aucune donnée trouvée pour le moment</p>
                <i class="fas fa-plus" onclick="DisplayPopUp()"></i>
            </section>
        
            <!-- POP-UP NEW PROGRAM -->
            <section class="pop-up">
                <i class="fas fa-arrow-left" onclick="ClosePopUp()"></i>
                <h2>Créer un nouveau programme</h2>
                <form action="createProgram.php" method="post">
                    <label>Nom: </label>
                    <input type="text" name="program-name" id="program-name">
                    <button type="submit">Créer</button>
                </form>
            </section>
        </section>
        
        <script src="js/main.js"></script>
    </body>
</html>
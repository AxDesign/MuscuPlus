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

    <body id="main">
        <header>
            <nav class="left-column">
                 <h1>Bonjour <?=$_SESSION['name']?></h1>
            </nav>
            <nav class="right-column">
                <a href="index.php" class="btn-logout">Déconnexion</a>
                <a href="profil.php">
                    <i class="fas fa-cog"></i>
                </a>
            </nav>
        </header>
        <section class="main-container">
            <section class="flex-main statistique">
                <h2>Mes statistiques</h2>
                <p>Aucune données trouvées pour le moment</p>
            </section>
            
            <section class="flex-main last-training">
                <h2>Mon dernier entrainement</h2>
                <p class="p2">Aucun entrainement faire pour le moment</p>
                <i class="fas fa-plus-square create-training"></i>
            </section>

            <section class="flex-main activity">
                <h2>Mes activitées</h2>
                <p class="p1">Aucune activitées crée pour le moment</p>
                <form id="new-activity" method="post">
                    <input type="text" name="new-activity-name" placeholder="Nom de la nouvelle activée">
                    <button type="submit" name="btn-new-activity">Créer</button>
                </form>
                <i class="fas fa-plus-square btn-create-activity"></i>
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

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>
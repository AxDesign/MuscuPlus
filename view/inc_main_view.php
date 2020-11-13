<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <?php echo "<h1>Bonjour " . $_SESSION['name'] . "</h1>"; ?>
        <form id="index" method="post">
            <label>Combien de temps vous êtes vous entraîner ?<br /></label>
            <input type="text" maxlength="5" minlength="1" name="tempsSport" id="tempsSport">
            <label>min</label><br />
            <button type="submit">Valider</button>
            <button type="submit" name="allTime">Voir tous mes temps</button>
            <button>Créé un programme</button>
        </form>

        <a href="dashboard.php">
            <p>Dashboard</p>
        </a>
    </body>
</html>
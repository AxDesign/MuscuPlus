<?php
include('bdd/db.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
    </head>

    <body>
        <form action="index.php" method="get">
            <label>Combien de temps vous êtes vous entraîner ?<br /></label>
            <input type="text" maxlength="5" minlength="1" name="tempsSport" id="tempsSport">
            <label>min</label><br />
            <button type="submit">Valider</button>
            <button type="submit" name="allTime">Voir tous mes temps</button>
            <button>Créé un programme</button>
        </form>
            <?php
            
                if(isset($_GET['tempsSport']) && $_GET['tempsSport'] != NULL && is_numeric($_GET['tempsSport'])){
                    $req = $bdd->prepare('INSERT INTO entrainements(temps_entrainement) VALUES(?)');
                    $req->execute(array($_GET['tempsSport']));

                    echo 'Le temps a bien étais ajouté ! <br />';
                    echo "Temps d'entraînement : " . $_GET['tempsSport'] . " min <br />";
                }

                if(isset($_GET['allTime'])){
                    $req = $bdd->query('SELECT * FROM entrainements');
                    while ($donnees = $req->fetch()){
                    ?>
                        <p>
                            <?php
                                echo "Entraînement n°" . $donnees['id'];
                                echo " " . $donnees['temps_entrainement'] . " min";
                            ?>
                        </p>
                    <?php
                    }
                }
            ?>
    </body>
</html>
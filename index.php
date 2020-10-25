<?php
include('bdd/db.php');
            
if(isset($_POST['tempsSport']) && $_POST['tempsSport'] != NULL && is_numeric($_POST['tempsSport'])){
    $req = $bdd->prepare('INSERT INTO entrainements(temps_entrainement) VALUES(?)');
    $req->execute(array($_POST['tempsSport']));

    echo 'Le temps a bien étais ajouté ! <br />';
    echo "Temps d'entraînement : " . $_POST['tempsSport'] . " min <br />";
}

if(isset($_POST['allTime'])){
    $req = $bdd->query('SELECT * FROM entrainements');
    while ($donnees = $req->fetch()){
        echo "Entraînement n°" . $donnees['id'];
        echo " " . $donnees['temps_entrainement'] . " min <br />";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <form id="index" method="post">
            <label>Combien de temps vous êtes vous entraîner ?<br /></label>
            <input type="text" maxlength="5" minlength="1" name="tempsSport" id="tempsSport">
            <label>min</label><br />
            <button type="submit">Valider</button>
            <button type="submit" name="allTime">Voir tous mes temps</button>
            <button>Créé un programme</button>
        </form>
    </body>
</html>
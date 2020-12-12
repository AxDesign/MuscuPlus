<?php
//Supprime l'exercice séléectionné
if(isset($_POST['deleteExercice'])){
    global $exerciceDelete;
    $req = $bdd->prepare('DELETE FROM exercices WHERE id_user = :userId AND name = :exerciceName');
    $req->execute(array(
        'userId' => $_SESSION['id'],
        'exerciceName' => $exerciceDelete
    ));
}
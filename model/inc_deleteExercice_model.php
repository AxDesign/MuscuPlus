<?php
//Supprime l'exercice séléectionné
if(isset($_POST['deleteExercice'])){
    global $exerciceDelete;
    $req = $bdd->prepare('DELETE FROM exercices WHERE id_user = :userId AND name = :exerciceName AND id_exo = :idExo');
    $req->execute(array(
        'userId' => $_SESSION['id'],
        'exerciceName' => $exerciceDelete,
        'idExo' => $idExerciceDelete
    ));
}
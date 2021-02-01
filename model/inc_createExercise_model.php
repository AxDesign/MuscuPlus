<?php
function CreateProgram(){
    global $bdd,
            $idActivity,
            $idProgram,
            $exerciseName;

    $req = $bdd->prepare('INSERT INTO exercise(id_user, id_activity, id_program, name) VALUES(:idUser, :idActivity, :idProgram, :exerciseName)');
    $req->execute(array(
        'idUser' => $_SESSION['id'],
        'idActivity' => $idActivity,
        'idProgram' => $idProgram,
        'exerciseName' => $exerciseName
    ));
}
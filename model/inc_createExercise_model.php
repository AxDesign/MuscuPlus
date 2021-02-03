<?php
function CreateProgram(){
    global $bdd,
            $idActivity,
            $idProgram,
            $exerciseName,
            $exerciseSeries,
            $exerciseRepetitions;

    $req = $bdd->prepare('INSERT INTO exercise(id_user, id_activity, id_program, name, series, repetitions) VALUES(:idUser, :idActivity, :idProgram, :exerciseName, :series, :repetitions)');
    $req->execute(array(
        'idUser' => $_SESSION['id'],
        'idActivity' => $idActivity,
        'idProgram' => $idProgram,
        'exerciseName' => $exerciseName,
        'series' => $exerciseSeries,
        'repetitions' => $exerciseRepetitions
    ));
}
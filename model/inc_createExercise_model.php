<?php
function CreateExercice(){
    global $bdd,
            $idActivity,
            $idProgram,
            $exerciseName,
            $exerciseSeries,
            $exerciseRepetitions,
            $exerciseTime;

    $req = $bdd->prepare('INSERT INTO exercise(id_user, id_activity, id_program, name, series, repetitions, time) VALUES(:idUser, :idActivity, :idProgram, :exerciseName, :series, :repetitions, :time)');
    $req->execute(array(
        'idUser' => $_SESSION['id'],
        'idActivity' => $idActivity,
        'idProgram' => $idProgram,
        'exerciseName' => $exerciseName,
        'series' => $exerciseSeries,
        'repetitions' => $exerciseRepetitions,
        'time' => $exerciseTime
    ));
}
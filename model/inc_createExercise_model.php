<?php
function CreateExercice(){
    global $bdd,
            $idActivity,
            $exerciseName,
            $exerciseSeries,
            $exerciseRepetitions,
            $exerciseTime,
            $exerciseDistance;

    $req = $bdd->prepare('INSERT INTO exercise(id_user, id_activity, name, series, repetitions, time, distance) VALUES(:idUser, :idActivity, :exerciseName, :series, :repetitions, :time, :distance)');
    $req->execute(array(
        'idUser' => $_SESSION['id'],
        'idActivity' => $idActivity,
        'exerciseName' => $exerciseName,
        'series' => $exerciseSeries,
        'repetitions' => $exerciseRepetitions,
        'time' => $exerciseTime,
        'distance' => $exerciseDistance
    ));
}
<?php
function SendExercice(){
    global $bdd,
            $activity,
            $name,
            $numberSeries,
            $numberRepetitions,
            $time;

    if(isset($_POST['btn-new-exercice'])){
        $req = $bdd->prepare('INSERT INTO exercices(id_user, activity, name, numberSeries, numberRepetition, time) VALUES(:idUser, :activity, :name, :numberSeries, :numberRepetition, :time)');
        $req->execute(array(
            'idUser' => $_SESSION['id'],
            'activity' => $activity,
            'name' => $name,
            'numberSeries' => $numberSeries,
            'numberRepetition' => $numberRepetitions,
            'time' => $time
        ));
    }
}

function DisplayExercices(){
    global $bdd,
            $activity,
            $exerciceList;

    $reqExercice = $bdd->prepare('SELECT * FROM exercices WHERE activity = :activity AND id_user = :idUser');
    $reqExercice->execute(array(
        'idUser' => $_SESSION['id'],
        'activity' => $activity
    ));
    while($donneeExercice = $reqExercice->fetch()){
        $exercice['date'] = $donneeExercice['date_creation'];
        $exercice['name'] = $donneeExercice['name'];
        $exercice['numberSeries'] = $donneeExercice['numberSeries'];
        $exercice['numberRepetition'] = $donneeExercice['numberRepetition'];
        $exercice['time'] = $donneeExercice['time'];
        $exercice['id_exo'] = $donneeExercice['id_exo'];
        $exerciceList[] = $exercice;
    }
}
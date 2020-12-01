<?php
if(isset($_POST['btn-new-exercice'])){
    $req = $bdd->prepare('INSERT INTO exercices(id_user, activity, name, numberSeries, numberRepetition) VALUES(:idUser, :activity, :name, :numberSeries, :numberRepetition)');
    $req->execute(array(
        'idUser' => $_SESSION['id'],
        'activity' => $activity,
        'name' => $name,
        'numberSeries' => $numberSeries,
        'numberRepetition' => $numberRepetitions
    ));
}
$reqExercice = $bdd->prepare('SELECT * FROM exercices WHERE activity = :activity AND id_user = :idUser');
$reqExercice->execute(array(
    'idUser' => $_SESSION['id'],
    'activity' => $activity
));
while($donneeExercice = $reqExercice->fetch()){
    $exercice['name'] = $donneeExercice['name'];
    $exercice['numberSeries'] = $donneeExercice['numberSeries'];
    $exercice['numberRepetition'] = $donneeExercice['numberRepetition'];
    $exerciceList[] = $exercice;
}

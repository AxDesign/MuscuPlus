<?php
if(isset($_POST['btn-new-exercice'])){
    $req = $bdd->prepare('INSERT INTO exercices(name, numberSeries, numberRepetition) VALUES(:name, :numberSeries, :numberRepetition)');
    $req->execute(array(
        'name' => $name,
        'numberSeries' => $numberSeries,
        'numberRepetition' => $numberRepetitions
    ));
}
$reqExercice = $bdd->query('SELECT * FROM exercices');
while($donneeExercice = $reqExercice->fetch()){
    $exercice['name'] = $donneeExercice['name'];
    $exercice['numberSeries'] = $donneeExercice['numberSeries'];
    $exercice['numberRepetition'] = $donneeExercice['numberRepetition'];
    $exerciceList[] = $exercice;
}

<?php
function DisplayActivity(){
    global $bdd,
            $activityList;

    $reqActivity = $bdd->prepare('SELECT * FROM activity WHERE id_user = :idUser ORDER BY id_activity ASC');
    $reqActivity->execute(array(
        'idUser' => $_SESSION['id']
    ));

    while($donneeActivity = $reqActivity->fetch()){
        $activity['id_activity'] = $donneeActivity['id_activity'];
        $activity['name'] = $donneeActivity['name'];
        $activityList[] = $activity;
    }
}

function DeleteActivity(){
    global $bdd,
            $activityId,
            $activityName;

    $reqActivityDelete = $bdd->prepare('DELETE FROM activity WHERE id_user = :idUser AND id_activity = :idActivity AND name = :name');
    $reqActivityDelete->execute(array(
        'idUser' => $_SESSION['id'],
        'idActivity' => $activityId,
        'name' => $activityName
    ));

    $reqProgramDelete = $bdd->prepare('DELETE FROM program WHERE id_user = :idUser AND id_activity = :idActivity');
    $reqProgramDelete->execute(array(
        'idUser' => $_SESSION['id'],
        'idActivity' => $activityId
    ));

    $reqExerciseDelete = $bdd->prepare('DELETE FROM exercise WHERE id_user = :idUser AND id_activity = :idActivity');
    $reqExerciseDelete->execute(array(
        'idUser' => $_SESSION['id'],
        'idActivity' => $activityId
    ));
}
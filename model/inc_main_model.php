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

function CalculateTimeOfActivity(){
    global $bdd,
            $activityList,
            $semaine;

            if(isset($activityList)){
                foreach($activityList as $activity){
                    $semaine[$activity['name']] = [];
                    $semaine[$activity['name']][0] = 0;
                    $semaine[$activity['name']][1] = 0;
                    $semaine[$activity['name']][2] = 0;
                    $semaine[$activity['name']][3] = 0;
                    $semaine[$activity['name']][4] = 0;
                    $semaine[$activity['name']][5] = 0;
                    $semaine[$activity['name']][6] = 0;
                }
            }

    $reqDate = $bdd->prepare('SELECT activity.name, UNIX_TIMESTAMP(date_creation) as "date_crea", repetitions, time FROM `exercise` join activity on (exercise.id_activity = activity.id_activity) WHERE date_creation > ?');
    $reqDate->execute(array('2021-02-11'));

    while($donneeActivity = $reqDate->fetch()){
        $temp = getdate($donneeActivity['date_crea']);
        


        $semaine[$donneeActivity['name']][$temp['wday']] += $donneeActivity['time'];
    }
}
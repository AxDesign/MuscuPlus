<?php
function DisplayActivity(){
    global $bdd,
            $activityList;
    try{
        $reqActivity = $bdd->prepare('SELECT * FROM activity WHERE id_user = :idUser ORDER BY id_activity ASC');
        $reqActivity->execute(array(
            'idUser' => $_SESSION['id']
        ));

        while($donneeActivity = $reqActivity->fetch()){
            $activity['id_activity'] = $donneeActivity['id_activity'];
            $activity['name'] = $donneeActivity['name'];
            $activityList[] = $activity;
        }
    } catch (Exception $e) {
        $errorIt = $e;
        $errorMsg = 'Une erreur innatendue est survenue. Le service technique a été informé. Veuillez vous reconnectez plus tard.';
    }
}

function DeleteActivity(){
    global $bdd,
            $activityId,
            $activityName;

    try{
        $reqActivityDelete = $bdd->prepare('DELETE FROM activity WHERE id_user = :idUser AND id_activity = :idActivity AND name = :name');
        $reqActivityDelete->execute(array(
            'idUser' => $_SESSION['id'],
            'idActivity' => $activityId,
            'name' => $activityName
        ));
    
        $reqExerciseDelete = $bdd->prepare('DELETE FROM exercise WHERE id_user = :idUser AND id_activity = :idActivity');
        $reqExerciseDelete->execute(array(
            'idUser' => $_SESSION['id'],
            'idActivity' => $activityId
        ));
    } catch (Exception $e) {
        $errorIt = $e;
        $errorMsg = 'Une erreur innatendue est survenue. Le service technique a été informé. Veuillez vous reconnectez plus tard.';
    }
}

function CalculateTimeOfActivity(){
    global $bdd,
            $activityList,
            $time;

    if(isset($activityList)){
        foreach($activityList as $activity){
            $time[$activity['name']] = [];
            $time[$activity['name']][0] = 0;
            $time[$activity['name']][1] = 0;
            $time[$activity['name']][2] = 0;
            $time[$activity['name']][3] = 0;
            $time[$activity['name']][4] = 0;
            $time[$activity['name']][5] = 0;
            $time[$activity['name']][6] = 0;
        }
    }

    try{
        $reqDate = $bdd->prepare('SELECT activity.name, UNIX_TIMESTAMP(date_creation) as "date_crea", time FROM `exercise` join activity on (exercise.id_activity = activity.id_activity) WHERE date_creation > ?');
        $reqDate->execute(array('2021-02-15'));
        
        while($donneeActivity = $reqDate->fetch()){
            $temp = getdate($donneeActivity['date_crea']);
            $time[$donneeActivity['name']][$temp['wday']] += $donneeActivity['time'];
        }
    } catch (Exception $e) {
        $errorIt = $e;
        $errorMsg = 'Une erreur innatendue est survenue. Le service technique a été informé. Veuillez vous reconnectez plus tard.';
    }

}

function CalculateRepetitionsOfActivity(){
    global $bdd,
            $activityList,
            $repetitions;

    if(isset($activityList)){
        foreach($activityList as $activity){
            $repetitions[$activity['name']] = [];
            $repetitions[$activity['name']][0] = 0;
            $repetitions[$activity['name']][1] = 0;
            $repetitions[$activity['name']][2] = 0;
            $repetitions[$activity['name']][3] = 0;
            $repetitions[$activity['name']][4] = 0;
            $repetitions[$activity['name']][5] = 0;
            $repetitions[$activity['name']][6] = 0;
        }
    }

    try{
        $reqDate = $bdd->prepare('SELECT activity.name, UNIX_TIMESTAMP(date_creation) as "date_crea", series, repetitions FROM `exercise` join activity on (exercise.id_activity = activity.id_activity) WHERE date_creation > ?');
        $reqDate->execute(array('2021-02-11'));
        
        while($donneeActivity = $reqDate->fetch()){
            $temp = getdate($donneeActivity['date_crea']);
            $allRepetition = $donneeActivity['series'] * $donneeActivity['repetitions'];
            $repetitions[$donneeActivity['name']][$temp['wday']] += $allRepetition;
        }
    } catch (Exception $e) {
        $errorIt = $e;
        $errorMsg = 'Une erreur innatendue est survenue. Le service technique a été informé. Veuillez vous reconnectez plus tard.';
    }

}
<?php
function NewActivity(){
    global $bdd,
            $newActivityName,
            $red,
            $green,
            $blue;

    $req = $bdd->prepare('INSERT INTO activity(id_user, activityname, red, green, blue) VALUES(:idUser, :activityname, :red, :green, :blue)');
    $req->execute(array(
        'idUser' => $_SESSION['id'],
        'activityname' => $newActivityName,
        'red' => $red,
        'green' => $green,
        'blue' => $blue
    ));
}

function DisplayActivity(){
    global $bdd,
            $activityList;

    $reqActivity = $bdd->prepare('SELECT * FROM activity WHERE id_user = :idUser');
    $reqActivity->execute(array(
        'idUser' => $_SESSION['id']
    ));

    while($donneeActivity = $reqActivity->fetch()){
        $activity['name'] = $donneeActivity['activityname'];
        $activity['colorRed'] = $donneeActivity['red'];
        $activity['colorGreen'] = $donneeActivity['green'];
        $activity['colorBlue'] = $donneeActivity['blue'];
        $activity['id'] = $donneeActivity['id'];
        $activityList[] = $activity;
    }
}

function CalculateTimeOfActivity(){
    global $bdd,
            $activityList,
            $semaine;

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

    $reqDate = $bdd->prepare('SELECT activity, UNIX_TIMESTAMP(date_creation) as "date_crea", time FROM `exercices` WHERE date_creation > ? ');
    $reqDate->execute(array('2020-01-02'));

    while($donneeActivity = $reqDate->fetch()){
        $temp = getdate($donneeActivity['date_crea']);
        
        $semaine[$donneeActivity['activity']][$temp['wday']] += $donneeActivity['time'];
    }
}

function LastTraining(){
    global $bdd,
            $donneeLastTraining;

    $reqLastTraining = $bdd->prepare('SELECT * FROM exercices WHERE id_user = ? ORDER BY id_exo DESC LIMIT 1');
    $reqLastTraining->execute(array($_SESSION['id']));

    $donneeLastTraining = $reqLastTraining->fetch();

}
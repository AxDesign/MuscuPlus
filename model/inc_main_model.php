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
                $semaine[$activity['name']]['dimanche'] = 0;
                $semaine[$activity['name']]['lundi'] = 0;
                $semaine[$activity['name']]['mardi'] = 0;
                $semaine[$activity['name']]['mercredi'] = 0;
                $semaine[$activity['name']]['jeudi'] = 0;
                $semaine[$activity['name']]['vendredi'] = 0;
                $semaine[$activity['name']]['samedi'] = 0;
            }

    $reqDate = $bdd->prepare('SELECT activity, UNIX_TIMESTAMP(date_creation) as "date_crea", time FROM `exercices` WHERE date_creation > ? ');
    $reqDate->execute(array('2020-01-02'));

    while($donneeActivity = $reqDate->fetch()){
        $temp = getdate($donneeActivity['date_crea']);
        
        switch($temp['wday']){
            case 0:
                    $semaine[$donneeActivity['activity']]['dimanche'] += $donneeActivity['time'];
                break;
            case 1:
                    $semaine[$donneeActivity['activity']]['lundi'] += $donneeActivity['time'];
                break;
            case 2:
                    $semaine[$donneeActivity['activity']]['mardi'] += $donneeActivity['time'];
                break;
            case 3:
                    $semaine[$donneeActivity['activity']]['mercredi'] += $donneeActivity['time'];
                break;
            case 4:
                    $semaine[$donneeActivity['activity']]['jeudi'] += $donneeActivity['time'];
                break;
            case 5:
                    $semaine[$donneeActivity['activity']]['vendredi'] += $donneeActivity['time'];
                break;
            case 6:
                    $semaine[$donneeActivity['activity']]['samedi'] += $donneeActivity['time'];
                break;
        }
    }
}

function LastTraining(){
    global $bdd,
            $donneeLastTraining;

    $reqLastTraining = $bdd->prepare('SELECT * FROM exercices WHERE id_user = ? ORDER BY id_exo DESC LIMIT 1');
    $reqLastTraining->execute(array($_SESSION['id']));

    $donneeLastTraining = $reqLastTraining->fetch();

}
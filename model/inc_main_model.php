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
        $activityList[] = $activity;
    }
}

function CalculateTimeOfActivity(){
    global $bdd,
            $lundi;

    $reqDate = $bdd->prepare('SELECT * FROM `exercices` WHERE date_creation = ?');
    $reqDate->execute(array('2020-12-07'));

    while($donneeActivity = $reqDate->fetch()){
        $lundi = $donneeActivity['time'];
    }
}
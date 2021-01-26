<?php
function DisplayActivity(){
    global $bdd,
            $activityList;

    $reqActivity = $bdd->prepare('SELECT * FROM activity WHERE id_user = :idUser');
    $reqActivity->execute(array(
        'idUser' => $_SESSION['id']
    ));

    while($donneeActivity = $reqActivity->fetch()){
        $activity['id_activity'] = $donneeActivity['id_activity'];
        $activity['name'] = $donneeActivity['name'];
        $activityList[] = $activity;
    }
}
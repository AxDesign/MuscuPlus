<?php
if(isset($_POST['btn-new-activity'])){
    $req = $bdd->prepare('INSERT INTO activity(id_user, activityname) VALUES(:idUser, :activityname)');
    $req->execute(array(
        'idUser' => $_SESSION['id'],
        'activityname' => $newActivityName
    ));
}
$reqActivity = $bdd->prepare('SELECT * FROM activity WHERE id_user = :idUser');
$reqActivity->execute(array(
    'idUser' => $_SESSION['id']
));
while($donneeActivity = $reqActivity->fetch()){
    $activity['name'] = $donneeActivity['activityname'];
    $activityList[] = $activity;
}

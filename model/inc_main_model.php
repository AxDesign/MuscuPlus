<?php
$reqStatActivity = $bdd->prepare('SELECT * FROM activity WHERE id_user = :idUser');
$reqStatActivity->execute(array(
    'idUser' => $_SESSION['id']
));
while($donneeActivity = $reqStatActivity->fetch()){
    $activity['name'] = $donneeActivity['activityname'];
    $statActivityList[] = $activity;
}
//comm
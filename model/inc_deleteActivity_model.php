<?php
//Supprime l'activité sélectionné
if(isset($_POST['deleteActivity'])){
    global $activityDelete;
    $req = $bdd->prepare('DELETE FROM activity WHERE id_user = :userId AND activityname = :activity');
    $req->execute(array(
        'userId' => $_SESSION['id'],
        'activity' => $activityDelete
    ));
}
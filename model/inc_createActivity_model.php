<?php
function CreateActivity(){
    global $bdd,
            $activityName;

    $req = $bdd->prepare('INSERT INTO activity(id_user, name) VALUES(:id_user, :name)');
    $req->execute(array(
        'id_user' => $_SESSION['id'],
        'name' => $activityName
    ));
    header("location:main.php");
}
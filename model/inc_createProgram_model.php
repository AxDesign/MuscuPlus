<?php
function CreateProgram(){
    global $bdd,
            $activityId,
            $programName;

    $req = $bdd->prepare('INSERT INTO program(id_user, id_activity, programName) VALUES(:idUser, :idActivity, :programName)');
    $req->execute(array(
        'idUser' => $_SESSION['id'],
        'idActivity' => $activityId,
        'programName' => $programName
    ));
    header("location:activity.php?activityId=" . $_POST['activityId'] . "&activityName=" . $_POST['activityName']);
}
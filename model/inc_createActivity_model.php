<?php
function CreateActivity(){
    global $bdd,
            $activityName;

    try{
        $req = $bdd->prepare('INSERT INTO activity(id_user, name) VALUES(:id_user, :name)');
        $req->execute(array(
            'id_user' => $_SESSION['id'],
            'name' => $activityName
        ));
        header("location:main.php");
    } catch (Exception $e) {
        $errorIt = $e;
        $errorMsg = 'Une erreur innatendue est survenue. Le service technique a été informé. Veuillez vous reconnectez plus tard.';
    }
}
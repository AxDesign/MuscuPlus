<?php
function CreateActivity(){
    global $bdd,
            $activityName,
            $red,
            $green,
            $blue;

    try{
        $req = $bdd->prepare('INSERT INTO activity(id_user, name, red, green, blue) VALUES(:id_user, :name, :red, :green, :blue)');
        $req->execute(array(
            'id_user' => $_SESSION['id'],
            'name' => $activityName,
            'red' => $red,
            'green' => $green,
            'blue' => $blue
        ));
        header("location:main.php");
    } catch (Exception $e) {
        $errorIt = $e;
        $errorMsg = 'Une erreur innatendue est survenue. Le service technique a été informé. Veuillez vous reconnectez plus tard.';
    }
}
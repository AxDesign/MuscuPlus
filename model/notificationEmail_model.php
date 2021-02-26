<?php
function RecoverDate(){
    global $bdd,
            $actualDate;

    try{
        $req = $bdd->prepare('SELECT * FROM recall_exercise');
        $req->execute();
    } catch (Exception $e) {
        $errorIt = $e;
        $errorMsg = 'Une erreur innatendue est survenue. Le service technique a été informé. Veuillez vous reconnectez plus tard.';
    }
    
    while($donneeRecallExercise = $req->fetch()){
        $idUser = $donneeRecallExercise['id_user'];
        $recall['exoName'] = $donneeRecallExercise['name'];
        $recall['exoSeries'] = $donneeRecallExercise['series'];
        $recall['exoRepetitions'] = $donneeRecallExercise['repetitions'];
        $recall['exoTime'] = $donneeRecallExercise['time'];
        $recall['exoDistance'] = $donneeRecallExercise['distance'];
        $recall['date'] = $donneeRecallExercise['recall_date'];
        $recallList[$idUser] = $recall;
        echo $recallList[$idUser]['date'] . ' ';
        print_r($recallList);
        echo '<br />';
        if($actualDate == $recallList[$idUser]['date']){
            echo 'Meme date !<br />';
            $reqUser = $bdd->prepare('SELECT email FROM users WHERE id=?');
            $reqUser->execute(array($idUser));
            $userEmailArray = $reqUser->fetch();
            $userEmail = $userEmailArray['email'];
            echo $userEmail;
            include_once('mail/mailNotification.php');
            DeleteOldExercices();
        } else {
            echo 'Date: ' . $actualDate . '</br>';
            echo 'Mauvaise date !!!<br />';
            DeleteOldExercices();
        }
    }
}

function DeleteOldExercices(){
    global $bdd,
            $actualDate;
    try{
        $req = $bdd->prepare('DELETE FROM recall_exercise WHERE recall_date < ?');
        $req->execute(array($actualDate));
    } catch (Exception $e) {
        $errorIt = $e;
        $errorMsg = 'Une erreur innatendue est survenue. Le service technique a été informé. Veuillez vous reconnectez plus tard.';
    }
}
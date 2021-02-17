<?php
function reSendEmail(){
    global $bdd;
    $userName = $_SESSION['name'];
    $key;
    $userEmail;
    
    try{
        $reqKey = $bdd->prepare('SELECT * FROM users WHERE name = ?');
        $reqKey->execute(array($userName));
        while($donneeKey = $reqKey->fetch()){
            $key = $donneeKey['confirmkey'];
            $userEmail = $donneeKey['email'];
        }

        require_once("mail/mailConfirmation.php");
    }catch (Exception $e) {
        $errorIt = $e;
        $errorMsg = 'Une erreur innatendue est survenue. Le service technique a été informé. Veuillez vous reconnectez plus tard.';
    }
}
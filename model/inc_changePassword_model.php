
<?php
if(strlen($newPassword) > 255){
    $valid = false;
    $errorUserPassword = "Le champ de mot de passe est trop long !";
}
if(empty($verifPassword)){
    $valid = false;
    $errorUserCheckPassword = "Le champ de vérification du mot de passe ne peux pas être vide";
}
if($verifPassword != $newPassword){
    $valid = false;
    $errorUserCheckPassword = "Le mot de passe et le mot de passe de vérification ne sont pas les même !";
}

if($valid){
    try{
        $insertNewPassword = $bdd->prepare("UPDATE users SET password=? WHERE email=?");
        $insertNewPassword->execute(array($newPassword, $email));
        header("location:index.php");
    } catch (Exception $e) {
        $errorIt = $e;
        $errorMsg = 'Une erreur innatendue est survenue. Le service technique a été informé. Veuillez vous reconnectez plus tard.';
    }
}
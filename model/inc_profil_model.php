<?php
// $req = $bdd->prepare('SELECT * FROM utilisateurs');
// $req->execute();

// $allUsers;
// while($data = $req->fetch()){
//     $allUsers[] = $data;
// }

if(isset($_POST['modified'])){
    $requser = $bdd->prepare('SELECT * FROM utilisateurs WHERE id=?');
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();   
    
    
    if(isset($newName)){
        if(strlen($newName) > 30){
            $errNameUser = "Le champ de nom est trop long !";
        }else{
            $insertname = $bdd->prepare("UPDATE utilisateurs SET name=? WHERE id=?");
            $insertname->execute(array($newName, $_SESSION['id']));
            $_SESSION['name'] = $newName;
        }
    }

    if(isset($newLastName)){
        if(strlen($newLastName) > 30){
            $errLastNameUser = "Le champ de nom est trop long !";
        }else{
            $insertlastname = $bdd->prepare("UPDATE utilisateurs SET lastName=? WHERE id=?");
            $insertlastname->execute(array($newLastName, $_SESSION['id']));
            $_SESSION['lastname'] = $newLastName;
        }
    }

    if(isset($newAge)){
        if($newAge > 100 || $newAge < 5){
            $errAgeUser = "Votre age est incorrect";
        }else{
            $insertage = $bdd->prepare("UPDATE utilisateurs SET age=? WHERE id=?");
            $insertage->execute(array($newAge, $_SESSION['id']));
            $_SESSION['age'] = $newAge;
        }
    }

    if(isset($newEmail)){
        if(strlen($newEmail) > 255){
            $errEmailUser = "Le champ d'email est trop long !";
        }else{
            $insertemail = $bdd->prepare("UPDATE utilisateurs SET email=? WHERE id=?");
            $insertemail->execute(array($newEmail, $_SESSION['id']));
            $_SESSION['email'] = $newEmail;
        }
    }

    if(isset($newPassword)){
        if(strlen($newPassword) > 255){
            $errPasswordUser = "Le champ de mot de passe est trop long !";
        }
        else if(empty($verifPassword)){
            $errVerifPasswordUser = "Le champ de vérification du mot de passe ne peux pas être vide";
        }
        else if($verifPassword != $newPassword){
            $errVerifPasswordUser = "Le mot de passe et le mot de passe de vérification ne sont pas les même !";
        }
        else{
            $insertpassword = $bdd->prepare("UPDATE utilisateurs SET password=? WHERE id=?");
            $insertpassword->execute(array($newPassword, $_SESSION['id']));
            $_SESSION['password'] = $newPassword;
        }
    }
}

?>
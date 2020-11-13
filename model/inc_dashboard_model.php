<?php
$req = $bdd->prepare('SELECT * FROM utilisateurs');
$req->execute();

if(isset($_POST['test'])){
    echo 'Je suis là !';
}

$allUsers;
while($data = $req->fetch()){
    $allUsers[] = $data;
}



?>
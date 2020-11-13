<?php
$req = $bdd->prepare('SELECT * FROM utilisateurs');
$req->execute();

$allUsers;
while($data = $req->fetch()){
    $allUsers[] = $data;
}



?>
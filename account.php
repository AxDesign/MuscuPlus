<?php

require_once('./db/bdd.php');

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) == 'XMLHTTPREQUEST'){
    if(isset($_POST['userName']) && isset($_POST['userLastName']) && isset($_POST['userAge']) && isset($_POST['userEmail']) && isset($_POST['userPassword']) && isset($_POST['userVerifPassword'])){
        $dataUser = array("userName", "userLastName", "userAge", "userEmail", "userPassword", "userVerifPassword");
        foreach($dataUser as $data){
            if(isset($_POST[$data])){
                ${$data} = $_POST[$data];
            }
        }
        Inscription();

    }
}

function Inscription(){
    global $bdd,
            $userName,
            $userLastName,
            $userAge,
            $userEmail,
            $userPassword,
            $userVerifPassword;
            
    $req = $bdd->prepare('INSERT INTO users(name, lastName, age, email, password) VALUES(:name, :lastName, :age, :email, :password)');
    $req->execute(array(
        'name' => $userName,
        'lastName' => $userLastName,
        'age' => $userAge,
        'email' => $userEmail,
        'password' => $userPassword
    ));
    response();
}

function response(){
    header('Content-Type: application/json');

    $response = 'Envoie réussi !';

    echo json_encode($response);
}
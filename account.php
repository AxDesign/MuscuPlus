<?php

require_once('./db/bdd.php');

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) == 'XMLHTTPREQUEST'){
    if(isset($_POST['form'])){
        if($_POST['form'] == 'registration'){
            Registration();
        }
        if($_POST['form'] == 'login'){
            Login();
        }
    }
}

function Registration(){
    global $bdd;

    $dataUser = array("userName", "userLastName", "userAge", "userEmail", "userPassword", "userVerifPassword");
    foreach($dataUser as $data){
        if(isset($_POST[$data])){
            ${$data} = $_POST[$data];
        }
    }

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
function Login(){
    global $bdd;

    $dataUser = array("userEmail", "userPassword");
    foreach($dataUser as $data){
        if(isset($_POST[$data])){
            ${$data} = $_POST[$data];
        }
    }

    $req = $bdd->prepare('SELECT * FROM users WHERE email = ?');
    $req->execute(array($userEmail));

    if($req->rowCount() == 1){
        while($dataUserLogin = $req->fetch()){
            if($dataUserLogin['password'] == $userPassword){
                response();
            }
        }
    }
}

function response(){
    header('Content-Type: application/json');

    $response = 'Envoie réussi !';

    echo json_encode($response);
}
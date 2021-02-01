<?php
function DisplayExercise(){
    global $bdd,
            $exoList,
            $programId;
    
    $reqExercise = $bdd->prepare('SELECT * FROM exercise WHERE id_user = :idUser AND id_program = :idProgram');
    $reqExercise->execute(array(
        'idUser' => $_SESSION['id'],
        'idProgram' => $programId
    ));

    while($donneeExercise = $reqExercise->fetch()){
        $exercise['idExo'] = $donneeExercise['id_exo'];
        $exercise['exoName'] = $donneeExercise['name'];
        $exoList[] = $exercise;
    }
}
<?php
function DisplayProgram(){
    global $bdd,
            $programList,
            $activityId;

    $reqProgram = $bdd->prepare('SELECT * FROM program WHERE id_user = :idUser AND id_activity = :idActivity ORDER BY id_program ASC' );
    $reqProgram->execute(array(
        'idUser' => $_SESSION['id'],
        'idActivity' => $activityId
    ));

    while($donneeProgram = $reqProgram->fetch()){
        $program['programId'] = $donneeProgram['id_program'];
        $program['programName'] = $donneeProgram['programName'];
        $programList[] = $program;
    }
}

function CountExercises($programId){
    global $bdd;

    $reqExerciseCount = $bdd->prepare('SELECT COUNT(id_program) FROM exercise WHERE id_user = :idUser AND id_program = :idProgram');
    $reqExerciseCount->execute(array(
        'idUser' => $_SESSION['id'],
        'idProgram' => $programId
    ));

    return $reqExerciseCount->fetchColumn();
}

function DeleteProgram(){
    global $bdd,
            $programIdDelete;

    $reqProgramDelete = $bdd->prepare('DELETE FROM program WHERE id_user = :idUser AND id_program = :idProgram');
    $reqProgramDelete->execute(array(
        'idUser' => $_SESSION['id'],
        'idProgram' => $programIdDelete
    ));

    $reqExerciseDelete = $bdd->prepare('DELETE FROM exercise WHERE id_user = :idUser AND id_program = :idProgram');
    $reqExerciseDelete->execute(array(
        'idUser' => $_SESSION['id'],
        'idProgram' => $programIdDelete
    ));
}
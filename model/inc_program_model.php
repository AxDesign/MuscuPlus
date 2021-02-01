<?php
function DisplayProgram(){
    global $bdd,
            $programList,
            $activityId;

    $reqProgram = $bdd->prepare('SELECT * FROM program WHERE id_user = :idUser AND id_activity = :idActivity');
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
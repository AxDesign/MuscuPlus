<?php
header('Content-type: application/json');

$response = array();
$response["activityId"] = $idActivity;
$response["programId"] = $idProgram;
$response["exerciseName"] = $exerciseName;

echo json_encode($response);

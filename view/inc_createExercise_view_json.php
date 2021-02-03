<?php
header('Content-type: application/json');

$response = array();
$response["activityId"] = $idActivity;
$response["programId"] = $idProgram;
$response["exerciseName"] = $exerciseName;
$response["exerciseSeries"] = $exerciseSeries;
$response["exerciseRepetitions"] = $exerciseRepetitions;

echo json_encode($response);

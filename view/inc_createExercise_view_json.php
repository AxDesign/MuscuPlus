<?php
header('Content-type: application/json');

$response = array();
$response["activityId"] = $idActivity;
$response["exerciseName"] = $exerciseName;
$response["exerciseSeries"] = $exerciseSeries;
$response["exerciseRepetitions"] = $exerciseRepetitions;
$response["exerciseTime"] = $exerciseTime;
$response["exerciseDistance"] = $exerciseDistance;
$response["recallDate"] = $recallDate;
$response["recallTime"] = $recallTime;

echo json_encode($response);
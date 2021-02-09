<?php
header('Content-type: application/json');

$response = array();
$response["activityId"] = $activityId;
$response["activityName"] = $activityName;
$response["programName"] = $programName;

echo json_encode($response);

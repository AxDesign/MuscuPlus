<?php
header('Content-type: application/json');

$response = array();
$response["result"] = 1;
$response["message"] = "Le nouveau programme a bien été enregistré";
$response["programName"] = $programName;

echo json_encode($response);

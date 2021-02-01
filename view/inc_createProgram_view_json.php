<?php
header('Content-type: application/json');

$response = array();
$response["programName"] = $programName;

echo json_encode($response);

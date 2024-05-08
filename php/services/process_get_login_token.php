<?php
include_once "./process_jwt_token.php";

$data = $_POST["data"];
if (empty($data)) $response = array('success' => false, 'message' => "Empty data: $data");
$token = generate_token($data);
if (empty($token)) $response = array('success' => false, 'message' => "Error generating token.");
else $response = array('success' => true, 'token' => $token);

header('Content-Type: application/json');
echo json_encode($response);

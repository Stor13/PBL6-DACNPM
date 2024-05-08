<?php
include_once "./process_jwt_token.php";

$data = file_get_contents("php://input");
if ($data == null) $response = array('valid' => false, "msg" => "Empty data: [$data]");
$data = json_decode($data, true);

$token = $data["token"];
$url = $data["url"];

if (empty($token) || empty($url)) {
  $response = array('valid' => false, "msg" => "Empty token: [$token] / url: [$url]. Data: [$data]");
} else $response = validate_token($token, $url);

echo json_encode($response);
<?php

include_once "../models/account_model.php";

$secret = "pbl5";
$account_model = new AccountModel();

function generate_token($payload) {
  global $secret;
  $header = base64_encode(json_encode(['typ' => 'JWT', 'alg' => 'HS256']));
  $payload = base64_encode(json_encode($payload));
  $signature = base64_encode(hash_hmac('sha256', "$header.$payload", $secret, true));
  return "$header.$payload.$signature";
}

function decode_token($token) {
  global $secret;
  if (empty($token)) return false;
  list($header, $payload, $signature) = explode('.', $token);
  $calculated_signature = base64_encode(hash_hmac('sha256', "$header.$payload", $secret, true));
  if ($signature !== $calculated_signature) {
      return false; // Invalid signature
  }
  return json_decode(base64_decode($payload), true);
}

function validate_token($token, $url) {
  global $account_model;
  if (empty($token) || empty($url)) return array('valid' => false, "message" => "Empty Parameter(s): $token - $url");
  if (str_starts_with($url, "/pbl5/php/admin")) {
    $required_role = 9;
  } else if (str_starts_with($url, "/pbl5/php/lecturer")) {
    $required_role = 1;
  } else if (str_starts_with($url, "/pbl5/php/student")) {
    $required_role = 0;
  } else return array('valid' => false, "message" => "Invalid URL: $url");

  $payload = decode_token($token);
  if ($payload == false) return array('valid' => false, "message" => "Invalid Token: $payload, $token.");

  $iat = $payload["iat"];
  if (time() > $iat) return array('valid' => false, "message" => "Token Expires: ".date("Y-m-d H:i:s", $iat)." ".date("Y-m-d H:i:s", time()));

  $UserID = $payload["UserID"];
  $account = $account_model->getOne_ID($UserID);
  if (empty($account) || $account == null) return array('valid' => false, "message" => "Account with UserID $UserID not found.");

  if ($account["Role"] == $required_role) {
    $token = generate_token(array("UserID" => $account["UserID"], "iat" => time() + (5 * 1)));
    return array('valid' => true, "token" => $token);
  } else return array('valid' => false, "message" => "This User is not allowed to do this action.");
}



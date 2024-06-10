<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Account.php";

$service_account = new S_Account();

function success_response($new_password): array {
  return array(
    "success" => true,
    "message" => "",
    "data" => $new_password
  );
}

function update_failed_response(): array {
  return array(
    "success" => false,
    "message" => "Khong the cap nhat mat khau moi!",
    "data" => null
  );
}

function check_account($UserID): bool {
  global $service_account;
  $account = $service_account->getOne_UserID($UserID);
  return ($account !== null);
}

function update_default_password(string $UserID): array {
  global $service_account;
  $NewPassword = "123123123";
  if ($service_account->update_Password($UserID, $NewPassword)) {
    return success_response($NewPassword);
  } else {
    return update_failed_response();
  }
}

function accountNotFound_response(): array {
  global $service_account;
  return array(
    "success" => false,
    "message" => "Khong tim thay tai khoan!",
    "data" => null
  );
}

function formValidationError_response(): array {
  return array(
    "success" => false,
    "message" => "Thong tin khong hop le!",
    "data" => $_POST["input_UserID"]
  );
}

$UserID = $_POST["input_UserID"];
$errors = [];
if (empty($UserID) || $UserID === null) {
  $errors["UserID"] = "Khong de trong thong tin!";
}
  
if (empty($errors)) {
  if (check_account($UserID) === false) {
    $response = accountNotFound_response();
  } else {
    $response = update_default_password($UserID);
  }
} else {
  $response = formValidationError_response();
}

header("Content-Type: application/json");
echo(json_encode($response));
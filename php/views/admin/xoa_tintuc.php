<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Notification.php";

$service_notification = new S_Notification();

function check_delete($NotificationID): array {
  global $service_notification;
  $DB_response = $service_notification->delete($NotificationID);
  if ($DB_response === false) {
    return array(
      "success" => false,
      "message" => "Xoa khong thanh cong!",
      "data" => null
    );
  }
  return array(
    "success" => true,
    "message" => "Xoa thanh cong!",
    "data" => null
  );
}

function new_response_FormValidationFailed(): array {
  return array(
    "success" => false,
    "message" => "Form Vaildation Failed!",
    "data" => null
  );
}

$NotificationID = $_POST["input_NotificationID"];
$errors = array();

if (
  empty($NotificationID) 
) {
  $errors["UserID"] = "Loi: ID khong hop le.";
}

if (empty($errors)) {
  // $response = check_login($UserID, $Password);
  $response = check_delete($NotificationID);
} else {
  $response = new_response_FormValidationFailed();
}

header("Content-Type: application/json");
echo(json_encode($response));
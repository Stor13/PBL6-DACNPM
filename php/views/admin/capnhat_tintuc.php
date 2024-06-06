<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Notification.php";

$service_notification = new S_Notification();

function check_update(
  string $NotificationID,
  string $Label,
  string $Content,
  string $IsToCourse,
  string $CourseID
): array {
  global $service_notification;
  $DB_response = $service_notification->update_Notification(
    $NotificationID,
    $Label,
    $Content,
    $IsToCourse,
    $CourseID
  );
  if ($DB_response === null) return array(
    "success" => false,
    "message" => "Doi tuong cap nhat khong hop le.",
    "data" => null
  );
  // if (is_string($DB_response)) return array(
  //   "success" => null,
  //   "message" => $DB_response,
  //   "data" => null
  // );
  if ($DB_response !== true) return array(
    "success" => false,
    "message" => "Khong the cap nhat!",
    "data" => $DB_response
  );
  return array(
    "success" => true,
    "message" => "Cap nhat thanh cong!",
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
$Label = $_POST["input_Label"];
$Content = $_POST["input_Content"];
$IsToCourse = $_POST["input_IsToCourse"];
$CourseID = $_POST["input_CourseID"];
$errors = array();

if (
  empty($NotificationID) || empty($Label)
  || empty($Content) || empty($IsToCourse)
  || $CourseID === null
) {
  $errors["UserID"] = "Hay nhap day du thong tin!";
}

if (empty($errors)) {
  // $response = check_login($UserID, $Password);
  $response = check_update(
    $NotificationID, $Label, $Content, $IsToCourse, $CourseID
  );
} else {
  $response = new_response_FormValidationFailed();
}

header("Content-Type: application/json");
echo(json_encode($response));
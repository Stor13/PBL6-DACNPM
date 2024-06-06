<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Notification.php";

$service_notification = new S_Notification();

// function check_update(
//   string $NotificationID,
//   string $Label,
//   string $Content,
//   string $IsToCourse,
//   string $CourseID
// ): array {
//   global $service_notification;
  // $DB_response = $service_notification->update_Notification(
  //   $NotificationID,
  //   $Label,
  //   $Content,
  //   $IsToCourse,
  //   $CourseID
  // );
  // if ($DB_response === null) return array(
  //   "success" => false,
  //   "message" => "",
  //   "data" => null
  // );
  // if (is_string($DB_response)) return array(
  //   "success" => null,
  //   "message" => $DB_response,
  //   "data" => null
  // );
  // if ($DB_response !== true) return array(
  //   "success" => false,
  //   "message" => "Khong the cap nhat!",
  //   "data" => $DB_response
  // );
  // return array(
  //   "success" => true,
  //   "message" => "Cap nhat thanh cong!",
  //   "data" => null
  // );
// }

function check_create(
  $Label, $Content, $IsToCourse, $CourseID
): array {
  global $service_notification;
  $DB_response = $service_notification->create_notification(
    $Label, $Content, $IsToCourse, $CourseID
  );
  if ($DB_response !== true) 
    return array(
      "success" => false,
      "message" => "Khong the them moi!",
      "data" => null
    );
  else
    return array(
      "success" => true,
      "message" => "Them moi thanh cong!",
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

$Label = $_POST["input_Label"];
$Content = $_POST["input_Content"];
$IsToCourse = $_POST["input_IsToCourse"];
$CourseID = $_POST["input_CourseID"];
$errors = array();

if (
  empty($Label) || empty($Content) || empty($IsToCourse)
) {
  $errors["UserID"] = "Hay nhap day du thong tin!";
}

if (empty($errors)) {
  // $response = check_login($UserID, $Password);
  $response = check_create(
    $Label, $Content, $IsToCourse, $CourseID
  );
} else {
  $response = new_response_FormValidationFailed();
}

header("Content-Type: application/json");
echo(json_encode($response));
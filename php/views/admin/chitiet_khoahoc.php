<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Course.php";
$service_course = new S_Course();

$CourseID = $_GET["CourseID"];
$errors = [];

if (empty($CourseID)) {
  $errors["CourseID"] = "Ma Khoa hoc khong hop le!";
};

function get_khoahoc(string $CourseID): array {
  global $service_course;
  return $service_course->getOne($CourseID);
}

function response_get_khoahoc_success(string $CourseID): array {
  $khoahoc = get_khoahoc($CourseID);
  if (empty($khoahoc)) return response_get_khoahoc_failed();
  return array(
    "success" => true,
    "message" => null,
    "data" => $khoahoc
  );
}

function response_get_khoahoc_failed(): array {
  return array(
    "success" => false,
    "message" => "Khong the lay thong tin khoa hoc!",
    "data" => $_GET
  );
};

if (empty($errors)) {
  $response = response_get_khoahoc_success($CourseID);
} else {
  $response = response_get_khoahoc_failed();
}

header("Content-Type: application/json");
echo(json_encode($response));
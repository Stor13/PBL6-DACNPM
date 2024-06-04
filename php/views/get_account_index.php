<?php
include_once "../services/Process_AAA.php";

$UserID = $_POST["input_UserID"];
// $Password = $_POST["input_Password"];
$errors = array();

if (empty($UserID)) {
  $errors["UserID"] = "Please enter your credentials!";
}

if (empty($errors)) {
  $response = get_loggedin_index($UserID);
} else {
  $response = new_response_formValidationFailed();
}

header("Content-Type: application/json");
echo(json_encode($response));
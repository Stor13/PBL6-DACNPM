<?php 
  include_once "./mysql_connection.php";
  // echo "asdhfkajshdfkasdjhf";

  $userID = $_POST["userID"];
  $password = $_POST["password"];
  $errors = array();

  if (empty($userID) || empty($password)) {
    $errors["userID"] = "Please enter your credentials.";
  }

  if (empty($errors)) {
    // connect to database, do something;

    $response = array('success' => true);
  } else {
    $response = array("success" => false, "message" => "Form validation failed.");
  }

  header("Content-Type: application/json");
  echo(json_encode($response));
?>
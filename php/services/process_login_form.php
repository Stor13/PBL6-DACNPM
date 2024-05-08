<?php 
  include_once "../models/account_model.php";
  include_once "./process_jwt_token.php";
  // include_once "./process_jwt_verification.php";

  function login_process($userID, $password) {
    // connect to database, do something;
    $accountModel = new AccountModel();
    $account = $accountModel->getOne_ID($userID);
    if (empty($account) || $account == null) {
      return array("success" => false, "message" => "Account Not Found.");
    }
    if ($account["Password"] != $password) return array("success" => false, "message" => "Wrong Credentials.");
    $data = array_intersect_key($account, array_flip(array("UserID", "Name")));

    if ($account["Role"] == 9) {
      $location = "/pbl5/php/admin";
    } else if ($account["Role"] == 1) {
      $location = "/pbl5/php/lecturer";
    } else if ($account["Role"] == 0) {
      $location = "/pbl5/php/student";
    }
    $data["iat"] = time() + (5 * 1);
    $token = generate_token($data);
    return array("success" => true, "message" => $data, "location" => $location, "token" => $token);
  };

  $userID = $_POST["userID"];
  $password = $_POST["password"];
  $errors = array();

  if (empty($userID) || empty($password)) {
    $errors["userID"] = "Please enter your credentials.";
  }

  if (empty($errors)) {
    $response = login_process($userID, $password);
  } else {
    $response = array("success" => false, "message" => "Form validation failed.");
  }

  header("Content-Type: application/json");
  echo(json_encode($response));

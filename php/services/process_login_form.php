<?php 
  include_once "../models/account_model.php";

  function login_process($userID, $password) {
    // connect to database, do something;
    $accountModel = new AccountModel();
    $account = $accountModel->getOne_ID($userID);
    if (empty($account)) {
      return array("success" => false, "message" => "Account Not Found.");
    }
    if ($account["Password"] != $password) return array("success" => false, "message" => "Wrong Credentials.");
    return array("success" => true, "message" => $account);
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

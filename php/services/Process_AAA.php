<?php 
require_once "../services/Account.php";

$model_Account = new S_Account();

function new_response_formValidationFailed() {
  return array(
    "success" => false,
    "message" => "Form Validation Failed!",
    "data" => null
  );
}

function get_account_UserID(array $account): array {
  return array_intersect_key($account, array_flip(array("UserID")));
  // return $account;
}

function new_response_AccountNotFound(): array {
  return array(
    "success" => false,
    "message" => "Account Not Found!",
    "data" => null
  );
}

function new_response_WrongCredential(): array {
  return array(
    "success" => false,
    "message" => "Wrong Credentials!",
    "data" => null
  );
}

function new_response_LoginSuccess($account): array{
  return array(
    "success" => true,
    "message" => "",
    "data" => get_account_UserID($account)
  );
}

function check_login(string $UserID, string $Password): array {
  global $model_Account;
  $account = $model_Account->_getOne_UserID($UserID);
  if (empty($account) or $account == null or $account["Password"] == null) {
    return new_response_AccountNotFound();
  }
  if ($account["Password"] != $Password) {
    return new_response_WrongCredential();
  }
  return new_response_LoginSuccess($account);
}

function new_response_guest_index(): array{
  return array(
    "success" => true,
    "message" => "",
    "data" => "/pbl5/php/_ui"
  );
}
function new_response_admin_index(): array{
  return array(
    "success" => true,
    "message" => "",
    "data" => "/pbl5/php/_ui/admin/"
  );
}
function new_response_lecturer_index(string $UserID): array{
  return array(
    "success" => true,
    "message" => "",
    "data" => "/pbl5/php/_ui/lecturer?UserID=$UserID"
  );
}
function new_response_student_index(string $UserID): array{
  return array(
    "success" => true,
    "message" => "",
    "data" => "/pbl5/php/_ui/student?UserID=$UserID"
  );
}

function check_accountRole(string $UserID): string|null {
  global $model_Account;
  $account = $model_Account->_getOne_UserID($UserID);
  if (empty($account) or $account == null) {
    return null;
  }
  return $account["Role"];
}

function get_loggedin_index(string $UserID): array {
  global $model_Account;
  $account = $model_Account->_getOne_UserID($UserID);
  if (empty($account) or $account == null) {
    return new_response_AccountNotFound();
  }
  
  $role = check_accountRole($UserID);
  if ($role == "admin") return new_response_admin_index();
  if ($role == "lecturer") return new_response_lecturer_index($UserID);
  if ($role == "student") return new_response_student_index($UserID);
  return new_response_guest_index();
};


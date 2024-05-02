<?php 
  require "../lib/PHPMailer/src/PHPMailer.php";
  require "../lib/PHPMailer/src/Exception.php";
  require "../lib/PHPMailer/src/SMTP.php";

  include_once "../models/account_model.php";

  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\PHPMailer;

  // require "vendor/autoload.php";

  function forgotPassword_process($UserID) {
    // check if UserID is valid 9 digits
    if (preg_match('/^\d{9}$/', $UserID)) {
      // check if there is an account of given UserID
      $accountModel = new AccountModel();
      $account = $accountModel->getOne_ID($UserID);
      if (empty($account)) {
        return array("success" => false, "message" => "Account Not Found.");
      }
      $newPassword = "";
      for ($i = 0; $i < 6; ++$i) {
        $newPassword .= rand(0, 9);
      }
      $accountModel->updatePassword($account["UserID"], $newPassword);
      if ($accountModel->get_affected_rows() == 0) return array("success" => false, "message" => "Cannot Reset Password.");
      $mail = new PHPMailer(true);
      try {
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->isSMTP();
        $mail->Host = "ssl://smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "leviettrung477@gmail.com";
        $mail->Password = "bhgnxlrdnrlrnmio";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom("leviettrung477@gmail.com", "Administrator");
        $mail->addAddress($account["Email"], "User");
        
        $mail->isHTML(true);
        $mail->Subject = "Here is your new password.";
        $mail->Body = "Your new password is ". $newPassword .".";
        $mail->send();
      } catch (Exception $e) {
        return array("success" => false, "message" => "Cannot Send Mail: ".$e);
      } 
      return array("success" => true, "message" => "Password Reset.");
      // return array("success" => true, "message" => $account);
    } else {
      return array("success" => false, "message" => "Invalid UserID.");
    }
  }

  $userID = $_POST["userID"];
  $errors = array();

  if (empty($userID)) {
    $errors["userID"] = "Please fill your UserID!";
  }

  if (empty($errors)) {
    $response = forgotPassword_process($userID);
  } else {
    $response = array("success" => false, "message" => "Form validation failed.");
  }

  header("Content-Type: application/json");
  echo(json_encode($response));

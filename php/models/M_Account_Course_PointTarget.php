<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/db/MySQL.php";

class M_Account_Course_PointTarget {
  private mysqli $conn;
  private $table = "account_course_pointtarget";

  public $UserID;
  public $CourseID;
  public $TargetType;
  public $TargetValue;

  public function preprocess_input(string $str): string {
    return htmlspecialchars(strip_tags($str));
  }

  public function __construct()
  {
    $mysqli_conn = new MySQL_Conn();
    $this->conn = $mysqli_conn->conn;
  }

  public function create(): bool {
    $this->UserID = $this->preprocess_input($this->UserID);
    $this->CourseID = $this->preprocess_input($this->CourseID);
    $this->TargetType = $this->preprocess_input($this->TargetType);
    $this->TargetValue = $this->preprocess_input($this->TargetValue);

    $sql = "INSERT INTO $this->table SET UserID=?, CourseID=?, TargetType=?, TargetValue=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "sssd",
      $this->UserID,
      $this->CourseID,
      $this->TargetType,
      $this->TargetValue
    );
    if ($stmt->execute()) return ($stmt->affected_rows > 0);
    return false;
  }

  public function update(): bool {
    $this->UserID = $this->preprocess_input($this->UserID);
    $this->CourseID = $this->preprocess_input($this->CourseID);
    $this->TargetType = $this->preprocess_input($this->TargetType);
    $this->TargetValue = $this->preprocess_input($this->TargetValue);

    $sql = "UPDATE $this->table SET TargetType=? WHERE UserID=?, CourseID=?, TargetValue=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "dsss",
      $this->TargetValue,
      $this->UserID,
      $this->CourseID,
      $this->TargetType,
    );
    return $stmt->execute();
  }

  public function getAll_UserID(): mysqli_result {
    $this->UserID = $this->preprocess_input($this->UserID);
    $sql = "SELECT * FROM $this->table WHERE UserID=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "s",
      $this->UserID
    );
    $stmt->execute();
    return $stmt->get_result();
  }

  public function getAll_UserID_CourseID(): mysqli_result {
    $this->UserID = $this->preprocess_input($this->UserID);
    $this->CourseID = $this->preprocess_input($this->CourseID);
    $sql = "SELECT * FROM $this->table WHERE UserID=?, CourseID=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "ss",
      $this->UserID,
      $this->CourseID
    );
    $stmt->execute();
    return $stmt->get_result();
  }
}
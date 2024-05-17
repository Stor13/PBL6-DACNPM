<?php
require_once "../db/MySQL.php";

function preprocess_input($input): string {
  return htmlspecialchars(strip_tags($input));
}
class Account_Course_PointTarget {
  private $conn;
  private $table = "account_coursepoint_target";
  public $UserID;
  public $CourseID;
  public $TargetType;
  public $TargetValue;

  public function __construct() {
    $mysql = new MySQL_Conn();
    $this->conn = $mysql->conn;
  }

  public function create(): bool {
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);
    $this->TargetValue = preprocess_input($this->TargetValue);
    $this->TargetType = preprocess_input($this->TargetType);

    $sql = "INSERT INTO :table SET UserID=:UserID, CourseID=:CourseID, TargetValue=:TargetValue, TargetType=:TargetType";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param(":TargetType", $this->TargetType);
    $stmt->bind_param(":TargetValue", $this->TargetValue);
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }

  public function update(): bool {
  $this->UserID = preprocess_input($this->UserID);
  $this->CourseID = preprocess_input($this->CourseID);
  $this->TargetValue = preprocess_input($this->TargetValue);
  $this->TargetType = preprocess_input($this->TargetType);

  $sql = "UPDATE :table SET TargetValue=:TargetValue, TargetType=:TargetType WHERE UserID=:UserID AND CourseID=:CourseID";
  $stmt = $this->conn->prepare($sql);
  $stmt->bind_param(":table", $this->table);
  $stmt->bind_param(":UserID", $this->UserID);
  $stmt->bind_param(":CourseID", $this->CourseID);
  $stmt->bind_param(":TargetType", $this->TargetType);
  $stmt->bind_param(":TargetValue", $this->TargetValue);
  if ($stmt->execute()) return $stmt->affected_rows > 0;
  return false;
  }

  public function delete(): bool {
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);

    $sql = "DELETE FROM :table WHERE UserID=:UserID AND CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }

  public function get_UserID_CourseID(): mysqli_result {
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);

    $sql = "SELECT * FROM :table WHERE UserID=:UserID AND CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function get_UserID(): mysqli_result {
    $this->UserID = preprocess_input($this->UserID);

    $sql = "SELECT * FROM :table WHERE UserID=:UserID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function get_CourseID(): mysqli_result {
    $this->CourseID = preprocess_input($this->CourseID);

    $sql = "SELECT * FROM :table WHERE CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->execute();
    return $stmt->get_result();
  }
}
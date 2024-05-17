<?php
require_once "../db/MySQL.php";

function preprocess_input($input): string {
  return htmlspecialchars(strip_tags($input));
}

class Account_Course_ProgressTarget {
  private $conn;
  private $table = "account_coursepoint_target";
  public $UserID;
  public $CourseID;
  public $TargetValue;
  public $DueDate;

  public function __construct() {
    $mysql_conn = new MySQL_Conn();
    $this->conn = $mysql_conn->conn;
  }
  
  public function create(): bool {
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);
    $this->TargetValue = preprocess_input($this->TargetValue);
    $this->DueDate = preprocess_input($this->DueDate);

    $sql = "INSERT INTO :table SET UserID=:1, CourseID=:2, TargetValue=:3, DueDate=:4";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":1", $this->UserID);
    $stmt->bind_param(":2", $this->CourseID);
    $stmt->bind_param(":3", $this->TargetValue);
    $stmt->bind_param(":4", $this->DueDate);
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }

  public function update(): bool {
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);
    $this->TargetValue = preprocess_input($this->TargetValue);
    $this->DueDate = preprocess_input($this->DueDate);

    $sql = "UPDATE :table SET TargetValue=:TargetValue, DueDate=:DueDate WHERE UserID=:UserID AND CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param(":TargetValue", $this->TargetValue);
    $stmt->bind_param(":DueDate", $this->DueDate);
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
}
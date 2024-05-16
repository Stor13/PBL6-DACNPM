<?php
include_once "../db/MySQL.php";

function preprocess_input($input): string {
  return htmlspecialchars(strip_tags($input));
}

class Rel_Account_Course {
  private mysqli $conn;
  private $table = "account_joined_table";
  public $UserID;
  public $CourseID;

  public function __construct() {
    $mysqli_conn = new MySQL_Conn();
    $this->conn = $mysqli_conn->conn;
  }

  public function create(): bool {
    $sql = "INSERT INTO :table SET UserID=:UserID, CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);

    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }

  public function getOne(): mysqli_result {
    $sql = "SELECT * FROM :table WHERE UserID=:UserID AND CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);

    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);

    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function get_UserID(): mysqli_result {
    $sql = "SELECT * FROM :table WHERE UserID=:UserID";
    $stmt = $this->conn->prepare($sql);

    $this->UserID = preprocess_input($this->UserID);

    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function get_CourseID(): mysqli_result {
    $sql = "SELECT * FROM :table WHERE CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);

    $this->CourseID = preprocess_input($this->CourseID);

    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function delete(): bool {
    $sql = "DELETE FROM :table WHERE UserID=:UserID AND CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);

    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);

    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;    
  }
}
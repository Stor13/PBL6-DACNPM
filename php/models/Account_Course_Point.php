<?php
require_once "../db/MySQL.php";

function preprocess_input($input): string {
  return htmlspecialchars(strip_tags($input));
}

class Account_Course_Point {
  private $conn;
  private $table;
  public $UserID;
  public $CourseID;
  public $Progress;
  public $Midterm;
  public $Final;
  public function __construct() {
    $mysql_conn = new MySQL_Conn();
    $this->conn = $mysql_conn->conn;
  }
 
  public function create():bool {
    $this->table = preprocess_input($this->table);
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);
    $this->Progress = preprocess_input($this->Progress);
    $this->Midterm = preprocess_input($this->Midterm);
    $this->Final = preprocess_input($this->Final);

    $sql = "INSERT INTO :table SET UserID=:UserID, CourseID=:CourseID, Progress=:Progress, Midterm=:Midterm, Final=:Final";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param(":Progress", $this->Progress);
    $stmt->bind_param(":Midterm", $this->Midterm);
    $stmt->bind_param(":Final", $this->Final);
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }

  public function get_UserID(): mysqli_result {
    $this->table = preprocess_input($this->table);
    $this->UserID = preprocess_input($this->UserID);

    $sql = "SELECT * FROM :table WHERE UserID=:UserID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function get_CourseID(): mysqli_result {
    $this->table = preprocess_input($this->table);
    $this->CourseID = preprocess_input($this->CourseID);

    $sql = "SELECT * FROM :table WHERE UserID=:UserID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function update(): bool {
    $this->table = preprocess_input($this->table);
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);
    $this->Progress = preprocess_input($this->Progress);
    $this->Midterm = preprocess_input($this->Midterm);
    $this->Final = preprocess_input($this->Final);

    $sql = "UPDATE :table SET UserID=:UserID, CourseID=:CourseID, Progress=:Progress, Midterm=:Midterm, Final=:Final";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param(":Progress", $this->Progress);
    $stmt->bind_param(":Midterm", $this->Midterm);
    $stmt->bind_param(":Final", $this->Final);
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }
}
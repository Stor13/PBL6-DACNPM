<?php
require_once("../db/MySQL.php");

function preprocess_input($input):string {
  return htmlspecialchars(strip_tags($input));
}

class Account_CourseCompletedLesson {
  private $conn;
  private $table = "account_courselesson_completed";
  public $UserID;
  public $CourseID;
  public $LessonID;

  public function __construct() {
    $mysql_conn = new MySQL_Conn();
    $this->conn = $mysql_conn->conn;
  }
  public function create(): bool {
    $this->table = preprocess_input($this->table);
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);
    $this->LessonID = preprocess_input($this->LessonID);

    $sql = "INSERT INTO :table SET UserID=:UserID, CourseID=:CourseID, LessonID=:LessonID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param(":LessonID", $this->LessonID);
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }
  public function delete(): bool {
    $this->table = preprocess_input($this->table);
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);
    $this->LessonID = preprocess_input($this->LessonID);

    $sql = "DELETE FROM :table WHERE UserID=:UserID AND CourseID=:CourseID AND LessonID=:LessonID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param(":LessonID", $this->LessonID);
    if ($stmt->execute()) return $stmt->affected_rows >0;
    return false;
  }

  public function get_UserID_CourseID(): mysqli_result {
    $this->table = preprocess_input($this->table);
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);

    $sql = "SELECT * FROM :table WHERE UserID=:UserID, CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function getOne(): mysqli_result {
    $this->table = preprocess_input($this->table);
    $this->UserID = preprocess_input($this->UserID);
    $this->CourseID = preprocess_input($this->CourseID);
    $this->LessonID = preprocess_input($this->LessonID);

    $sql = "SELECT * FROM :table WHERE UserID=:UserID, CourseID=:CourseID, LessonID=:LessonID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param(":LessonID", $this->LessonID);
    $stmt->execute();
    return $stmt->get_result();
  }
}
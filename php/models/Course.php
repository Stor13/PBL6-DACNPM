<?php
include_once "../db/MySQL.php";

function preprocess_input($input): string {
  return htmlspecialchars(strip_tags($input));  
}

class Course {
  private mysqli $conn;
  private $table = "course";
  public $CourseID;
  public $CourseName;
  public $ProgressRatio;
  public $MidtermRatio;
  public $FinalRatio;

  public function __construct() {
    $mysqli_conn = new MySQL_Conn();
    $this->conn = $mysqli_conn->conn;
  }

  public function create() {
    $sql = "INSERT INTO :table SET CourseID=:CourseID, CourseName=:CourseName,
            ProgressRatio=:ProgressRatio, MidtermRatio=:MidtermRatio,
            FinalRatio=:FinalRatio";
    $stmt = $this->conn->prepare($sql);

    $this->CourseID = preprocess_input($this->CourseID);
    $this->CourseName = preprocess_input($this->CourseName);
    $this->ProgressRatio = preprocess_input($this->ProgressRatio);
    $this->MidtermRatio = preprocess_input($this->MidtermRatio);
    $this->FinalRatio = preprocess_input($this->FinalRatio);

    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param(":CourseName", $this->CourseName);
    $stmt->bind_param(":ProgressRatio", $this->ProgressRatio);
    $stmt->bind_param(":MidtermRatio", $this->MidtermRatio);
    $stmt->bind_param(":FinalRatio", $this->FinalRatio);   
    
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    else return false;
  }

  public function getAll(): mysqli_result {
    $sql = "SELECT * FROM :table";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function getOne(): mysqli_result {
    $this->CourseID = preprocess_input($this->CourseID);
    $sql = "SELECT * FROM :table WHERE CourseID=:CourseID LIMIT 1";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function find($str): mysqli_result {
    $str = preprocess_input($str);
    $sql = "SELECT * FROM :table WHERE CourseID LIKE %:str% OR CourseName LIKE %:str%";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":str", $str);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function update(): bool {
    $this->CourseID = preprocess_input($this->CourseID);
    $this->CourseName = preprocess_input($this->CourseName);
    $this->ProgressRatio = preprocess_input($this->ProgressRatio);
    $this->MidtermRatio = preprocess_input($this->MidtermRatio);
    $this->FinalRatio = preprocess_input($this->FinalRatio);

    $sql = "UPDATE :table SET CourseName=:CourseName, 
            ProgressRatio=:ProgressRatio, MidtermRatio=:MidtermRatio, 
            FinalRatio=:FinalRatio WHERE CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param(":CourseName", $this->CourseName);
    $stmt->bind_param(":ProgressRatio", $this->ProgressRatio);
    $stmt->bind_param(":MidtermRatio", $this->MidtermRatio);
    $stmt->bind_param(":FinalRatio", $this->FinalRatio);

    if ($stmt->execute()) return $stmt->affected_rows;
    return false;
  }

  public function delete(): bool {
    $this->CourseID = preprocess_input($this->CourseID);
    $sql = "DELETE FROM :table WHERE CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":CourseID", $this->CourseID);
    if ($stmt->execute()) return $stmt->affected_rows;
    return false;
  }
}
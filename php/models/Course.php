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
  public $Progress_Ratio;
  public $Midterm_Ratio;
  public $Finaltest_Ratio;

  public function __construct() {
    $mysqli_conn = new MySQL_Conn();
    $this->conn = $mysqli_conn->conn;
  }

  public function create() {
    $sql = "INSERT INTO :table SET CourseID=:CourseID, CourseName=:CourseName,
            Progress_Ratio=:Progress_Ratio, Midterm_Ratio=:Midterm_Ratio,
            Finaltest_Ratio=:Finaltest_Ratio";
    $stmt = $this->conn->prepare($sql);

    $this->CourseID = preprocess_input($this->CourseID);
    $this->CourseName = preprocess_input($this->CourseName);
    $this->Progress_Ratio = preprocess_input($this->Progress_Ratio);
    $this->Midterm_Ratio = preprocess_input($this->Midterm_Ratio);
    $this->Finaltest_Ratio = preprocess_input($this->Finaltest_Ratio);

    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param("CourseName", $this->CourseName);
    $stmt->bind_param(":Progress_Ratio", $this->Progress_Ratio);
    $stmt->bind_param(":Midterm_Ratio", $this->Midterm_Ratio);
    $stmt->bind_param(":Finaltest_Ratio", $this->Finaltest_Ratio);   
    
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    else return false;
  }
}
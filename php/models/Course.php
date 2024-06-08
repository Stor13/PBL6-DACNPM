<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/db/MySQL.php";

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
    $sql = "INSERT INTO ".$this->table." SET CourseID=?, CourseName=?, ProgressRatio=?, MidtermRatio=?, FinalRatio=?";
    $stmt = $this->conn->prepare($sql);

    $this->CourseID = preprocess_input($this->CourseID);
    $this->CourseName = preprocess_input($this->CourseName);
    $this->ProgressRatio = preprocess_input($this->ProgressRatio);
    $this->MidtermRatio = preprocess_input($this->MidtermRatio);
    $this->FinalRatio = preprocess_input($this->FinalRatio);

    $stmt->bind_param(
      "ssddd",
      $this->CourseID,
      $this->CourseName,
      $this->ProgressRatio,
      $this->MidtermRatio,
      $this->FinalRatio
    );
    
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    else return false;
  }

  public function getAll(): mysqli_result {
    $sql = "SELECT * FROM ".$this->table;
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function getOne(): mysqli_result {
    $this->CourseID = preprocess_input($this->CourseID);
    $sql = "SELECT * FROM ".$this->table." WHERE CourseID=? LIMIT 1";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("s", $this->CourseID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function find($str): mysqli_result {
    $str = preprocess_input($str);
    $sql = "SELECT * FROM ".$this->table." WHERE CourseID LIKE %?% OR CourseName LIKE %?%";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("ss", $str, $str);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function update(): bool {
    $this->CourseID = preprocess_input($this->CourseID);
    $this->CourseName = preprocess_input($this->CourseName);
    $this->ProgressRatio = preprocess_input($this->ProgressRatio);
    $this->MidtermRatio = preprocess_input($this->MidtermRatio);
    $this->FinalRatio = preprocess_input($this->FinalRatio);

    $sql = "UPDATE $this->table SET CourseName=?, ProgressRatio=?, MidtermRatio=?, FinalRatio=? WHERE CourseID=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "sddds",
      $this->CourseName,
      $this->ProgressRatio,
      $this->MidtermRatio,
      $this->FinalRatio,
      $this->CourseID
    );

    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }

  public function delete(): bool {
    $this->CourseID = preprocess_input($this->CourseID);
    $sql = "DELETE FROM $this->table WHERE CourseID=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("s", $this->CourseID);
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }
}
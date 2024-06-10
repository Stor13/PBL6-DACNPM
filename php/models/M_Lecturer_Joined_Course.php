<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/db/MySQL.php";

class M_Lecturer_Joined_Course {
  private mysqli $conn;
  private $table = "lecturer_joined_course";
  public $CourseID;
  public $UserID;

  public function __construct() {
    $mysqli_conn = new MySQL_Conn();
    $this->conn = $mysqli_conn->conn;
  }

  private function preprocess_input($input): string {
    return htmlspecialchars(strip_tags($input));  
  }
  
  public function create(): bool {
    $this->table = $this->preprocess_input($this->table);
    $sql = "INSERT INTO $this->table SET UserID=?, CourseID=?";
    $stmt = $this->conn->prepare($sql);
    
    $this->UserID = $this->preprocess_input($this->UserID);
    $this->CourseID = $this->preprocess_input($this->CourseID);
    $stmt->bind_param("ss", $this->UserID, $this->CourseID);

    if ($stmt->execute()) return ($stmt->affected_rows > 0);
    return false;
  }

  public function getAll_UserID(): mysqli_result {
    $this->table = $this->preprocess_input($this->table);
    $sql = "SELECT * FROM $this->table WHERE UserID=?";
    $stmt = $this->conn->prepare($sql);

    $this->UserID = $this->preprocess_input($this->UserID);
    $stmt->bind_param("s", $this->UserID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function getAll_CourseID(): mysqli_result {
    $this->table = $this->preprocess_input($this->table);
    $sql = "SELECT * FROM $this->table WHERE CourseID=?";
    $stmt = $this->conn->prepare($sql);

    $this->CourseID = $this->preprocess_input($this->CourseID);
    $stmt->bind_param("s", $this->CourseID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function getOne(): mysqli_result {
    $this->table = $this->preprocess_input($this->table);
    $sql = "SELECT * FROM $this->table WHERE UserID=?, CourseID=?";
    $stmt = $this->conn->prepare($sql);

    $this->UserID = $this->preprocess_input($this->UserID);
    $this->CourseID = $this->preprocess_input($this->CourseID);
    $stmt->bind_param("ss", $this->UserID, $this->CourseID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function delete(): bool {
    $this->table = $this->preprocess_input($this->table);
    $sql = "DELETE FROM $this->table WHERE UserID=?, CourseID=?";
    $stmt = $this->conn->prepare($sql);

    $this->UserID = $this->preprocess_input($this->UserID);
    $this->CourseID = $this->preprocess_input($this->CourseID);
    $stmt->bind_param("ss", $this->UserID, $this->CourseID);
    if ($stmt->execute()) return ($stmt->affected_rows > 0);
    return false;
  }
}
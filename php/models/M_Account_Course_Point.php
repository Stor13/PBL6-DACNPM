<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/db/MySQL.php";

class M_Account_Course_Point {
  private mysqli $conn;
  private $table = "account_course_point";

  public $UserID;
  public $CourseID;
  public $ProgressPoint;
  public $MidtermPoint;
  public $FinalPoint;

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
    $this->ProgressPoint = $this->preprocess_input($this->ProgressPoint);
    $this->MidtermPoint = $this->preprocess_input($this->MidtermPoint);
    $this->FinalPoint = $this->preprocess_input($this->FinalPoint);

    $sql = "INSERT INTO $this->table SET UserID=?, CourseID=?, ProgressPoint=?, MidtermPoint=?, FinalPoint=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "ssddd",
      $this->UserID,
      $this->CourseID,
      $this->ProgressPoint,
      $this->MidtermPoint,
      $this->FinalPoint
    );
    if ($stmt->execute()) return ($stmt->affected_rows > 0);
    return false;
  }

  public function update(): bool {
    $this->UserID = $this->preprocess_input($this->UserID);
    $this->CourseID = $this->preprocess_input($this->CourseID);
    $this->ProgressPoint = $this->preprocess_input($this->ProgressPoint);
    $this->MidtermPoint = $this->preprocess_input($this->MidtermPoint);
    $this->FinalPoint = $this->preprocess_input($this->FinalPoint);

    $sql = "UPDATE $this->table SET ProgressPoint=?, MidtermPoint=?, FinalPoint=? WHERE UserID=?, CourseID=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "dddss",
      $this->ProgressPoint,
      $this->MidtermPoint,
      $this->FinalPoint,
      $this->UserID,
      $this->CourseID
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

  public function getAll_CourseID(): mysqli_result {
    $this->CourseID = $this->preprocess_input($this->CourseID);
    $sql = "SELECT * FROM $this->table WHERE CourseID=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "s",
      $this->CourseID
    );
    $stmt->execute();
    return $stmt->get_result();
  }
}
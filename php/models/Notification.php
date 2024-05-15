<?php
require_once "../db/MySQL.php";

function preprocess_input($a): string {
  return htmlspecialchars(strip_tags($a));
}

class Notification {
  private mysqli $conn;
  private $table = "notification";
  public $NotificationID;
  public $Label;
  public $Content;
  public $IsToCourse;
  public $CourseID;
  public $CreatedDate;

  public function __construct() {
    $mysqli_conn = new MySQL_Conn();
    $this->conn = $mysqli_conn->conn;
  }
  public function create(): bool {
    $sql = "INSERT INTO :table SET NotificationID=:NotificationID, 
            Label=:Label, Content=:Content, CreatedDate=:CreatedDate, 
            IsToCourse=:IsToCourse, CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);

    $this->NotificationID = preprocess_input($this->NotificationID);
    $this->Label = preprocess_input($this->Label);
    $this->Content = preprocess_input($this->NotificationID);
    $this->CreatedDate = preprocess_input($this->CreatedDate);
    $this->IsToCourse = preprocess_input($this->IsToCourse);
    $this->CourseID = preprocess_input($this->CourseID);

    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":NotificationID", $this->NotificationID);
    $stmt->bind_param(":Label", $this->Label);
    $stmt->bind_param(":Content", $this->Content);
    $stmt->bind_param(":CreatedDate", $this->CreatedDate);
    $stmt->bind_param(":IsToCourse", $this->IsToCourse);
    $stmt->bind_param(":CourseID", $this->CourseID);

    return ($stmt->execute());
  }
  public function getOne($id): mysqli_result {
    $sql = "SELECT * FROM :table WHERE NotificationID=:NotificationID LiMIT 1";
    $stmt = $this->conn->prepare($sql);
    $id = preprocess_input($id);
    
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":UserID", $id);
    $stmt->execute();
    return $stmt->get_result();
  }
  public function getPage($offset, $limit): mysqli_result {
    $sql = "SELECT * FROM :table LIMIT :limit OFFSET :offset";
    $stmt = $this->conn->prepare($sql);

    $offset = preprocess_input($offset);
    $limit = preprocess_input($limit);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":offset", $offset);
    $stmt->bind_param(":limit", $limit);

    $stmt->execute();
    return $stmt->get_result();
  }
  public function find($str): mysqli_result {
    $str = preprocess_input($str);
    $sql = "SELECT * FROM :table WHERE Label LIKE %:str% 
            OR Content LIKE %:str% OR CourseID LIKE %:str%";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":str", $str);
    $stmt->bind_param(":table", $this->table);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function update(): bool {
    $this->NotificationID = preprocess_input($this->NotificationID);
    $this->Label = preprocess_input($this->Label);
    $this->Content = preprocess_input($this->NotificationID);
    $this->CreatedDate = preprocess_input($this->CreatedDate);
    $this->IsToCourse = preprocess_input($this->IsToCourse);
    $this->CourseID = preprocess_input($this->CourseID);

    $sql = "UPDATE :table SET NotificationID=:NotificationID, Label=:Label, 
            Content=:Content, CreatedDate=:CreatedDate, IsToCourse=:IsToCourse,
            CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":NotificationID", $this->NotificationID);
    $stmt->bind_param(":Label", $this->Label);
    $stmt->bind_param(":Content", $this->Content);
    $stmt->bind_param(":CreatedDate", $this->CreatedDate);
    $stmt->bind_param(":IsToCourse", $this->IsToCourse);
    $stmt->bind_param(":CourseID", $this->CourseID);
    
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    else return false;
  }
}
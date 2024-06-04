<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/db/MySQL.php";

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
    $sql = "INSERT INTO ".$this->table." SET NotificationID=?, 
            Label=?, Content=?, CreatedDate=?, 
            IsToCourse=?, CourseID=?";
    $stmt = $this->conn->prepare($sql);

    $this->NotificationID = preprocess_input($this->NotificationID);
    $this->Label = preprocess_input($this->Label);
    $this->Content = preprocess_input($this->NotificationID);
    $this->CreatedDate = preprocess_input($this->CreatedDate);
    $this->IsToCourse = preprocess_input($this->IsToCourse);
    $this->CourseID = preprocess_input($this->CourseID);

    $stmt->bind_param("ssssss",
      $this->NotificationID,
      $this->Label,
      $this->Content,
      $this->CreatedDate,
      $this->IsToCourse,
      $this->CourseID
    );

    return ($stmt->execute());
  }
  public function getOne(): mysqli_result {
    $this->table = preprocess_input($this->table);
    $this->NotificationID = preprocess_input($this->NotificationID);

    $sql = "SELECT * FROM ".$this->table." WHERE NotificationID=:NotificationID LiMIT 1";
    $stmt = $this->conn->prepare($sql);
    
    
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":NotificationID", $this->NotificationID);
    $stmt->execute();
    return $stmt->get_result();
  }
  public function getPage($offset, $limit): mysqli_result {
    $this->table = preprocess_input($this->table);
    $offset = preprocess_input($offset);
    $limit = preprocess_input($limit);

    $sql = "SELECT * FROM ".$this->table." LIMIT ".$limit." OFFSET ".$offset;
    $stmt = $this->conn->prepare($sql);

    $stmt->execute();
    return $stmt->get_result();
  }
  public function find($str): mysqli_result {
    $this->table = preprocess_input($this->table);
    $str = preprocess_input($str);

    $sql = "SELECT * FROM ".$this->table." WHERE Label LIKE %:str% 
            OR Content LIKE %:str% OR CourseID LIKE %:str%";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":str", $str);
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

    $sql = "UPDATE ".$this->table." SET NotificationID=:NotificationID, Label=:Label, 
            Content=:Content, CreatedDate=:CreatedDate, IsToCourse=:IsToCourse,
            CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":NotificationID", $this->NotificationID);
    $stmt->bind_param(":Label", $this->Label);
    $stmt->bind_param(":Content", $this->Content);
    $stmt->bind_param(":CreatedDate", $this->CreatedDate);
    $stmt->bind_param(":IsToCourse", $this->IsToCourse);
    $stmt->bind_param(":CourseID", $this->CourseID);
    
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }

  public function delete(): bool {
    $this->table = preprocess_input($this->table);
    $this->NotificationID = preprocess_input($this->NotificationID);

    $sql = "DELETE FROM ".$this->table." WHERE NotificationID=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "s", 
      $this->NotificationID
    );
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }
}
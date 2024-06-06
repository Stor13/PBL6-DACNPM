<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/db/MySQL.php";

function preprocess_input($a): string|bool|null {
  if (is_string($a)) return htmlspecialchars(strip_tags($a));
  return $a;
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

  function getPreparedQuery($stmt, $sql, $params) {
    $param_types = array_shift($params);
    $param_count = strlen($param_types);

    for ($i = 0; $i < $param_count; $i++) {
        $sql = preg_replace('/\?/', '"' . $params[$i] . '"', $sql, 1);
    }

    return $sql;
  }

  public function create(): bool {
    $this->table = preprocess_input($this->table);
    $this->Label = preprocess_input($this->Label);
    $this->Content = preprocess_input($this->Content);
    $this->IsToCourse = preprocess_input($this->IsToCourse);
    $this->CourseID = preprocess_input($this->CourseID);
    $this->CreatedDate = date("Y-m-d");

    $sql = "INSERT INTO $this->table SET Label=?,
    Content=?, IsToCourse=?, CourseID=?, CreatedDate=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "ssiss",
      $this->Label,
      $this->Content,
      $this->IsToCourse,
      $this->CourseID,
      $this->CreatedDate
    );
    if ($stmt->execute() === true) return ($stmt->affected_rows > 0);
    return false;
    
  }

  public function getOne(): mysqli_result {
    $this->table = preprocess_input($this->table);
    $this->NotificationID = preprocess_input($this->NotificationID);

    $sql = "SELECT * FROM ".$this->table." WHERE NotificationID=? LiMIT 1";
    $stmt = $this->conn->prepare($sql);
    
    $stmt->bind_param("s", $this->NotificationID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function get_NotificationToAll(): mysqli_result {
    $this->table = preprocess_input($this->table);
    $this->IsToCourse = preprocess_input(false);

    $sql = "SELECT * FROM $this->table WHERE IsToCourse=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("s", $this->IsToCourse);

    $stmt->execute();
    return $stmt->get_result();
  }

  public function get_NotificationToCourse(): mysqli_result {
    $this->table = preprocess_input($this->table);
    $this->IsToCourse = preprocess_input(true);

    $sql = "SELECT * FROM $this->table WHERE IsToCourse=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("s", $this->IsToCourse);
    
    $stmt->execute();
    return $stmt->get_result();
  }

  public function find($str): mysqli_result {
    $this->table = preprocess_input($this->table);
    $str = preprocess_input($str);

    $sql = "SELECT * FROM ".$this->table." WHERE Label LIKE %?% 
            OR Content LIKE %?% OR CourseID LIKE %?%";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("sss", $str, $str, $str);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function update(): bool {
    $this->NotificationID = preprocess_input($this->NotificationID);
    $this->Label = preprocess_input($this->Label);
    $this->Content = preprocess_input($this->Content);
    $this->IsToCourse = preprocess_input($this->IsToCourse);
    $this->CourseID = preprocess_input($this->CourseID);

    $sql = "UPDATE ".$this->table." SET Label=?, 
            Content=?, IsToCourse=?, CourseID=? WHERE NotificationID=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "ssisi", 
      $this->Label, 
      $this->Content, 
      $this->IsToCourse, 
      $this->CourseID,
      $this->NotificationID
    );
    
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }

  public function delete(): bool {
    $this->table = preprocess_input($this->table);
    $this->NotificationID = preprocess_input($this->NotificationID);

    $sql = "DELETE FROM ".$this->table." WHERE NotificationID=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(
      "i", 
      $this->NotificationID
    );
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }
}
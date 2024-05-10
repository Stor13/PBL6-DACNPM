<?php
require_once "../db/mysql_dbConnection.php";

class NotificationModel extends MySQLDatabase {
  protected $table = "notification";

  public function getAll() {
    $sql = "SELECT * FROM $this->table";
    $result = $this->executeQuery($sql);
    if (is_bool($result)) return [];
    return $this->fetchData($result);
  }

  public function getOne_ID($id) {
    $id = $this->conn->real_escape_string($id);
    $sql = "SELECT * FROM $this->table WHERE NotificationID = $id";
    $result = $this->executeQuery($sql);
    if (is_bool($result)) return null;
    if (mysqli_num_rows($result) >= 1) {
      $temp = mysqli_fetch_assoc($result);
      if (!is_array($temp)) return null;
      return $temp;
    }
    return null;
  }

  public function getPage($pageNumber, $limit = 10) {
    if ($pageNumber < 1) return false;
    $offset = ($pageNumber - 1) * $limit;
    $sql = "SELECT * FROM $this->table OFFSET $offset LIMIT $limit";
    $result = $this->executeQuery($sql);
    if (is_bool($result)) return [];
    return $this->fetchData($result);
  }

  public function find_common($str) {
    $str = $this->conn->real_escape_string($str);
    $sql = "SELECT * FROM $this->table WHERE (IsToCourse = false) AND ((Label LIKE '%$str%') OR (Content LIKE '%$str%')) ORDER BY CreatedDate";
    $result = $this->executeQuery($sql);
    return $result;
  }

  public function find_toCourse($str) {
    $str = $this->conn->real_escape_string($str);
    $sql = "SELECT * FROM $this->table WHERE (IsToCourse = true) AND ((Label LIKE '%$str%') OR (Content LIKE '%$str%') OR (CourseID LIKE '%$str%')) ORDER BY CreatedDate";
    $result = $this->executeQuery($sql);
    return $result;
  }

  public function add(
    $label, $content, $isToCourse, $courseID
  ) {
    $label = $this->conn->real_escape_string($label);
    $content = $this->conn->real_escape_string($content);
    $isToCourse = $this->conn->real_escape_string($isToCourse);
    $courseID = $this->conn->real_escape_string($courseID);
    $sql = "INSERT INTO $this->table (Label, Content, IsToCourse, CourseID) VALUES ($label, $content, $isToCourse, $courseID)";
    $result = $this->executeQuery($sql);
    return $result;
  }

  public function update(
    $id, $label, $content, $isToCourse, $courseID
  ) {
    $id = $this->conn->real_escape_string($id);
    $label = $this->conn->real_escape_string($label);
    $content = $this->conn->real_escape_string($content);
    $isToCourse = $this->conn->real_escape_string($isToCourse);
    $courseID = $this->conn->real_escape_string($courseID);
    $sql = "UPDATE $this->table SET Label = $label, Content = $content, IsToCourse = $isToCourse, CourseID = $courseID WHERE NotificationID = $id";
    return $this->executeQuery($sql);
  }

  public function delete($id) {
    $id = $this->conn->real_escape_string($id);
    $sql = "DELETE FROM $this->table WHERE NotificationID = $id";
    return $this->executeQuery($sql);
  }

  public function get_affected_rows() {
    return $this->conn->affected_rows;
  }
}
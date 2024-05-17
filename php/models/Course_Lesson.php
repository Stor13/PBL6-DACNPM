<?php
require_once "../db/MySQL.php";
function preprocess_input($input): string {
  return htmlspecialchars(strip_tags($input));
}

class Course_Lesson {
  private $conn;
  private $table = "course_lesson";
  public $LessonID;
  public $CourseID;
  public $Name;
  public $Content;
  public $Exercise;
  public function __construct() {
    $mysqli_conn = new MySQL_Conn();
    $this->conn = $mysqli_conn->conn;
  }
  public function create(): bool {
    $this->table = preprocess_input($this->table);
    $this->LessonID = preprocess_input($this->LessonID);
    $this->CourseID = preprocess_input($this->CourseID);
    $this->Name = preprocess_input($this->Name);
    $this->Content = preprocess_input($this->Content);
    $this->Exercise = preprocess_input($this->Exercise);

    $sql = "INSERT INTO :table SET LessonID=:LessonID, CourseID=:CourseID,
            Name=:Name, Content=:Content, Exercise=:Exercise";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":LessonID", $this->LessonID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param(":Name", $this->Name);
    $stmt->bind_param(":Content", $this->Content);
    $stmt->bind_param(":Exercise", $this->Exercise);
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }

  public function update(): bool {
    $this->table = preprocess_input($this->table);
    $this->LessonID = preprocess_input($this->LessonID);
    $this->CourseID = preprocess_input($this->CourseID);
    $this->Name = preprocess_input($this->Name);
    $this->Content = preprocess_input($this->Content);
    $this->Exercise = preprocess_input($this->Exercise);

    $sql = "UPDATE :table SET Name=:Name, Content=:Content, Exercise=:Exercise
            WHERE LessonID=:LessonID AND CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":LessonID", $this->LessonID);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->bind_param(":Name", $this->Name);
    $stmt->bind_param(":Content", $this->Content);
    $stmt->bind_param(":Exercise", $this->Exercise);
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }

  public function get_CourseID(): mysqli_result {
    $this->table = preprocess_input($this->table);
    $this->CourseID = preprocess_input($this->CourseID);

    $sql = "SELECT * FROM :table WHERE CourseID=:CourseID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":CourseID", $this->CourseID);
    $stmt->execute();
    return $stmt->get_result();
  }
  public function get_LessonID(): mysqli_result {
    $this->table = preprocess_input($this->table);
    $this->LessonID = preprocess_input($this->LessonID);

    $sql = "SELECT * FROM :table WHERE LessonID=:LessonID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":LessonID", $this->LessonID);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function delete(): bool {
    $this->table = preprocess_input($this->table);
    $this->LessonID = preprocess_input($this->LessonID);

    $sql = "DELETE FROM :table WHERE LessonID=:LessonID";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":table", $this->table);
    $stmt->bind_param(":LessonID", $this->LessonID);
    if ($stmt->execute()) return $stmt->affected_rows > 0;
    return false;
  }
}
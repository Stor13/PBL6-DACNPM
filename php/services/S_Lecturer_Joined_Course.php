<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/models/M_Lecturer_Joined_Course.php";

class S_Lecturer_Joined_Course {
  private $instance;
  public function __construct() {
    $this->instance = new M_Lecturer_Joined_Course();    
  }

  public function create(
    $UserID, $CourseID
  ): bool {
    $this->instance->UserID = $UserID;
    $this->instance->CourseID = $CourseID;
    return $this->instance->create();
  }

  public function getAll_UserID(
    $UserID
  ): array {
    $this->instance->UserID = $UserID;
    $stmt_result = $this->instance->getAll_UserID();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }

  public function getAll_CourseID(
    $CourseID
  ): array {
    $this->instance->CourseID = $CourseID;
    $stmt_result = $this->instance->getAll_CourseID();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }

  public function getOne(
    $UserID, $CourseID
  ): array|null {
    $this->instance->UserID = $UserID;
    $this->instance->CourseID = $CourseID;
    $stmt_result = $this->instance->getOne();
    $result = $stmt_result->fetch_assoc();
    if (is_array($result) == false) return null;
    return $result;
  }

  public function delete(
    $UserID, $CourseID
  ): bool {
    $this->instance->UserID = $UserID;
    $this->instance->CourseID = $CourseID;
    return $this->instance->delete();
  }
}
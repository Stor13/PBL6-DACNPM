<?php
require_once "../models/Account_Course.php";

class S_Rel_Account_Course {
  private $rel;
  public function __construct() {
    $this->rel = new Rel_Account_Course();
  }

  public function create(
    $UserID, $CourseID
  ): bool {
    $this->rel->UserID = $UserID;
    $this->rel->CourseID = $CourseID;

    return $this->rel->create();
  }

  public function getOne(
    $UserID, $CourseID
  ): array|null {
    $this->rel->UserID = $UserID;
    $this->rel->CourseID = $CourseID;

    $stmt_result = $this->rel->getOne();
    $result = $stmt_result->fetch_assoc();
    if (is_array($result) == false) return null;
    return $result;
  }

  public function get_UserID(
    $UserID
  ): array {
    $this->rel->UserID = $UserID;
    $stmt_result = $this->rel->get_UserID();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }

  public function get_CourseID(
    $CourseID
  ): array {
    $this->rel->CourseID = $CourseID;
    $stmt_result = $this->rel->get_CourseID();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }

  public function delete(
    $UserID, $CourseID
  ): bool {
    $rel = $this->getOne($UserID, $CourseID);
    if ($rel == null) return false;
    
    $this->rel->UserID = $UserID;
    $this->rel->CourseID = $CourseID;
    return $this->rel->delete();
  }
}
<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/models/M_Account_Course_PointTarget.php";

class S_Account_Course_PointTarget {
  private $instance;  
  public function __construct() {
    $this->instance = new M_Account_Course_PointTarget();    
  }

  public function create(
    $UserID, $CourseID, $TargetType, $TargetValue
  ): bool {
    $this->instance->UserID = $UserID;
    $this->instance->CourseID = $CourseID;
    $this->instance->TargetType = $TargetType;
    $this->instance->TargetValue = $TargetValue;
    return $this->instance->create();
  }

  public function update(
    $UserID, $CourseID, $TargetType, $TargetValue
  ): bool {
    $this->instance->UserID = $UserID;
    $this->instance->CourseID = $CourseID;
    $this->instance->TargetType = $TargetType;
    $this->instance->TargetType = $TargetValue;
    return $this->instance->update();
  }

  public function getAll_UserID(string $UserID): array {
    $this->instance->UserID = $UserID;
    $stmt_result = $this->instance->getAll_UserID();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }

  public function getAll_UserID_CourseID(string $UserID, string $CourseID): array {
    $this->instance->UserID = $UserID;
    $this->instance->CourseID = $CourseID;
    $stmt_result = $this->instance->getAll_UserID_CourseID();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }
}
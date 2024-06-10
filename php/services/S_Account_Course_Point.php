<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/models/M_Account_Course_Point.php";

class S_Account_Course_Point {
  private $instance;
  public function __construct() {
    $this->instance = new M_Account_Course_Point();    
  }

  public function create(
    $UserID, $CourseID
  ): bool {
    $this->instance->UserID = $UserID;
    $this->instance->CourseID = $CourseID;
    return $this->instance->create();
  }

  public function update(
    $UserID, $CourseID, $ProgressPoint, $MidtermPoint, $FinalPoint
  ): bool {
    $this->instance->UserID = $UserID;
    $this->instance->CourseID = $CourseID;
    $this->instance->ProgressPoint = $ProgressPoint;
    $this->instance->MidtermPoint = $MidtermPoint;
    $this->instance->FinalPoint = $FinalPoint;

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

  public function getAll_CourseID(string $CourseID): array {
    $this->instance->CourseID = $CourseID;
    $stmt_result = $this->instance->getAll_CourseID();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }
}
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/models/Course.php";

class S_Course {
  private $course;
  public function __construct() {
    $this->course = new Course();
  }

  public function create(
    $CourseID, $CourseName, $ProgressRatio, $MidtermRatio, $FinalRatio
  ): bool {
    $this->course->CourseID = $CourseID;
    $this->course->CourseName = $CourseName;
    $this->course->ProgressRatio = $ProgressRatio;
    $this->course->MidtermRatio = $MidtermRatio;
    $this->course->FinalRatio = $FinalRatio;

    return $this->course->create();
  }

  public function getAll(): array {
    $stmt_result = $this->course->getAll();
    $result = [];
    $remove_keys = ["ProgressRatio", "MidtermRatio", "FinalRatio"];
    while ($row = $stmt_result->fetch_assoc()) {
      foreach ($remove_keys as $k)
        if (isset($row[$k])) unset($row[$k]);
      $result[] = $row;
    }
    return $result;
  }

  public function getOne($id): array|null {
    $this->course->CourseID = $id;
    $stmt_result = $this->course->getOne();
    $result = $stmt_result->fetch_assoc();
    if (is_array($result) == false) return null;
    return $result;
  }

  public function find($str): array {
    $stmt_result = $this->course->find($str);
    $result = [];
    $remove_keys = ["ProgressRatio", "MidtermRatio", "FinalRatio"];
    while ($row = $stmt_result->fetch_assoc()) {
      foreach ($remove_keys as $k)
        if (isset($row[$k])) unset($row[$k]);
      $result[] = $row;
    }
    return $result;
  }

  public function update(
    $CourseID, $CourseName, $ProgressRatio, $MidtermRatio, $FinalRatio
  ): bool {
    $course = $this->getOne($CourseID);
    if ($course == null) return false;

    $this->course->CourseID = $course["CourseID"];
    $this->course->CourseName = $CourseName;
    $this->course->ProgressRatio = $ProgressRatio;
    $this->course->MidtermRatio = $MidtermRatio;
    $this->course->FinalRatio = $FinalRatio;

    return $this->course->update();
  }

  public function delete($CourseID): bool {
    $this->course->CourseID = $CourseID;
    $course = $this->course->getOne();
    
    if ($course == null) return false;
    return $this->course->delete();
  }
}
<?php
require_once "../models/Account_Course_Point.php";

class S_Account_Course_Point {
  private $model;
  public function __construct() {
    $this->model = new Account_Course_Point();
  }
  public function create(
    $UserID, $CourseID, $Progress, $Midterm, $Final
  ): bool {
    $this->model->UserID = $UserID;
    $this->model->CourseID = $CourseID;
    $this->model->Progress = $Progress;
    $this->model->Midterm = $Midterm;
    $this->model->Final = $Final;
    return $this->model->create();
  }
  public function get_UserID(
    $UserID
  ): array {
    $this->model->UserID = $UserID;
    $stmt_result = $this->model->get_UserID();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }

  public function get_CourseID(
    $CourseID
  ): array {
    $this->model->CourseID = $CourseID;
    $stmt_result = $this->model->get_CourseID();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }

  public function update(
    $UserID, $CourseID, $Progress, $Midterm, $Final
  ): bool {
    $this->model->UserID = $UserID;
    $this->model->CourseID = $CourseID;
    $this->model->Progress = $Progress;
    $this->model->Midterm = $Midterm;
    $this->model->Final = $Final;

    return $this->model->update();
  }
}
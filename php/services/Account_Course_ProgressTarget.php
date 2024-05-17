<?php
require_once "../models/Account_Course_ProgressTarget.php.php";

class S_Account_Course_ProgressTarget {
  private $model;
  public function __construct() {
    $this->model = new Account_Course_ProgressTarget();
  }

  public function create(
    $UserID, $CourseID, $DueDate, $TargetValue
  ): bool {
    $this->model->UserID = $UserID;
    $this->model->CourseID = $CourseID;
    $this->model->DueDate = $DueDate;
    $this->model->TargetValue = $TargetValue;
    return $this->model->create();
  }

  public function update(
    $UserID, $CourseID, $DueDate, $TargetValue
  ): bool {
    $this->model->UserID = $UserID;
    $this->model->CourseID = $CourseID;
    $this->model->DueDate = $DueDate;
    $this->model->TargetValue = $TargetValue;
    return $this->model->create();
  }

  public function delete(
    $UserID, $CourseID
  ): bool {
    $this->model->UserID = $UserID;
    $this->model->CourseID = $CourseID;
    return $this->model->create();
  }

  public function get_UserID_CourseID(
    $UserID, $CourseID
  ): array {
    $this->model->UserID = $UserID;
    $this->model->CourseID = $CourseID;
    $stmt_result = $this->model->get_UserID_CourseID();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
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
}
<?php
require_once "../models/Account_Course_CompletedLesson.php";

class S_Account_Course_CompletedLesson {
  private $model;
  public function __construct() {
    $this->model = new Account_Course_CompletedLesson();
  }
  public function create(
    $UserID, $CourseID, $LessonID
  ):bool {
    $this->model->UserID = $UserID;
    $this->model->CourseID = $CourseID;
    $this->model->LessonID = $LessonID;
    return $this->model->create();
  }

  public function delete(
    $UserID, $CourseID, $LessonID
  ): bool {
    $this->model->UserID = $UserID;
    $this->model->CourseID = $CourseID;
    $this->model->LessonID = $LessonID;
    return $this->model->delete();
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

  public function getOne(
    $UserID, $CourseID, $LessonID
  ): array|null {
    $this->model->UserID = $UserID;
    $this->model->CourseID = $CourseID;
    $this->model->LessonID = $LessonID;
    
    $stmt_result = $this->model->getOne();
    return $stmt_result->fetch_assoc();
  }
}
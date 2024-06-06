<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/models/Notification.php";

class S_Notification {
  private $noti;

  public function __construct() {
    $this->noti = new Notification();
  }

  private function generate_ID(): string {
    $data = random_bytes(16);

    $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
      
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
  }

  private function create_new_NotificationID():string {
    $id = $this->generate_ID();
    while ($this->getOne($id) != null) $id = $this->generate_ID();
    return $id;
  }

  public function create_notification(
    $Label, $Content, $IsToCourse, $CourseID
  ): bool {
    $this->noti->Label = $Label;
    $this->noti->Content = $Content;
    $this->noti->IsToCourse = $IsToCourse;
    $this->noti->CourseID = $CourseID;
    $this->noti->NotificationID = $this->create_new_NotificationID();
    $this->noti->CreatedDate = date("Y-m-d"); 
    return $this->noti->create();
  }

  public function getOne($id): array|null {
    $this->noti->NotificationID = $id;
    $stmt_result = $this->noti->getOne();
    $result = $stmt_result->fetch_assoc();
    if (is_array($result) == false) return null;
    return $result;
  }

  public function get_NotificationToAll(): array {
    $stmt_result = $this->noti->get_NotificationToAll();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }

  public function get_NotificationToCourse(): array {
    $stmt_result = $this->noti->get_NotificationToCourse();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }

  public function find($str): array {
    $stmt_result = $this->noti->find($str);
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      $result[] = $row;
    }
    return $result;
  }

  public function update_Notification(
    $NotificationID, $Label, $Content, $IsToCourse, $CourseID
  ): bool {
    $noti = $this->getOne($NotificationID);
    if ($noti == null) return false;

    $this->noti->NotificationID = $noti["NotificationID"];
    $this->noti->Label = $Label;
    $this->noti->Content = $Content;
    $this->noti->IsToCourse = $IsToCourse;
    $this->noti->CourseID = $CourseID;
    $this->noti->CreatedDate = date('Y-m-d');

    return $this->noti->update();
  }
  
  public function delete(
    $NotificationID
  ): bool {
    $noti = $this->getOne($NotificationID);
    if ($noti === null) return false;

    $this->noti->NotificationID = $NotificationID;
    return $this->noti->delete();
  }
}
<?php
require_once "../models/Account.php";

class S_Account {
  private $account;
  private $remove_keys = ["Password"];
  public function __construct() {
    $this->account = new Account();
  }

  public function create_Account(
    $UserID, $Password, $Role, $Email, $Name, $DoB, $PhoneNumber, $IsLocked
  ) {
    $this->account->UserID = $UserID;
    $this->account->Password = $Password;
    $this->account->Role = $Role;
    $this->account->Email = $Email;
    $this->account->Name = $Name;
    $this->account->DoB = $DoB;
    $this->account->PhoneNumber = $PhoneNumber;
    $this->account->IsLocked = $IsLocked;

    return $this->account->create();
  }

  public function getAll(): array {
    $stmt_result = $this->account->getAll();
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      foreach ($this->remove_keys as $k) {
        if (isset($row[$k])) unset($row[$k]);
      }
      $result[] = $row;
    }
    return $result;
  }

  public function get_Page(int $page, int $limit): array {
    $offset = max(0, $page - 1) * $limit;
    $stmt_result = $this->account->get_Page($offset, $limit);
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      foreach ($this->remove_keys as $k) {
        if (isset($row[$k])) unset($row[$k]);
      }
      $result[] = $row;
    }
    return $result;
  }

  public function getOne_UserID(string $id): array|null {
    $result = $this->_getOne_UserID($id);
    if (is_array($result) == false) return null;
    foreach ($this->remove_keys as $k) {
      if (isset($result[$k])) unset($result[$k]);
    }
    return $result;
  }

  public function _getOne_UserID(string $id): array|null {
    $this->account->UserID = $id;
    $stmt_result = $this->account->getOne_UserID();
    $result = $stmt_result->fetch_assoc();
    if (isset($result["Password"])) unset($result["Password"]);
    if (is_array($result) == false) return null;
    return $result;
  }

  public function update(): bool {
    return $this->account->update();
  }

  public function update_Password(
    $UserID, $Password
  ): bool {
    $account = $this->_getOne_UserID($UserID);
    if ($account == null) return false;
    
    $this->account->UserID = $account["UserID"];
    $this->account->Password = $Password;
    $this->account->Role = $account["Role"];
    $this->account->Email = $account["Email"];
    $this->account->Name = $account["Name"];
    $this->account->DoB = $account["DoB"];
    $this->account->PhoneNumber = $account["PhoneNumber"];
    $this->account->IsLocked = $account["IsLocked"];
    
    return $this->update();
  }

  public function update_Lock(
    $UserID
  ): bool {
    $account = $this->_getOne_UserID($UserID);
    if ($account == null) return false;
    
    $this->account->UserID = $account["UserID"];
    $this->account->Password = $account["Password"];
    $this->account->Role = $account["Role"];
    $this->account->Email = $account["Email"];
    $this->account->Name = $account["Name"];
    $this->account->DoB = $account["DoB"];
    $this->account->PhoneNumber = $account["PhoneNumber"];
    $this->account->IsLocked = true;
    
    return $this->update();
  }

  public function update_Unlock(
    $UserID
  ): bool {
    $account = $this->_getOne_UserID($UserID);
    if ($account == null) return false;
    
    $this->account->UserID = $account["UserID"];
    $this->account->Password = $account["Password"];
    $this->account->Role = $account["Role"];
    $this->account->Email = $account["Email"];
    $this->account->Name = $account["Name"];
    $this->account->DoB = $account["DoB"];
    $this->account->PhoneNumber = $account["PhoneNumber"];
    $this->account->IsLocked = false;
    
    return $this->update();
  }

  public function update_Information(
    $UserID, $Name, $DoB, $PhoneNumber
  ): bool {
    $account = $this->_getOne_UserID($UserID);
    if ($account == null) return false;
    
    $this->account->UserID = $account["UserID"];
    $this->account->Password = $account["Password"];
    $this->account->Role = $account["Role"];
    $this->account->Email = $account["Email"];
    $this->account->Name = $Name;
    $this->account->DoB = $DoB;
    $this->account->PhoneNumber = $PhoneNumber;
    $this->account->IsLocked = $account["IsLocked"];
    
    return $this->update();
  }

  public function find($str): array {
    $stmt_result = $this->account->find($str);
    $result = [];
    while ($row = $stmt_result->fetch_assoc()) {
      foreach ($this->remove_keys as $k) {
        if (isset($row[$k])) unset($row[$k]);
      }
      $result[] = $row;
    }
    return $result;
  }
}
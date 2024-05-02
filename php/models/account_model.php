<?php
require_once "../db/mysql_dbConnection.php";
class AccountModel extends MySQLDatabase {
  protected $table = "account";

  public function getAll() {
    $sql = "SELECT * FROM $this->table";
    $result = $this->executeQuery($sql);
    return $result;
    // return $this->fetchData($result);
  }

  public function getOne_ID($id) {
    $id = $this->conn->real_escape_string($id);
    $sql = "SELECT * FROM $this->table WHERE UserID = $id";
    $result = $this->executeQuery($sql);
    // return $result;
    if (mysqli_num_rows($result) == 1) return mysqli_fetch_assoc($result);
    return false;
  }

  public function find($str) {
    $sql = "SELECT * FROM $this->table WHERE (UserID = $str) OR (Name LIKE '%$str%')";
    $result = $this->executeQuery($sql);
    return $result;
  }

  public function add(
    $UserID, $Password, $Role, $Name, $DoB, $PhoneNumber
  ) {
    $this->
    $UserID = $this->conn->real_escape_string($UserID);
    $Password = $this->conn->real_escape_string($Password);
    $Role = $this->conn->real_escape_string($Role);
    $Name = $this->conn->real_escape_string($Name);
    $DoB = $this->conn->real_escape_string($DoB);
    $PhoneNumber = $this->conn->real_escape_string($PhoneNumber);

    $sql = "INSERT INTO $this->table (UserID, Password, Email, Role, Name, DoB, PhoneNumber)
      VALUES ($UserID, $Password, leviettrung477@gmail.com, $Role, $Name, $DoB, $PhoneNumber)";
    return $this->executeQuery($sql);
  }

  public function updatePassword($id, $str) {
    $id = $this->conn->real_escape_string($id);
    $str = $this->conn->real_escape_string($str);
    $sql = "UPDATE $this->table SET Password = $str WHERE UserID = $id";
    return $this->executeQuery($sql);
  }

  public function updatePersonal($id, $Name, $DoB, $PhoneNumber) {
    $id = $this->conn->real_escape_string($id);
    $Name = $this->conn->real_escape_string($Name);
    $DoB = $this->conn->real_escape_string($DoB);
    $PhoneNumber = $this->conn->real_escape_string($PhoneNumber);

    $sql = "UPDATE $this->table SET 
      Name = $Name, DoB = $DoB, PhoneNumber = $PhoneNumber
      WHERE UserID = $id";
    return $this->executeQuery($sql);
  }

  public function delete($id) {
    $id = $this->conn->real_escape_string($id);

    $sql = "DELETE FROM $this->table WHERE UserID = $id";
    return $this->executeQuery($sql);
  }

  public function get_affected_rows() {
    return $this->conn->affected_rows;
  }
}

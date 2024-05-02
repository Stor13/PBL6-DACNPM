<?php
class MySQLDatabase {
  protected $host = "";
  protected $username = "";
  protected $password = "";
  protected $database = "";
  protected $conn;

  public function __construct() {
    $this->host = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->database = "SMPTS";

    $this->conn = new mysqli(
      $this->host,
      $this->username,
      $this->password,
      $this->database,
      3306
    );

    if ($this->conn->connect_error) {
      die("Connection failed: ".$this->conn->connect_error);
    }
  }

  public function executeQuery($sql) {
    $result = $this->conn->query($sql);
    if (!$result) {
      die("Query failed: ".$this->conn->error);
    }
    return $result;
  }

  public function fetchData($result) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
    return $data;
  }

  public function closeConnection() {
    $this->conn->close();
  }
}
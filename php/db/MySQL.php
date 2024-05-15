<?php
class MySQL_Conn {
  private $host;
  private $username;
  private $password;
  private $database;
  public $conn;

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
    if ($this->conn->connect_errno) {
      die("Connection Failed: ".$this->conn->connect_error);
    }
  }
  public function close() {
    $this->conn->close();
  }
}

// <?php
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "SMPTS";
// $port = 3306;
// $conn = new mysqli(
//   $host, $username, $password, $database, $port
// );
// if ($conn->connect_error) {
//   die("Connection Failed: ".$conn->connect_error);
// }
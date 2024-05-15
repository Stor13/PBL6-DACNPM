<?php
include_once "../db/MySQL.php";

function preprocess_input($a): string {
  return htmlspecialchars(strip_tags($a));
}

class Account {
  private mysqli $conn;
  private $table = "account";
  public $UserID;
  public $Password;
  public $Role;
  public $Email;
  public $Name;
  public $DoB;
  public $PhoneNumber;
  public $IsLocked;

  public function __construct() {
    $mysql_conn = new MySQL_Conn();
    $this->conn = $mysql_conn->conn;
  }
  
  public function create() {
    $sql = "INSERT INTO ".$this->table." 
            SET UserID=:UserID, Password=:Password, Role=:Role, 
            Email=:Email, Name=:Name, DoB=:DoB, PhoneNumber=:PhoneNumber, IsLocked=:IsLocked";
    $stmt = $this->conn->prepare($sql);

    $this->UserID = preprocess_input($this->UserID);
    $this->Password = preprocess_input($this->Password);
    $this->Email = preprocess_input($this->Email);
    $this->Role = preprocess_input($this->Role);
    $this->Name = preprocess_input($this->Name);
    $this->DoB = preprocess_input($this->DoB);
    $this->PhoneNumber = preprocess_input($this->PhoneNumber);
    $this->IsLocked = preprocess_input($this->IsLocked);

    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":Password", $this->Password);
    $stmt->bind_param(":Email", $this->Email);
    $stmt->bind_param(":Name", $this->Name);
    $stmt->bind_param(":DoB", $this->DoB);
    $stmt->bind_param(":Role", $this->Role);
    $stmt->bind_param(":PhoneNumber", $this->PhoneNumber);
    $stmt->bind_param(":IsLocked", $this->IsLocked);

    if ($stmt->execute()) return $stmt->affected_rows > 0;
    else return false;
  }

  public function getAll(): mysqli_result {
    $sql = "SELECT * FROM ".$this->table;
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function getOne_UserID(string $id): mysqli_result {
    $sql = "SELECT * FROM ".$this->table." WHERE UserID=:UserID LiMIT 1";
    $stmt = $this->conn->prepare($sql);
    $id = preprocess_input($id);
    $stmt->bind_param(":UserID", $id);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function get_Page(int $offset, int $limit): mysqli_result {
    $sql = "SELECT * FROM ".$this->table." LIMIT ".$limit." OFFSET ".$offset;
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function update(): bool {
    $sql = "UPDATE ".$this->table." SET Password=:Password, Role=:Role,
            Email=:Email, Name=:Name, DoB=:DoB, PhoneNumber=:PhoneNumber,
            IsLocked=:IsLocked WHERE UserID=:UserID";
    $stmt = $this->conn->prepare($sql);

    $this->UserID = preprocess_input($this->UserID);
    $this->Password = preprocess_input($this->Password);
    $this->Role = preprocess_input($this->Role);
    $this->Email = preprocess_input($this->Email);
    $this->DoB = preprocess_input($this->DoB);
    $this->PhoneNumber = preprocess_input($this->PhoneNumber);
    $this->Name = preprocess_input($this->Name);
    $this->IsLocked = preprocess_input($this->IsLocked);

    $stmt->bind_param(":UserID", $this->UserID);
    $stmt->bind_param(":Password", $this->Password);
    $stmt->bind_param(":Role", $this->Role);
    $stmt->bind_param(":Email", $this->Email);
    $stmt->bind_param(":Name", $this->Name);
    $stmt->bind_param(":DoB", $this->DoB);
    $stmt->bind_param(":PhoneNumber", $this->PhoneNumber);
    $stmt->bind_param(":IsLocked", $this->IsLocked);

    if ($stmt->execute()) return $stmt->affected_rows > 0;
    else return false;
  }

  public function find(string $str): mysqli_result {
    $str = preprocess_input($str);
    $sql = "SELECT * FROM ".$this->table." WHERE UserID LIKE %:str% OR Name LIKE %:str%";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param(":str", $str);
    $stmt->execute();
    return $stmt->get_result();
  }
}
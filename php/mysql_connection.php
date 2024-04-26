<?php
  $serverhost = "localhost";
  $username = "root";
  $password = "";
  $database = "smpts";
  
  $conn = new mysqli($serverhost, $username, $password, $database);
  if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
  }
?>
<?php
$host = "localhost";     // or 127.0.0.1
$user = "root";          // your MySQL username
$password = "";          // your MySQL password
$dbname = "onlineshoppingdb";      // your database name

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

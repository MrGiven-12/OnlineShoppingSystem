<?php
include 'connect.php';  // connect to the DB

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert into database
$sql = "INSERT INTO onlineshoppingdb (name,email) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $name, $email);

if ($stmt->execute()) {
  echo "Data inserted successfully.";
} else {
  echo "Error: " . $stmt->error;
}

$conn->close();
?>
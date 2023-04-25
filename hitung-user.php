<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query to get total number of users
$sql = "SELECT COUNT(*) as total_users FROM users";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_users = $row["total_users"];

echo "Total users: " . $total_users;

$conn->close();
?>

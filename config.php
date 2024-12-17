<?php
$servername = "localhost";
$username = "root";
$password = "";
// $database = "fyp_project";
$database = "Second_Hand_Market";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
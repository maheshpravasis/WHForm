<?php
$servername = "localhost";
$username = "admin";
$password = "admin123";
$dbname = "work_from_home";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
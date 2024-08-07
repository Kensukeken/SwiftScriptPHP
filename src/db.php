<?php
$servername = "localhost";
$username = "root";
$password = ""; // Empty string for the default XAMPP MySQL setup
$dbname = "todo_list";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// No closing ?> tag needed here

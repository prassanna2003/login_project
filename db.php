<?php
$host = "localhost";  // Database host (usually localhost)
$user = "root";       // Database username (default for XAMPP)
$pass = "";           // Database password (default is empty)
$dbname = "login_system";  // Database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

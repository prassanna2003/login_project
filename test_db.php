<?php
$host = "localhost";
$user = "root";  // Change if you have a different DB username
$pass = "";  // Add your password if you set one
$dbname = "login_system";  // Change to your actual database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!";
}
?>

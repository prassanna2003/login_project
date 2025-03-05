<?php
session_start();
include("db.php"); // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Encrypt password (Use password_hash() in real apps)

    // Check if user exists in the database
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username; // Store username in session
        header("Location: dashboard.php"); // Redirect to the dashboard
    } else {
        echo "Invalid username or password!";
    }
}
?>

<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Using MD5 hashing (ensure it matches DB)

    // Debugging: Print SQL query
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    echo "Debug SQL: " . $sql . "<br>";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password!";
    }
}
?>

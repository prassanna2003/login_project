<?php
$host = "localhost";
$user = "root";  // Change if you have a different DB username
$pass = "";  // Add password if applicable
$dbname = "login_system";  // Change to your actual DB name

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "✅ Users exist in the database!<br>";
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"] . "<br>";
    }
} else {
    echo "❌ No users found in the database!";
}
?>

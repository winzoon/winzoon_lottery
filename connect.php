<?php
$servername = "localhost";  // XAMPP ka server
$username = "root";          // Default user
$password = "";              // Default password (blank)
$database = "userdb";        // Aap ka database naam

// Connection bana rahe hain
$conn = mysqli_connect($servername, $username, $password, $database);

// Connection check kar rahe hain
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Success message (optional)
// echo "Connected successfully!";
?>

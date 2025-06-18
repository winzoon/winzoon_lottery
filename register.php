<?php
include 'connect.php'; // Database connection

if (isset($_POST['signup'])) {
    $name = $_POST['signup_name'];
    $email = $_POST['signup_email'];
    $password = $_POST['signup_password'];

    // Password hash for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL Query
    $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
        echo "Signup successful!";
        // You can redirect or show a success message
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

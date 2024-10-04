<?php
session_start();
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Adjust the query according to your actual column names
    $stmt = $conn->prepare("SELECT admin_id, username, password FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($admin_id, $db_username, $hashed_password);
        $stmt->fetch();
        echo "Fetched username from DB: " . $db_username; // Debugging line

        if (password_verify($password, $hashed_password)) {
            // Password is correct
            $_SESSION['admin_id'] = $admin_id;
            $_SESSION['username'] = $db_username;  // Set the username session variable
            header("Location: admin_dashboard.php");
            exit();
        } else {
            // Password is incorrect
            echo "<script>alert('Invalid username or password.'); window.location.href = 'admin_login.php';</script>";
        }
    } else {
        // Username not found
        echo "<script>alert('Invalid username or password.'); window.location.href = 'admin_login.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: admin_login.php");
    exit();
}

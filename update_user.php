<?php
require "database.php";

// Get form data
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$location = $_POST['location'];
$user_id = $_POST['user_id'];

// Update user data
$stmt = $conn->prepare("UPDATE users SET first_name = ?, last_name = ?, gender = ?, email = ?, phone_number = ?, password = ?, dob = ?, location = ? WHERE user_id = ?");
$stmt->bind_param("ssssssssi", $first_name, $last_name, $gender, $email, $phone_number, $password, $dob, $location, $user_id);

if ($stmt->execute()) {
    echo "<script>alert('User updated successfully!'); window.location.href = 'admin_dashboard.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
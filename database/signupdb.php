<?php
session_start();

$today = new DateTime();
$dob = new DateTime($_POST['date_of_birth']);
$age = $dob->diff($today)->y;

$servername = "localhost";
$username = "root";
$db_password = "";
$database = "destinationdelight";

$conn = new mysqli($servername, $username, $db_password, $database, 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Include the PHPMailer library
require 'C:\xampp\htdocs\DestinationDelight\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\DestinationDelight\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\DestinationDelight\PHPMailer-master\src\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sanitize_input($data)
{
    // Remove whitespace from the beginning and end of string
    $data = trim($data);
    // Remove backslashes (\)
    $data = stripslashes($data);
    // Convert special characters to HTML entities
    $data = htmlspecialchars($data);
    return $data;
}

$errorMessages = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input fields
    $first_name = sanitize_input($_POST["first_name"]);
    $last_name = sanitize_input($_POST["last_name"]);
    $gender = sanitize_input($_POST["gender"]);
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);
    $retype_password = sanitize_input($_POST["retype_password"]);
    $date_of_birth = sanitize_input($_POST["date_of_birth"]);
    $location = sanitize_input($_POST["location"]);

    // Check if passwords match
    if ($password !== $retype_password) {
        $errorMessages[] = "Passwords do not match";
    }

    // Check if email already exists
    $check_sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($check_sql);
    if ($result->num_rows > 0) {
        $errorMessages[] = "Email is already in use";
    } else if (empty($date_of_birth)) {
        $errorMessages[] = "Date of Birth is required";
    } else if (empty($location)) {
        $errorMessages[] = "Location is required";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Email doesn't exist, proceed with signup
        $sql = "INSERT INTO users (first_name, last_name, gender, email, password, dob, location, is_verified)
                    VALUES ('$first_name', '$last_name', '$gender', '$email', '$hashed_password', '$date_of_birth', '$location', 0)";

        if ($conn->query($sql) === TRUE) {
            // Set session variable for successful signup
            $verificationToken = bin2hex(random_bytes(16));

            $storeTokenSql = "INSERT INTO verification_tokens (email, token) VALUES (?, ?)";
            $storeTokenStmt = $conn->prepare($storeTokenSql);
            $storeTokenStmt->bind_param("ss", $email, $verificationToken);
            $storeTokenStmt->execute();

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'projectwebdev2024@gmail.com';
                $mail->Password = 'kdbmzvmhyywdywii'; // Replace with your Gmail App Password
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom('projectwebdev2024@gmail.com', 'Destination Delight');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'Email Verification';
                $mail->Body = "Click the following link to verify your email:<br><br>";
                $mail->Body .= "<a href='http://localhost/DestinationDelight/verify.php?token=$verificationToken'>Verify Email</a>";

                $mail->send();
                echo "<script>alert('Signup successful. Verification email sent.'); window.location.href = 'login.php';</script>";
            } catch (Exception $e) {
                echo "<script>alert('Failed to send verification email. Error: " . $mail->ErrorInfo . "'); window.location.href = 'signup.php';</script>";
            }
            $_SESSION["signup_success"] = true;

            // Redirect to login page with success parameter
            header("Location: /DestinationDelight/login.php?signup=success");
            exit();
        } else {
            // Handle SQL insertion error
            $errorMessages[] = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close database connection
$conn->close();
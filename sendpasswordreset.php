<?php
// Database connection
$servername = "localhost";
$username = "root";
$db_password = "";
$database = "destinationdelight";
$conn = new mysqli($servername, $username, $db_password, $database, 3307);

if ($conn->connect_error) {
    echo "<script>alert('Connection failed: " . $conn->connect_error . "');</script>";
    exit();
}

// Include the PHPMailer library
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Function to store the reset token and email in the database
function storeResetToken($email, $resetToken)
{
    global $conn;
    $sql = "INSERT INTO password_resets (email, token) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $resetToken);
    return $stmt->execute();
}

// Check if the email field is set
if (isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate the email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Check if the email exists in the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Email found in the database
            // Generate a random reset token
            $resetToken = bin2hex(random_bytes(16));

            // Store the reset token and email in the database
            if (storeResetToken($email, $resetToken)) {
                // Create a new PHPMailer instance
                $mail = new PHPMailer(true);

                try {
                    // Configure the SMTP settings
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'projectwebdev2024@gmail.com';
                    $mail->Password = 'kdbmzvmhyywdywii'; // Replace with your Gmail App Password
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;

                    // Set the email content
                    $mail->setFrom('projectwebdev2024@gmail.com', 'Destination Delight');
                    $mail->addAddress($email);
                    $mail->isHTML(true);
                    $mail->Subject = 'Password Reset Request';
                    $mail->Body = "Click the following link to reset your password:<br><br>";
                    $mail->Body .= "<a href='http://localhost/DestinationDelight/resetpassword.php?token=$resetToken'>Reset Password</a>";

                    // Send the email
                    $mail->send();
                    echo "<script>alert('Password reset email sent successfully.'); window.location.href = 'login.php';</script>";
                } catch (Exception $e) {
                    echo "<script>alert('Failed to send password reset email. Error: " . $mail->ErrorInfo . "'); window.location.href = 'forgotpassword.php';</script>";
                }
            } else {
                echo "<script>alert('Failed to store reset token in the database.'); window.location.href = 'forgotpassword.php';</script>";
            }
        } else {
            echo "<script>alert('Email address not found in our database.'); window.location.href = 'forgotpassword.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid email address.'); window.location.href = 'forgotpassword.php';</script>";
    }
} else {
    echo "<script>alert('Email address not provided.');</script> window.location.href = 'forgotpassword.php';";
}
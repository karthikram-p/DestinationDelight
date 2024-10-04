<?php

require "database.php";
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Handle tour completion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tour_id'])) {
    $tour_id = $_POST['tour_id'];

    $stmt = $conn->prepare("UPDATE tours SET completed = 1 WHERE tour_id = ?");
    $stmt->bind_param("i", $tour_id);

    if ($stmt->execute()) {
        sendCompletionEmail($tour_id);
        echo "<script>alert('Tour marked as completed successfully!'); window.location.href = 'admin_dashboard.php?page=tours';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

function sendCompletionEmail($tour_id)
{
    global $conn;

    // Fetch tour details including user's email
    $stmt = $conn->prepare("SELECT u.email FROM tours t INNER JOIN users u ON t.user_id = u.user_id WHERE t.tour_id = ?");
    $stmt->bind_param("i", $tour_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_email = $row['email'];

        $mail = new PHPMailer(true);

        try {
            // Create a new PHPMailer instance
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'projectwebdev2024@gmail.com';
            $mail->Password = 'kdbmzvmhyywdywii'; // Replace with your Gmail App Password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Email content
            $mail->setFrom('projectwebdev2024@gmail.com', 'Destination Delight');
            $mail->addAddress($user_email);
            $mail->isHTML(true);
            $mail->Subject = 'Your Tour is Completed!';
            $mail->Body = 'Dear Customer,<br><br>We are delighted to inform you that your tour has been successfully completed. We hope you had a wonderful experience with us. Please take a moment to review your tour.<br><br>Thank you for choosing us!<br><br>Best regards,<br>Destination Delight';

            // Send the email
            $mail->send();
        } catch (Exception $e) {
            echo "Failed to send completion email. Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "User email not found.";
    }
}

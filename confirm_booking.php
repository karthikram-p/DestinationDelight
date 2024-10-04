<?php

require "database.php";
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reservation_id'])) {
    $reservation_id = $_POST['reservation_id'];

    // Fetch reservation details
    $stmt = $conn->prepare("SELECT * FROM reservations WHERE id = ?");
    $stmt->bind_param("i", $reservation_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $reservation = $result->fetch_assoc();

    // Check if the user exists before proceeding
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
    $stmt->bind_param("i", $reservation['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $email = $user['email'];
        // Insert reservation into tours table
        $stmt = $conn->prepare("INSERT INTO tours (user_id, tour_name, tour_description, tour_date, completed) VALUES (?, ?, ?, ?, 0)");
        $stmt->bind_param("isss", $reservation['user_id'], $reservation['destination'], $reservation['trip_type'], $reservation['check_in']);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Update the confirm column in reservations table to 1
            $stmt = $conn->prepare("UPDATE reservations SET confirm = 1 WHERE id = ?");
            $stmt->bind_param("i", $reservation_id);
            $stmt->execute();

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
                $mail->Subject = 'Reservation Confirmation';
                $mail->Body = 'Your reservation is confirmed.<br>Date: ' . $reservation['check_in'] . '<br>Contact:<br> Email: destinationdelight@gmail.com <br>
Phone: +91 9996663330 <br>
Address: ABC complex, XYZ street, Hyderabad';

                $mail->send();
                echo "<script>alert('Booking confirmed. Confirmation email sent.'); window.location.href = 'admin_dashboard.php?page=reservations';</script>";
            } catch (Exception $e) {
                echo "<script>alert('Failed to send confirmation email.');</script>";
            }
        } else {
            echo "<script>alert('Failed to confirm booking');</script>";
        }
    } else {
        echo "<script>alert('User does not exist');</script>";
    }

    // Close prepared statements
    $stmt->close();

    // Close database connection
    $conn->close();

} else {
    // Redirect to admin_manage_reservations.php if reservation ID is not provided
    header('Location: admin_dashboard.php?page=reservations');
    exit();
}

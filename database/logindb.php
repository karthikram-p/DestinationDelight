<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "destinationdelight";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname, 3307);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query
    $sql = "SELECT email, password, online_status, is_verified FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Retrieve the hashed password from the database
        $row = $result->fetch_assoc(); // Using fetch_assoc to get an associative array
        $hashed_password = $row["password"];
        $online_status = $row["online_status"];
        $is_verified = $row["is_verified"];

        if ($online_status == 1) {
            header("Location: /DestinationDelight/login.php?error=2"); // Error code for already online
            exit();
        }

        if ($is_verified == 0) {
            header("Location: /DestinationDelight/login.php?error=3"); // Error code for already online
            exit();
        }

        // Verify the entered password with the hashed password
        if (password_verify($password, $hashed_password)) {
            $_SESSION["email"] = $email;
            header("Location: /DestinationDelight/loginpage.php");
            exit();
        } else {
            // Redirect with error if password doesn't match
            header("Location: /DestinationDelight/login.php?error=1");
            exit();
        }
    } else {
        // Redirect with error if email not found
        header("Location: /DestinationDelight/login.php?error=1");
        exit();
    }

    $conn->close();
} else {
    header("Location: /DestinationDelight/login.php");
    exit();
}
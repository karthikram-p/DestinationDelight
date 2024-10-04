<?php
$servername = "localhost";
$username = "root";
$db_password = "";
$database = "destinationdelight";

$conn = new mysqli($servername, $username, $db_password, $database, 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;
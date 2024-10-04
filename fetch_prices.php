<?php
require_once "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destination = $_POST['destination'];
    $hotel = isset($_POST['hotel']) ? (int) $_POST['hotel'] : 0;
    $guide = isset($_POST['guide']) ? (int) $_POST['guide'] : 0;
    $trip_type = $_POST['trip_type'];

    $stmt = $conn->prepare("SELECT * FROM destination_prices WHERE destination = ?");
    $stmt->bind_param("s", $destination);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $min_price = $row['min_price'];
        $avg_price = $row['avg_price'];
        $max_price = $row['max_price'];

        if ($hotel) {
            $min_price += $row['hotel_price'];
            $avg_price += $row['hotel_price'];
            $max_price += $row['hotel_price'];
        }
        if ($guide) {
            $min_price += $row['guide_price'];
            $avg_price += $row['guide_price'];
            $max_price += $row['guide_price'];
        }
        if ($trip_type === 'round-trip') {
            $min_price += $row['round_trip_price'];
            $avg_price += $row['round_trip_price'];
            $max_price += $row['round_trip_price'];
        }
        if ($trip_type === 'one-way') {
            $min_price += $row['one_way_price'];
            $avg_price += $row['one_way_price'];
            $max_price += $row['one_way_price'];
        }

        echo json_encode([
            'min_price' => number_format($min_price, 2),
            'avg_price' => number_format($avg_price, 2),
            'max_price' => number_format($max_price, 2),
        ]);
    } else {
        echo json_encode([
            'min_price' => '0.00',
            'avg_price' => '0.00',
            'max_price' => '0.00',
        ]);
    }

    $stmt->close();
    $conn->close();
}
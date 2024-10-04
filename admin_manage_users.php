<?php
require "database.php";

// Fetch all users
$result = $conn->query("SELECT * FROM users where is_verified=1");

echo "<h2>Manage Users</h2>";
echo "<table>";
echo "<tr>
<th>ID</th>
<th>Full Name</th>
<th>Gender</th>
<th>Email</th>
<th>Phone Number</th>
<th>Date of Birth</th>
<th>Location</th>
<th>Actions</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['user_id'] . "</td>";
    echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td>" . $row['location'] . "</td>";
    echo "<td>";
    echo "<a href='edit_user.php?id=" . $row['user_id'] . "'>Edit</a> ";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";

<?php
// Include the database connection file
require_once "database.php";

// Handle form submission for adding or updating prices
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destination = $_POST['destination'];
    $min_price = $_POST['min_price'];
    $avg_price = $_POST['avg_price'];
    $max_price = $_POST['max_price'];

    if (isset($_POST['id']) && !empty($_POST['id'])) {
        // Update existing price entry
        $id = $_POST['id'];
        $stmt = $conn->prepare("UPDATE destination_prices SET destination=?, min_price=?, avg_price=?, max_price=? WHERE id=?");
        $stmt->bind_param("siiii", $destination, $min_price, $avg_price, $max_price, $id);
    } else {
        // Insert new price entry
        $stmt = $conn->prepare("INSERT INTO destination_prices (destination, min_price, avg_price, max_price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siii", $destination, $min_price, $avg_price, $max_price);
    }
    $stmt->execute();
    $stmt->close();
    header('Location: admin_dashboard.php?page=prices');
    exit();
}

// Handle delete request
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM destination_prices WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header('Location: admin_dashboard.php?page=prices');
    exit();
}

// Fetch all price entries
$result = $conn->query("SELECT * FROM destination_prices");
?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDestinationPriceModal">
    Add New Destination Price
</button>
<div class="container">
    <h2>Manage Destination Prices</h2>
    <h3 class="mt-4">Current Prices</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Destination</th>
                <th>Minimum Price</th>
                <th>Average Price</th>
                <th>Maximum Price</th>
                <th>Hotel Price</th>
                <th>Guide Price</th>
                <th>One Way Price</th>
                <th>Round Trip Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['destination']); ?></td>
                    <td><?php echo htmlspecialchars($row['min_price']); ?></td>
                    <td><?php echo htmlspecialchars($row['avg_price']); ?></td>
                    <td><?php echo htmlspecialchars($row['max_price']); ?></td>
                    <td><?php echo htmlspecialchars($row['hotel_price']); ?></td>
                    <td><?php echo htmlspecialchars($row['guide_price']); ?></td>
                    <td><?php echo htmlspecialchars($row['one_way_price']); ?></td>
                    <td><?php echo htmlspecialchars($row['round_trip_price']); ?></td>
                    <td>
                        <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#editModal"
                            data-id="<?php echo $row['id']; ?>" data-destination="<?php echo $row['destination']; ?>"
                            data-min="<?php echo $row['min_price']; ?>" data-avg="<?php echo $row['avg_price']; ?>"
                            data-max="<?php echo $row['max_price']; ?>" data-hotel="<?php echo $row['hotel_price']; ?>"
                            data-guide="<?php echo $row['guide_price']; ?>"
                            data-one-way="<?php echo $row['one_way_price']; ?>"
                            data-round-trip="<?php echo $row['round_trip_price']; ?>">Edit</button>
                        <a href="admin_manage_prices.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Modal for Adding New Destination Price -->
<div class="modal fade" id="addDestinationPriceModal" tabindex="-1" aria-labelledby="addDestinationPriceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDestinationPriceModalLabel">Add New Destination Price</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="add_destination_price.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="destination">Destination:</label>
                        <input type="text" name="destination" id="destination" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="min_price">Minimum Price:</label>
                        <input type="number" name="min_price" id="min_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="avg_price">Average Price:</label>
                        <input type="number" name="avg_price" id="avg_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="max_price">Maximum Price:</label>
                        <input type="number" name="max_price" id="max_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="hotel_price">Hotel Price:</label>
                        <input type="number" name="hotel_price" id="hotel_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="guide_price">Guide Price:</label>
                        <input type="number" name="guide_price" id="guide_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="one_way_price">One Way Price:</label>
                        <input type="number" name="one_way_price" id="one_way_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="round_trip_price">Round Trip Price:</label>
                        <input type="number" name="round_trip_price" id="round_trip_price" class="form-control"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Destination Price</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
<!-- Modal for Editing Destination Prices -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Destination Price</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editForm" action="update_destination_price.php" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId">
                    <div class="form-group">
                        <label for="editDestination">Destination:</label>
                        <input type="text" class="form-control" id="editDestination" name="destination" required>
                    </div>
                    <div class="form-group">
                        <label for="editMinPrice">Minimum Price:</label>
                        <input type="number" class="form-control" id="editMinPrice" name="min_price" required>
                    </div>
                    <div class="form-group">
                        <label for="editAvgPrice">Average Price:</label>
                        <input type="number" class="form-control" id="editAvgPrice" name="avg_price" required>
                    </div>
                    <div class="form-group">
                        <label for="editMaxPrice">Maximum Price:</label>
                        <input type="number" class="form-control" id="editMaxPrice" name="max_price" required>
                    </div>
                    <div class="form-group">
                        <label for="editHotelPrice">Hotel Price:</label>
                        <input type="number" class="form-control" id="editHotelPrice" name="hotel_price" required>
                    </div>
                    <div class="form-group">
                        <label for="editGuidePrice">Guide Price:</label>
                        <input type="number" class="form-control" id="editGuidePrice" name="guide_price" required>
                    </div>
                    <div class="form-group">
                        <label for="editOneWayPrice">One Way Price:</label>
                        <input type="number" class="form-control" id="editOneWayPrice" name="one_way_price" required>
                    </div>
                    <div class="form-group">
                        <label for="editRoundTripPrice">Round Trip Price:</label>
                        <input type="number" class="form-control" id="editRoundTripPrice" name="round_trip_price"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Script to populate edit modal fields when "Edit" button is clicked
    document.querySelectorAll('.btn-edit').forEach(button => {
        button.addEventListener('click', function () {
            document.getElementById('editId').value = this.dataset.id;
            document.getElementById('editDestination').value = this.dataset.destination;
            document.getElementById('editMinPrice').value = this.dataset.min;
            document.getElementById('editAvgPrice').value = this.dataset.avg;
            document.getElementById('editMaxPrice').value = this.dataset.max;
            document.getElementById('editHotelPrice').value = this.dataset.hotel;
            document.getElementById('editGuidePrice').value = this.dataset.guide;
            document.getElementById('editOneWayPrice').value = this.dataset.oneWay;
            document.getElementById('editRoundTripPrice').value = this.dataset.roundTrip;
        });
    });
</script>
</body>

</html>